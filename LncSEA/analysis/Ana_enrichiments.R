setwd("/var/www/html/LncSEA/analysis")
library("getopt")
# 进度条
library("RCurl")

Args<-commandArgs(TRUE)
pvalue=Args[1]
FDR=Args[2]
Bonferroni=Args[3]
min=Args[4]
max=Args[5]
path=Args[6]
userId=Args[7]
file<-read.table("An_dh.txt")

sas<-function(x)
{
unlist(strsplit(x[1],split="-"))[1]
}

fp<-function(x)
{
unlist(strsplit(x[11],split="/"))[2]
}

regrep<-function(x)	
{
unlist(strsplit(x[1],split="-"))[1]
}



enrichment<-function(x,y,pvalue=0.05,fdr,bonferroni,mix,max,path,userId)
{	
	path=path
    input<-c(x)
    n<-length(input)
    type<-as.character(y)
	T_type<-unique(apply(as.matrix(type),1,sas))
	retp<-T_type
	rg<-as.matrix(type)
	rge<-apply(rg,1,regrep)
	url='http://39.98.139.1/LncSEA/analysis/process.php'
	for(j in 1:length(T_type))
	{
	getURL(paste0(url,"?userId=",userId,"&process=",j*100/length(T_type)))
	load( paste0("Rdata_fen/",file[which(T_type[j]==file),1],".Rdata") )	

	pr<-type[which(T_type[j]==rge)]		
	res<-c()
		for(k in 1:length(pr))
		{
		data<-onlist[[which(pr[k]==names(onlist))]]
	
		result<-matrix(0,length(data),12)

			for(i in 1:length(data))
			{
			inter<-intersect(input,data[[i]][[1]])
			result[i,1]<-names(data)[i]
			result[i,2]<-T_type[j]
			result[i,3]<-unlist(strsplit(pr[k],split="-"))[length(unlist(strsplit(pr[k],split="-")))]
			result[i,4]<-length(inter)
			result[i,5]<-paste0(inter,collapse=";")
			result[i,6]<-signif(length(inter)/(min(length(input),length(data[[i]][[1]]))),3)##Sim
			result[i,7]<-signif(phyper(length(inter)-1,n,58460-n,data[[i]]$length,lower.tail=FALSE),3)##pох
			##p<-phyper(length(inter)-1,n,58460-n,data[[1]]$length,lower.tail=FALSE)

			
			result[i,10]<-signif(length(inter)/length(unique(c(input,data[[i]][[1]]))),3)
			result[i,11]<-paste0(length(inter),"/",data[[i]]$length)
			result[i,12]<-n
			}
		if(dim(result)[1]>=1)
		{
		result[,8]<-signif(p.adjust(result[,7],method="BH",length(result[,1]) ) ,3)###FDR
		result[,9]<-signif(p.adjust(result[,7],method="bonferroni",length(result[,1])),3)###Bonferroni
		}



		result<-result[which(as.numeric(result[,7])<=as.numeric(pvalue)),]
		if(is.null(dim(result)))
		{
		result<-t(result)
		}
		result<-result[which(as.numeric(result[,8])<=as.numeric(fdr)),]
		if(is.null(dim(result)))
		{
		result<-t(result)
		}
		result<-result[which(as.numeric(result[,9])<=as.numeric(bonferroni)),]
		if(is.null(dim(result)))
		{
		result<-t(result)
		}
			if(max!="null")
			{
			result<-result[which(as.numeric(apply(result,1,fp))<=as.numeric(max)),]
			}
			if(min!="null")
			{
			result<-result[which(as.numeric(apply(result,1,fp))>=as.numeric(min)),]
			}
		res<-rbind(res,result)
		res<-res[order(as.numeric(res[,7]),decreasing=F),]
		if(is.null(dim(res)))
		{
		res<-t(res)
		}
		res[,7]<-signif(as.numeric(res[,7]),3)	
		colnames(res)<-c("Set","Class","Sub_Class","Count","LncRNA","Simpson","P-value","FDR","Bonferroni","Jaccard","%","Input_number")	
		}
	write.table(res,paste0("/var/www/html/LncSEA/analysis/accum/",path,T_type[j],".txt"),quote=F,sep="\t",col.names=T,row.names=F)
	print(T_type[j])
	
	if(dim(res)[1]==0)
	{
	retp<-retp[-which(T_type[j]==retp)]
	}
	write.table(as.matrix(retp),paste0("/var/www/html/LncSEA/analysis/accum/",path,"type.txt"),quote=F,sep="\t",col.names=F,row.names=F)
	}
	getURL(paste0(url,"?userId=",userId,"&process=100"))
}





type<-as.matrix(read.table(paste0("/var/www/html/LncSEA/analysis/accum/",path,"database.txt")))

lnp<-read.table(paste0("/var/www/html/LncSEA/analysis/accum/",path,"input.txt"))
if(dim(lnp)[1]==1)
{
ipt<-as.character(as.matrix(lnp[1,]))
}else{
ipt<-as.character(as.matrix(lnp[,1]))
}


setwd("/var/www/html/LncSEA/analysis/upfile")
allfile<-dir()
if(length(grep(path,allfile))>0)
{
  usefile<-allfile[grep(path,allfile)]
  uselen<-length(unlist(strsplit(usefile,"\\.")))
  if( unlist(strsplit(usefile,"\\."))[uselen] =="csv" || unlist(strsplit(usefile,"\\."))[uselen] =="xlsx" ) 	
	{
	lnp<-read.csv(usefile,header=F)
	if(dim(lnp)[1]==1)
	{
	ipt<-as.character(as.matrix(lnp[1,]))
	}else{
	ipt<-as.character(as.matrix(lnp[,1]))
	}
	}else
	{
	lnp<-read.table(usefile)
	if(dim(lnp)[1]==1)
	{
	ipt<-as.character(as.matrix(lnp[1,]))
	}else{
	ipt<-as.character(as.matrix(lnp[,1]))
	}
	}
}

setwd("/var/www/html/LncSEA/analysis")
#####write.table(userId,"das.txt")
enrichment(ipt,type,pvalue,FDR,Bonferroni,min,max,path,userId)
print(type)