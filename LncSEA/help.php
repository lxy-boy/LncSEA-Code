<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Help</title>
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico"/>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
			<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<script src='https://www.echartsjs.com/gallery/vendors/echarts/echarts.min.js'></script>
		<script src='https://www.echartsjs.com/gallery/vendors/echarts/extension/dataTool.js'></script>
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/footer.css"/>
	<link rel="stylesheet" href="public/css/ico.css">
	 <script src="echarts.js"></script>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="a.css">
	<script src="b.js"></script>

	<link href="/VARAdb/public/css/dataTables.bootstrap.min-1.10.13.css" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet">
	<style type="text/css">
		.bottom{margin-top:12px;}
		.dataTables_filter{margin-top:8px;}
		.dataTables_length{margin-top:8px;}
		        											

		    .black_overlay{ 
            display: none; 
            position: fixed; 
            top: 0%; 
            left: 0%; 
            width: 100%; 
            height: 100%; 
            background-color: gray; 
            z-index:1001; 
            -moz-opacity: 0.8; 
            opacity:.80; 
            filter: alpha(opacity=88); 
        } 
        .white { 

            display: none; 
            width: 500px;
            height: 450px;
            background-color: white;
            position: fixed;
			z-index:1005;
			margin-left:23%;
			margin-top:-20px;
			text-align:center;
            font-size:20px;
			font-family:黑体;
			color:#84072a;
             
            z-index:1005; 
           
        } 
        .white_content { 
             
             position: absolute; 
            top: 14%; 
            right:  0%; 
            width: 100%; 
            height: 80%; 
            text-align:center;
            font-size:20px;
			font-family:黑体;
			color:#84072a;
            background-color: white; 
            z-index:1004; 
            overflow: auto; 
      overflow-y:scroll;  
        } 
		 .cl{
    position: absolute; 
    
		top:0%; 
        right: 0%;
        z-index: 1005;
        color: #84072a;
    }
    .kl{
    position: absolute; 
		font-size:37px;
		top:3%; 
        right: 45%;
        z-index: 1005;
        color: #5183f2;
    }
    hr {
    border: 0;
    border-bottom: 2px solid black;
    z-index: 1007;
    margin-top: 20px;
    margin-bottom: 20px;
    border: 0;
        border-top-color: currentcolor;
        border-top-style: none;
        border-top-width: 0px;
    border-top: 1px solid 
    #eee;
}

		.qp{
		position:absolute;
		margin-top: 100px;
		margin-left:100px;
		width: 500px;
		
		height: 500px;
			}
	
			#accordion .panel-heading{
		    padding: 0;
		    border: none;
		    border-radius: 0;
		    position: relative;
			height: 50%;
		}
		#accordion .panel-title a{
		    display: block;
		    padding: 15px 20px;
		    margin: 0;
		    background: #50d8af;
		    font-size: 18px;
		    font-weight: 700;
		    letter-spacing: 1px;
		    color: #fff;
		    border-radius: 0;
		    position: relative;
		}
		.panel-default > .panel-heading {

			olor: #60bda7;
			background-color:#50d8af;
			border-color:#ddd;
			}
        .panel-success > .panel-heading {
            background-color:
                    #50d8af;
            border-color:
                    #d6e9c6;
            height: 50px;
        }
		#accordion .panel-title a.collapsed{ 
			background: #50d8af;}
		#accordion .panel-title a:before,
		#accordion .panel-title a.collapsed:before{
		    content: "\f068";
		    font-family: fontawesome;
		    width: 30px;
		    height: 30px;
		    line-height: 25px;
		    border-radius: 50%;
		    background: #50d8af;
		    font-size: 14px;
		    font-weight: normal;
		    color: #fff;
		    text-align: center;
		    border: 3px solid #fff;
		    position: absolute;
		    top: 10px;
		    right: 14px;
		}
		#accordion .panel-title a.collapsed:before{
		    content: "\f067";
		    background: #50d8af;
		    border: 4px solid #fff;
		}
		#accordion .panel-title a:after,
		#accordion .panel-title a.collapsed:after{
		    content: "";
		    width: 17px;
		    height: 7px;
		    background: #fff;
		    position: absolute;
		    top: 22px;
		    right: 0;
		}

		#accordion .panel-body{
		    border-left: 3px solid #50d8af;
		    border-top: none;
		    background: #fff;
		    font-size: 15px;
		    color: #1c2336;
		    line-height: 27px;
		    position: relative;
		}
		#accordion .panel-body:before{
		    content: "";
		    height: 3px;
		    width: 100%;
		    background: #50d8af;
		    position: absolute;
		    bottom: 0;
		    left: 0;
		}
		.hr1{ height:1px;border:none;border-top:3px solid #346191;}
		
		
		.panel-heading > h2{
            position: relative;
            /*top: -11px;*/
		}
		.panel-body > .btn{
			margin: auto;
			display: block;
		}
		.panel-body > .btn-success {
			background-color: #0c2e8a;
		}
        a.list-group-item:hover{
            color: #fff;
            background-color: #337ab7;
            border-color: #337ab7;
        }

	</style>
	<script>
$(function () { 
	$("[data-toggle='popover']").popover();
});
</script>
	<?php
ini_set("error_reporting","E_ALL & ~E_NOTICE");
?>
</head>

<body id="body">
<!--==========================
  Header
============================-->
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Lnc<span>SEA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="Analysis.php">Analysis</a></li>
                <li><a href="Search.php">Search</a></li>
                <li><a href="data-browse.php">Browse</a></li>
<li><a href="/LncSEA/id_conversion.php">ID conversion</a></li>
                <li><a href="download.php">Download</a></li>
                <li  class="menu-active"><a href="help.php">Help</a></li>
                <li class="menu-has-children"><a href="http://www.licpathway.net/">Contact</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
	<div class="row">
<div class="col-lg-2 "  style="position: fixed;">	
	<div class="panel-group" role="tablist" >
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="#Disease">Help</a></h4>
				</div>
				<div class="list-group" id="left_classI_1">
					<a class="list-group-item" href="#Introduction" ><span class="badge"></span>Introduction</a>
					<a class="list-group-item" href="#How to Use the LncSEA?" ><span class="badge"></span>How to Use the LncSEA?</a>
					<a class="list-group-item" href="#LncSEA Collections" ><span class="badge"></span>LncSEA Sets</a>
				</div>
			</div>
		</div>
<div class="panel-group" role="tablist" style="overflow-y:auto;height: 250px;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><a href="#Disease">Sets</a></h4>
				</div>
				<div class="list-group" id="left_classI_1">
				<a class="list-group-item" href="#Disease" ><span class="badge"></span>C1:Disease</a>
				<a class="list-group-item" href="#Drug" ><span class="badge"></span>C2:Drug</a>
				<a class="list-group-item" href="#MicroRNA" ><span class="badge"></span>C3:MicroRNA</a>
				<a class="list-group-item" href="#Cancer_phenotype" ><span class="badge"></span>C4:Cancer Phenotype</a>

				<div class="collapse" id="left_classI_1_collapse">
				<a class="list-group-item" href="#Enhancer_and_super_enhancer" ><span class="badge"></span>C5&C6:Enhancer and super enhancer</a>
                    <a class="list-group-item" href="#Accessible_chromatin" ><span class="badge"></span>C7:Accessible Chromatin</a>
				<a class="list-group-item" href="#Cell_Marker" ><span class="badge"></span>C8:Cell Marker</a>
				<a class="list-group-item" href="#Subcellular_localization" ><span class="badge"></span>C9:Subcellular Localization</a>
				<a class="list-group-item" href="#Cancer_Hallmark" ><span class="badge"></span>C10:Cancer Hallmark</a>
				<a class="list-group-item" href="#Transcription_factor" ><span class="badge"></span>C11:Transcription Factor</a>
				<a class="list-group-item" href="#Methylation_pattern" ><span class="badge"></span>C12:Methylation Pattern</a>
				<a class="list-group-item" href="#RBP" ><span class="badge"></span>C13:RNA Binding Protein</a>
				<a class="list-group-item" href="#Survival" ><span class="badge"></span>C14:Survival</a>
				<a class="list-group-item" href="#Small_ORF" ><span class="badge"></span>C15:SmORF</a>
				<a class="list-group-item" href="#Exosome" ><span class="badge"></span>C16:Exosome</a>
				<a class="list-group-item" href="#eQTL" ><span class="badge"></span>C17:eQTL</a>
				<a class="list-group-item" href="#conservation" ><span class="badge"></span>C18:Conservation</a>

				</div>
						<a id="left_classI_1_collapse_btn" class="text-center list-group-item" role="button" data-toggle="collapse" href="#left_classI_1_collapse" aria-expanded="false">
							<span class="glyphicon glyphicon-chevron-down"></span>
						</a>	
				</div>
			</div>
		</div>
</div>

<div class="col-lg-4 col-lg-offset-3">
	
</div>	
</div>
</div>	
</div>

<div class="row">
<div class="col-lg-9 col-lg-offset-2" style="text-align:justify;font-size: 125%">
<div class="panel panel-success">	
<a name="Introduction"></a>
<div class="panel-heading"><h2><font style="color: #0c2e8a">Introduction</font></h2></div>

<!-- 

<div style="margin-top:20px;margin-left:20px;margin-left:80px;margin-right:80px">
  
  <h4><font style="">Browser compatibility</font></h4>
   <table class="table table-hover" style="font-weight: 00;">
	<tr>
	<td>OS</td>
	<td>Version</td>
	<td>Chrome</td>
	<td>Firefox</td>
	<td>Microsoft Edge</td>
	<td>Safari</td>	
	</tr>
	
		
	<tr>
	<td>Linux </td>
	<td>CentOS 7</td>	
	<td>not tested</td>	 	 		 	
	<td>71.0</td>
	<td>n/a</td>	 
	<td>13.0.2</td>	 
	</tr>
	
	
	
<tr>
		<td>MacOS</td>
	<td>HighSierra 	</td>	
	<td>79.0</td>	 	 		 	
	<td>71.0</td>
	<td>n/a</td>	 
	<td>12.0</td>
	</tr>
	
	
<tr>
		<td>Windows  </td>
	<td>10</td>	
	<td>not tested</td>	 	 		 	
	<td>61.0</td>
	<td>n/a</td>	 
	<td>not tested</td>
	</tr>
	
	</table>
      </div>  	






 -->

<p style="text-align:justify;padding:10px 10px;">
LncSEA is a powerful platform that provides a variety of types of lncRNA sets for users and perform annotation and enrichment analysis of lncRNA sets based on lncRNA lists submited by users. We collected lncRNA sets from more than 20 associated lncRNA databases. We not only collected lncRNA sets based on downstream regulatory data sources but also calculated a large number of lncRNA sets regulated by upstream transcription factors (TFs) and DNA regulatory elements by integrating TF ChIP-seq, DNase-seq, ATAC-seq and H3K27ac ChIP-seq data associated with hundreds of human cell types. Importantly, LncSEA provides annotation and enrichment analysis functions of lncRNA sets. Moreover, lncRNA set enrichment analysis associated with upstream regulators and downstream targets of lncRNAs can be performed simultaneously when choosing the categories of both upstream and downstream reference sets. LncSEA also provides a user-friendly interface to search, browse and visualize detailed information about these lncRNA sets.    <div style="text-align:center;"><img src="public/img/lbt/help_7.jpg" border="0" usemap="#Map" style="width:880px;" ></div>
	


<div class="panel-heading" style="margin-top: 5%"><h2><font style="color: #0c2e8a"><a name="How to Use the LncSEA?">How to Use the LncSEA?</a></font></h2></div>
<div class="panel-body">
        <button id="Analysis" style="width:500px" class="btn btn-success collapsed" type="button" data-toggle="collapse" data-target="#analysis" aria-expanded="false" aria-controls="analysis">
            <font size="3">Analysis</font>
        </button>
        <div class="collapse" id="analysis" aria-expanded="false" style="height: 0px;">
          <br>
            <div style="border-style: double;padding: 20px;font-size: 120%;text-align:justify ">
               <b>I. Input:</b> Allow the user to input an interesting lncRNA name list or a text file. <br><br><b>II. Options:</b> Select class and sub class of reference sets and optional parameters for analysis.<br><br><b>III. Analysis:</b> Annotate the input into the reference collections selected by the user, and calculate the significance of enrichment analysis by hypergeometric test according to the number of lncRNA intersecting.<br><br><b>IV. Output:</b> LncSEA will return all significant collections information related the input to provide users with download and visualization. <br>
				<div style="text-align:center;"><img src="public/img/lbt/help_analysis.png" width="100%"></div>
            </div>
        </div>
        <hr>

        <button id="Browse" style="width:500px" class="btn btn-success collapsed" type="button" data-toggle="collapse" data-target="#browse" aria-expanded="false" aria-controls="browse">
            <font size="3">Browse</font>
        </button>
        <div class="collapse" id="browse" aria-expanded="false" style="height: 0px;">
            <br>
            <div style="border-style: double;padding: 20px;font-size: 120%;text-align:justify ">
                The "Browse" page is organized as an interactive table for quickly searching for lncRNA sets and customizing filters using "Class" and "Sub Class". Users can click the "Show entries" in a dropdown menu to change the number of records displayed per page. To view details of a given reference set of lncRNA, users click on "Set name".
				<div style="text-align:center;"><img src="public/img/lbt/help_browse.png" class="" width="100%"></div>
            </div>
            <hr>

        </div>
        <hr>
        
        <button id="Search" style="width:500px" class="btn btn-success" type="button" data-toggle="collapse" data-target="#search" aria-expanded="false" aria-controls="search">
            <font size="3">Search</font>
        </button>
        <div class="collapse" id="search" aria-expanded="false" style="height: 0px;">
			<br>
			<div style="border-style: double;padding: 20px;font-size: 120%;text-align:justify ">LncSEA supports three different searching modes: "Search by LncRNA name/ID", "Search by Genomic Region" and "Genomic Sequence". Brief search results are presented as a table in the result page. As an example, users can click Search→ Search by LncRNA name/ID → PVT1, HOTAIR, CCAT1, LncSEA will automatically display LncRNA essential information and Collection categories queried. Search results are divided into four modules on the current page, including lncRNA annotation and some of the seventeen categories. Users can click the "LncRNA Symbol" to view details about current lncRNA details. To view details of a given reference set of lncRNA, users also click on "Set name". The other two search methods Search→ Search by Genome region; Search→ Search by Genome sequence are the same as the first.
				<div style="text-align:center;"><img src="public/img/lbt/help_search.png" class="" width="100%"></div>
            <hr>
        </div>
	</div>
        <hr>
        <button id="Download" style="width:500px" class="btn btn-success collapsed" type="button" data-toggle="collapse" data-target="#download" aria-expanded="false" aria-controls="download">
            <font size="3">Download</font>
        </button>
        <div class="collapse" id="download" aria-expanded="false" style="height: 0px;">
          <br>
            <div style="border-style: double;padding: 20px;font-size: 120%;text-align:justify ">
               LncSEA supports the download of all of tables or figures for analysis. All collections of lncRNA are packaged into two kinds of formats(text and gmt) file for download, in addition, details on the relationship between each reference set and the lncRNA are also available for download.
			   <div style="text-align:center;"><img src="public/img/lbt/help_5.jpg" width="100%"></div>
            </div>
        </div>
        <hr>
        	
        	
        	
          <button id="Conservation" style="width:500px" class="btn btn-success" type="button" data-toggle="collapse" data-target="#conservation" aria-expanded="false" aria-controls="conservation">
            <font size="3">ID conversion</font>
        </button>
        <div class="collapse" id="conservation" aria-expanded="false" style="height: 0px;">
			<br>
			<div style="border-style: double;padding: 20px;font-size: 120%;text-align:justify ">LnSEA also supported a user-friendly ‘ID conversion’ function. Users can paste a lncRNA list or upload a file separated by spaces with multiple lncRNA names including gene symbol, ensembl ID, NCBI refseq ID, alias and entrez ID. When clicking on the ’Convert’, users can obtain the converted result table. User not only can download the result table, but also can chick on the ‘Analysis’ to connect to enrichment analysis page for these lncRNAs. 
				<div style="text-align:center;"><img src="public/img/lbt/help_ID conversion.png" class="" width="100%"></div>
            <hr>
        </div>
	</div>	
           <hr>	
        	
      </div>

	

	<div class="panel-heading" style="margin-top: 5%"><h2><font style="color:#0c2e8a"><a name="LncSEA Collections">LncSEA Sets</a></font></h2></div>
	<div style="text-align:center;"><img src="public/img/lbt/help_61.png" border="0" usemap="#Map" style="width:750px;"></div>
	
<map name="Map">
  <area shape="poly" coords="67,416,71,416,36,457,113,478,161,454,119,430" href="#RBP">
  <area shape="poly" coords="208,467,189,490,224,511,274,492,228,448" href="#MicroRNA">
  <area shape="poly" coords="284,467,303,443,338,453,339,494,291,493" href="#Disease">
  <area shape="poly" coords="375,450,448,449,458,518,379,517" href="#Survival">
  <area shape="poly" coords="493,462,618,464,615,503,489,505" href="#Enhancer_and_super_enhancer">
  <area shape="poly" coords="615,326,630,384,738,386,739,335" href="#Methylation_pattern">
  <area shape="poly" coords="614,214,628,280,739,280,739,212" href="#Transcription_factor">
  <area shape="poly" coords="591,83,601,123,706,120,711,74" href="#Accessible_chromatin">
  <area shape="poly" coords="476,28,481,79,573,81,580,28" href="#EQTL">
  <area shape="poly" coords="371,10,380,92,443,90,444,13,445,8" href="#Cancer_phenotype">
  <area shape="poly" coords="256,6,279,84,324,85,335,8" href="#Drug">
  <area shape="poly" coords="139,33,198,103,243,94,226,28" href="#Cancer_Hallmark">
  <area shape="poly" coords="41,53,47,121,108,121,122,57" href="#Cell_Marker">
  <area shape="poly" coords="12,164,112,168,116,218,11,217" href="#Small_ORF">
  <area shape="poly" coords="17,284,16,356,98,357,102,286" href="#Subcellular_localization">
<area shape="poly" coords="704,471,682,393,617,408,600,429,688,486" href="#Exosome">




	<br>
	<p style="text-align:justify;padding:10px 10px;">
	<b><a name="Disease">C1: Disease </a></b>
        In recent years, there have been several widely used resources to store the relationship between lncRNAs and diseases. In order to collect sets of disease, we integrated many experimentally supported associations between lncRNA and human cancer or disease from <a style="color: red" href="http://www.bio-bigdata.net/lnc2cancer">Lnc2Cancer2.0</a>, <a style="color: red" href="http://biophy.dzu.edu.cn/EVLncRNAs">EVLncRNAs</a>, <a style="color: red" href="http://www.cuilab.cn/lncrnadisease/">LncRNADisease2.0</a> and <a style="color: red" href="http://www.rna-society.org/mndr/">MNDR2.0</a>. We divided the disease category into four sub-categories by different data sources. Each disease collection consists of a list of lncRNAs associated with the disease. In addition, some supporting evidences like methods and PMID are also displayed in LncSEA.
        <br>
    <b></b>
	<b><a name="Drug">C2: Drug </a></b>
        We downloaded the relationships between drugs and lncRNAs from <a style="color: red" href="http://bio-bigdata.hrbmu.edu.cn/LncMAP/index.jsp">LncMap</a> database. The relationships were calculated by the Spearman correlations between lncRNA expression levels and IC50 values of 24 drugs across cell lines. The correlation coefficient and P value are displayed in our database. We defined each unique drug related lncRNAs as a predictive set. At the same time, we got a batch of drug-resistant related lncRNAs experimentally supported from <a style="color: red" href="">Lnc2Cancer2.0.</a> In order to distinguish the two sets accurately, we divided the drug set into two subs-categories by different sources.
        <br>
	<b><a name="MicroRNA">C3: MicroRNA </a></b>
        A large number of researches showed that lncRNAs performed a variety of regulatory functions for downstream genes such as microRNAs. Through integrating miRNA-target interactions in large-scale CLIP-Seq (HITS-CLIP, PAR-CLIP, iCLIP, CLASH) data from <a style="color: red" href=" http://starbase.sysu.edu.cn/starbase2/index.php">StarBase2.0</a> and <a style="color: red" href=" http://carolina.imis.athena-innovation.gr/diana_tools/web/index.php?r=lncbasev2/index-predicted">LncBase2.0</a>, we defined each unique miRNA related lncRNAs from one of two sources as a miRNA set. These collections will contribute to understand the mechanisms of lncRNAs. For example, lncRNAs often function as competing endogenous RNAs binding miRNA family members in disease.
        <br>
	<b><a name="Cancer_phenotype">C4: Cancer Phenotype </a></b>
        The discovery of cancer subtypes has become one of the research hotspots in oncology. So, we downloaded phenotype-specific lncRNAs from <a style="color: red" href=" http://syslab4.nchu.edu.tw/">Cancer RNA-Seq Nexus</a> that included 40 cancers and 325 phenotypes. We defined 40 cancer sub-categories. Each phenotype (e.g. breast cancer stage II, ER+ breast cancer and Her2+ breast cancer) set contains a group of differential expression of lncRNAs between two kinds of organization samples. Average expression of samples and significant P value are available in LncSEA. Our lncRNA sets of the different subtypes that we store can provide the basis for accurate and personalized medicine.
        <br>
	<b><a name="Enhancer_and_super_enhancer">C5&C6: Enhancer and Super Enhancer </a></b>
        In order to build the ‘Enhancer’ and ‘Super Enhancer’ categories sets, we collected and processed H3K27ac ChIP-seq data from <a style="color: red" href=" https://www.ncbi.nlm.nih.gov/">NCBI GEO/SRA</a>, <a style="color: red" href=" https://www.encodeproject.org/">ENCODE</a>, <a style="color: red" href=" http://www.roadmapepigenomics.org/">Roadmap</a> and <a style="color: red" href=" https://www.genome.gov/Funded-Programs-Projects/Genomics-of-Gene-Regulation">GGR (Genomics of Gene Regulation Project)</a>. To control normalization and consistency across various data sources, we used the streamlined pipeline of Bowtie-MACS-ROSE, which was developed by Loven et al. Raw sequencing reads were aligned to hg19 reference genomes with Bowtie, peaks were called using MACS14, and SE regions were annotated using ROSE software. Finally, we obtained more than 330 000 SE regions involving 542 cells/tissues that was developed by our group. Based on these enhancers and super-enhancers, we identified the lncRNAs regulated by cell-type-specific enhancers and super enhancers using ROSE software GeneMapper program. Three different positional relationships including ‘overlap’, ‘proximal’ and ‘closest’ between enhancers and lncRNAs were supported. There are closest active lncRNAs with super enhancer identified by CRC Mapper program in specific cell type.
        <br>
	<b><a name="Accessible_chromatin">C7: Accessible Chromatin </a></b>The chromatin accessibility data, including DNase-seq and ATAC-seq, are available for hundreds of cell types. For DNase-seq, we collected genomic region data of 292 sample types from <a style="color: red" href="https://www.encodeproject.org/">ENCODE</a>, <a style="color: red" href="http://www.roadmapepigenomics.org/">Roadmap</a> and <a style="color: red" href="http://www.cistrome.org/">Cistrome. </a> For ATAC-seq, we collected genomic region data of 105 sample types from Cistrome, NCBI and 386 samples in 23 kinds of cancer types from <a style="color: red" href="https://tcga-data.nci.nih.gov/tcga">TCGA. </a> We used the liftOver tool of UCSC to convert genomic locations of these genomic region datasets into hg19 version. The ROSE software GeneMapper program was also used to predict chromatin-accessibility-region associated lncRNAs with proximity rules including closest, overlapping and proximal.
        <br>
	<b><a name="Cell_Marker">C8: Cell Marker </a></b>One of the most fundamental questions in biology is which types of cells form different tissues and organs in a functionally coordinated fashion. Larger-scale single cell sequencing and biological experimental studies are now rapidly opening up new ways to track this question by revealing substantial cell markers for distinguishing different cell types in tissues. Some lncRNAs are also regarded as cell markers to identify cells. We downloaded lncRNAs that are potential to be cell markers from <a style="color: red" href=" http://biocc.hrbmu.edu.cn/CellMarker/">CellMarker</a> database for various cell types in tissues of human. Because of the small number of lncRNAs, we did not divide this category into other smaller sub-categories.
        <br>
	<b><a name="Subcellular_localization">C9: Subcellular Localization </a></b>There are two main mechanisms of LncRNA: transcriptional and post-transcriptional level regulation. The former plays a regulatory role in the nucleus through the role of nuclear factors, while the latter plays a regulatory role in the cytoplasm through the ceRNA mechanism. We collected lncRNAs with different positions in the cells from <a style="color: red" href="http://www.rna-society.org/rnalocate/">RNALocate</a> which provided a lot of lncRNA location information experimentally confirmed and <a style="color: red" href="http://lin-group.cn/server/iLoc-LncRNA/">iLoc-lncRNA</a> that supported information predicted by bioinformatic methods. We divide subcellular localization collection into two categories by data source and data accuracy.
        <br>
	<b><a name="Cancer_Hallmark">C10: Cancer Hallmark </a></b>With the development of high-throughput sequencing technology, a large amount of multi-component molecular data has been generated, which brings opportunities to the research of cancer mechanism and cancer treatment. Analysis of the hallmarks of tumours is beneficial to our research and unknown exploration of tumours. We collected lncRNAs as tumour markers including apoptosis, invasion, metastasis, migration, prognosis and proliferation from <a style="color: red" href="http://crlnc.xtbg.ac.cn/">CRlncRNA</a> database. Some additional proof and information such as cancer type, lncRNA expression level and PMID are also supported in LncSEA.
        <br>
	<b><a name="Transcription_factor">C11: Transcription Factor </a></b>Increasing evidence suggests that lncRNA could be regulated by upstream transcription factors. We collected transcription factor ChIP-seq data of 467 sample types from <a style="color: red" href="https://www.encodeproject.org/">ENCODE</a>, <a style="color: red" href="http://tagc.univ-mrs.fr/remap/index.php">Remap</a>, <a style="color: red" href="http://www.cistrome.org/">Cistrome</a>, <a style="color: red" href="http://chip-atlas.org">ChIP-Atlas</a> and <a style="color: red" href="http://gtrd.biouml.org/">GTRD</a>. We used liftOver tool of UCSC to convert ChIP-seq peak data into hg19 version. We further identified the peaks overlapping with transcriptional regulatory regions including super enhancers, promoters and Chromatin accessibility regions of lncRNAs using BEDTools. Then, the relationships between transcription factors and lncRNAs were built via many kinds of lncRNA-related regulatory regions, such as promoter and enhancer regions bound by transcription factors. Finally, for each transcription factor, we established lncRNA sets with cells/tissues specific regulatory information.
        <br>
	<b><a name="Methylation_pattern">C12: Methylation Pattern </a></b>LncRNAs play an important role in some essential epigenetic regulation processes such as DNA methylation. DNA methylation is a fundamental feature of epigenomes that can affect the expression of protein-coding or non-coding transcripts. We got manually curated collection and annotation of experimentally supported lncRNAs-DNA methylation associations from <a style="color: red" href="http://bio-bigdata.hrbmu.edu.cn/Lnc2Meth/">Lnc2Meth.</a> They were divided into five patterns of DNA methylation, such as "methylation", "demethylation", "hyper methylation", "hypor methylation" and "differential methylation ".
        <br>
	<b><a name="RBP">C13: RNA binding Protein </a></b>RNA binding proteins (RBP) mediate RNA maturation, transport, localization, and translation. One RBP may have multiple targets and its expression defects can cause multiple diseases. A number of high-throughput techniques and bioinformatics prediction algorithms have been used in recent years to RNA the protein binding relationship. By integrating RNA binding proteins that rooted in large-scale CLIP-Seq data from <a style="color: red" href="http://starbase.sysu.edu.cn/starbase2/index.php">StarBase</a>, <a style="color: red" href="http://www.rna-society.org/raid/">RNAInter</a>  and <a style="color: red" href="http://eurbpdb.syshospital.org/">EuRBPDB</a>, we defined each unique protein related LncRNAs as a set. Our lncRNA sets will contribute to investigate the regulatory landscape of cellular lncRNAs.
        <br>
	<b><a name="Survival">C14: Survival </a></b>Some survival interacted lncRNAs were predicted by downloading and analysing lncRNA expression data and clinical data. Univariate Cox regression analysis was used to screen out lncRNA related to prognosis. We defined each cancer survival related lncRNAs as a set in <a style="color: red" href="https://tcga-data.nci.nih.gov/tcga">TCGA project. </a> Cox regression coefficients, p values and log rank test p values are displayed on set detail pages of our database for user screening and reference. Our survival sets will inform and guide the study of prognosis and lncRNA expression in cancer patients.
        <br>
	<b><a name="Small_ORF">C15: SmORF </a></b>Recent studies found that there are many short or small open ORF (sORFs or smORFs in the body that can encode small peptide. In addition, it was also found that non-coding genes or non-coding regions such as UTR also contained smORFs encoded functional peptides involved in muscle function regulation and regulation of cell metabolism. First,we collected encoding small peptides from <a style="color: red" href="http://sorfs.org/">sorf.org</a>  and <a style="color: red" href="http://bioinfo.ibp.ac.cn/SmProt/">SmProt. </a>  And we got lncRNA annotation information from <a style="color: red" href="https://www.gencodegenes.org/">GENCODE</a>  database. By calculating the intersection regions of small peptides and lncRNAs, we obtain some lncRNAs with the function of encoding small peptides and their specific genomic locations. Finally, we classify these sets into several subsets according to the type of lncRNA.
        <br>
        <b><a name="Exosome">C16: Exosome </a></b>Exosome is a kind of vesicle secreted by cells. It belongs to an extra cellular vesicle and contains different kinds of RNA to regulate the behavior of receptor cells. It also can be used as a circulating biomarker of disease. We obtained lncRNAs in human blood exosomes with experimental validations to construct a exosome associated lncRNA set.
        <br>
	<b><a name="eQTL">C17:eQTL </a></b>Numerous studies indicate that lncRNAs have critical functions across biological processes, and single nucleotide polymorphisms (SNPs) could contribute to diseases or traits through influencing lncRNA expression. We aim to build some sets of lncRNAs that have specific mutations in in different cancer types. We collected eQTLs of human cancers from <a style="color: red" href="http://ibi.hzau.edu.cn/ncRNA-eQTL/">ncRNA-eQTL</a>  database across 33 cancer types. Both cis- and trans- eQTL studies were included. We also linked lncRNA-eQTLs to genome-wide association study (GWAS) data. Furthermore, we obtained lncRNA sets wuth four different types including ‘Common cis’ and ‘Common trans’ eQTL lncRNAs, ‘Gwas cis’ and ‘Gwas trans’. Further details about SNP are also displayed on the set detail pages of the LncSEA.
    <br>
   	<b><a name="conservation">C18:Conservation </a></b>Recent advances studies have revealed many lncRNAs do not show the same pattern of high interspecies conservation as protein-coding genes. In order to construct lncRNA sets associated conservation, we obtained the evolutionary conservation of exons and promoters of lncRNAs from LnCompare, which were calculated using phastCons elements based on multispecies alignment. According to the conservative score of each lncRNA, we sorted and divided all the lncRNAs into three sets conservative high, middle and low. A conservation category was classified to three sub categories including ‘100 vertebrates’, ’20 mammals’ and ‘7 vertebrates’. These functional sets of conservation can contribute to the functional interpretation of lncRNA.
    </p>


		</div>
	</div>
</div>

<footer id="footer">
    <div class="container">
        <div class="copyright">
            <p style="color: white;">Copyright © 2019 School of Medical Informatics,Daqing Campus</p>
            <p style="color: white;margin-top: -30px"><img src="/LncSEA/public/img/beian.png" style="width: 18px;margin-bottom: 2px;"> <a href="http://www.beian.miit.gov.cn" style="color:#09c5ff">黑ICP备16009434号-1</a>  Harbin Medical University Chunquan Li Lab</p>
        </div>
    </div>
</footer><!-- #footer -->
</body>
</html>