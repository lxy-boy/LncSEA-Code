<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Analysis Result</title>
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<link rel="stylesheet" href="../public/css/header.css">
	<link rel="stylesheet" href="../public/css/footer.css"/>
	<link rel="stylesheet" href="../public/css/ico.css">
	 <script src="../echarts.js"></script>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<!--	<link rel="stylesheet" href="../a.css">-->
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <!--<script src="../b.js"></script>-->

	<link href="/VARAdb/public/css/dataTables.bootstrap.min-1.10.13.css" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
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
      overflow-y:auto;
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
		}
		#accordion .panel-title {
		    display: block;
		    padding: 15px 20px;
		    margin: 0;
		    background: #60BDA0;
		    font-size: 18px;
		    font-weight: 700;
		    letter-spacing: 1px;
		    color: #fff;
		    border-radius: 0;
		    position: relative;
		}
		#accordion .panel-title .collapsed{
			background: #60BDA0;}



        th[class="sorting"]{
            white-space: nowrap;
        }

		#accordion .panel-body{
		    border-left: 3px solid #60BDA0;
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
		    background: #60BDA0;
		    position: absolute;
		    bottom: 0;
		    left: 0;
		}
/* 		.btn-warning {
		color: #fff;
		background-color:#337ab7;
		border-color:#204d74;
		font-size: 10px;
		}
		.btn-warning:hover {
		color: #fff;
		background-color:#286090;
		border-color:#204d74;
		} */


		.hr1{ height:1px;border:none;border-top:3px solid #346191;}

        .popover-content{
            overflow-y: auto;
            max-height: 85px;
            padding:9px 14px;
            word-wrap:break-word;
            word-break:break-all;
        }
        .odd button{
            border: 0px;
            background-color:#f9f9f9;
            color:#337ab7;
        }
        .even button{
            border: 0px;
            background-color:#ffffff;
            color:#337ab7;
        }
	</style>
	<script>
$(function () {
	$("[data-toggle='popover']").popover();
});
</script>
	<?php
//ini_set("error_reporting","E_ALL & ~E_NOTICE");
ini_set(‘memory_limit’,’356M’);
?>

</head>


<?php
$dkname=$_GET['dkname'];
$filename="/var/www/html/LncSEA/analysis/accum/".$dkname."type.txt";
$type_down_contents = file_get_contents($filename);
$type_down_lines =explode("\n",$type_down_contents);
function unique($str){

    $arr = explode(',', $str);

    $arr = array_unique($arr);

    $data = '';

    //使用foreach循环拼接也可以得到，得到的效果是一样的  

    foreach ($arr as $key => $value) {

        $data .= '"'.$value.'",';//拼接关键代码</span></strong>

    }

    $data = trim($data,',""');

    return $data;
}

?>
<body id="body">

<div class="row" style="width:99%;">





<div class="row">
<div class="col-lg-12 col-md-offset">


<div class="row"><!---手风琴开始--->
		<div class="col-md-12 col-md-offset">

			 <?php

			 	$m=$_GET["m"];

		     	$exp="exp".$m;
		     	$main="main".$m;
		     	$bar="bar".$m;
		     	$myModal="myModal".$m;
		     	$myModalbar="myModalbar".$m;
		     	$downloadname="accum/".$dkname.substr($type_down_lines[$m],0,strlen($type_down_lines[$m])).".txt";
		     ?>





		                <div class="row">
		                <div class="col-lg-6 col-lg-offset" style="margin-left: 1%">
  <a  class="btn btn-primary " href="<?php echo $downloadname;?>" download="<?php echo $type_down_lines[$m];?>">
          <span class="glyphicon glyphicon-save"></span> Save
        </a>


<!-- 模态框按钮 -->
	<button class="btn btn btn-primary" data-toggle="modal" data-target="#<?php echo $myModal;?>"><span class="glyphicon glyphicon-picture"></span>  Bubble chart</button>




<!-- 模态框（Modal） -->
		<div class="modal fade" id="<?php echo $myModal;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $myModal;?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 900px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" >&times;</button>
                <h4 class="modal-title" id="<?php echo $myModal;?>Label" style="text-align: center;"><?php echo $type_down_lines[$m];?></h4>
            </div>
            <div class="modal-body">
                <div id="<?php echo $main;?>" style="height:500px;width: 880px;margin-left: 0px;">


                </div><!---图start--->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>

            </div>
        </div><!-- /.modal-content -->
    		</div><!-- /.modal -->
			</div>
<!-- 模态框结束 -->

<!-- 模态框按钮 -->
	<button class="btn btn btn-primary " data-toggle="modal" data-target="#<?php echo $myModalbar;?>"><span class="glyphicon glyphicon-picture"></span> bar</button>
<!-- 模态框（Modal） -->
		<div class="modal fade" id="<?php echo $myModalbar;?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $myModalbar;?>Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 900px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="<?php echo $myModalbar;?>Label" style="text-align: center;"><?php echo $type_down_lines[$m];?></h4>
            </div>
            <div class="modal-body">
               <div id="<?php echo $bar;?>"  style="height:600px;width: 800px;margin-left: 0px;">


                    </div><!---图start--->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>

            </div>
        </div><!-- /.modal-content -->
    		</div><!-- /.modal -->
			</div>
<!-- 模态框结束 -->
    <div class="modal fade" id="dvenn" tabindex="-1" role="dialog" aria-labelledby="dasdasdLabel" aria-hidden="true" style="">
    <div class="modal-dialog">
        <div class="modal-content" style="width: 600px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="dasdasdLabel" style="text-align: center;">Venn Plot</h4>
            </div>
            <div class="modal-body">

              <div id="pvenn" style="width: 550px;height:400px;margin-left:0%" ></div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">close</button>

            </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal -->
      </div>





		                </div>


	<table style="border-collapse: collapse;float: right;">
<tr>
<th style="border:0px solid black;background: #ADF7B2;height: 30px;width:40%">0-0.01</th>

<th style="border:0px solid black;background:#60BDA0;height: 30px;;width:40%">0.01-0.05</th>
</tr>

	</table>





		                </div>


				<div class="row"><!---表格start--->
				<div class="col-lg-12 col-md-offset">
				<div class="col-lg-12">
						<?php

					if(!empty($read)){  unset($read);}
					if(!empty($gesa_down_contents)){  unset($gesa_down_contents);}
					if(!empty($gesa_down_lines)){  unset($gesa_down_lines);}
					if(!empty($gesa_down_item)){  unset($gesa_down_item);}
					if(!empty($gesa_down_cols)){  unset($gesa_down_cols);}
					if(!empty($gesa_down_data)){  unset($gesa_down_data);}



					 $read="/var/www/html/LncSEA/analysis/accum/".$dkname.substr($type_down_lines[$m],0,strlen($type_down_lines[$m])).".txt";

				   $gesa_down_contents = file_get_contents($read);


						  $gesa_down_lines =explode("\n",$gesa_down_contents);
						  foreach ($gesa_down_lines as $gesa_down_item) {
						    if ($gesa_down_item=="") continue;

						    $gesa_down_cols =explode("\t", $gesa_down_item);
						    $gesa_down_data[]=$gesa_down_cols;
						  };
					if((count($gesa_down_data,0)-1)>850)
					{
					echo '
					<div class="panel panel-success" style="margin-top:1%">
   <div class="panel-heading">
      <h3 class="panel-title">Because the analysis results exceed the maximum number of rows, the website displays the first 850 lines by default. If you want to see all the information,please download the result file.</h3>
   </div>
</div>

					';
					}
					?>

				 <table id="<?php echo $exp;?>" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
				   <thead>
                   <tr>
                       <th>Set</th>
                       <th>Class</th>
                       <th>Sub_class</th>
                       <th width="19%">Count<i class="glyphicon glyphicon-question-sign" title="Number of intersections."></i></th>


                       <th width="19%">%<i class="glyphicon glyphicon-question-sign" title="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;The number of intersections is the percentage of the number of lncRNAs in this set."></i></th>
                       <th width="19%">Jaccard <i class="glyphicon glyphicon-question-sign" title="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;It represents a proportion of the intersection elements of the two sets A and B in the union set of A and B. "></i></th>
                       <th width="19%">Sim<i class="glyphicon glyphicon-question-sign" title="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;It represents a proportion of intersection elements of the two sets A and B in the minimum set of A and B."></i></th>

                       <th width="19%">P_value<i class="glyphicon glyphicon-question-sign" title="Hypergeometric P value."></i></th>
                       <th width="19%">BH<i class="glyphicon glyphicon-question-sign" title="Adjusted p value with FalseDiscovery Rate method."></i></th>
                       <th width="19%">Bonferroni<i class="glyphicon glyphicon-question-sign" title="Adjusted p value with FalseDiscovery Rate method. "></i></th>
                       <th width="19%">Venn<i class="glyphicon glyphicon-question-sign" title="&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;A Venn graph represents the relationship between the input and the reference set."></i></th>
                   </tr>
										</thead>
      										<tbody>
				   <?php
				   $j=count($gesa_down_data,0)-1;
				   if($j>850)
				   {
				   $j=850;
				   }
						$a="'block'";

						$c="'none'";
						$xzhou="";
						$xdata="";
						$tiao_x="";
						$tiao_y="";

						$max=0;
						$min=9999999;
						$mapexp="";
						$ardas=[];
						for($i=1;$i<=$j;$i++)
						{
							if($gesa_down_data[$i][1]=="Drug" || $gesa_down_data[$i][1]=="EQTL")
							{
							$conner=explode("_", $gesa_down_data[$i][2])[0];
echo '<tr><td><a href="../databrowse/set_'.$gesa_down_data[$i][1].'_'.$conner.'.php?classI='.$gesa_down_data[$i][1].'&set='.$gesa_down_data[$i][0].'&classII='.$gesa_down_data[$i][2].'&lenght=88" target="_blank" >'.$gesa_down_data[$i][0].'</a></td>';
							}else{
						echo '<tr><td><a href="../databrowse/set_'.$gesa_down_data[$i][1].'.php?classI='.$gesa_down_data[$i][1].'&set='.$gesa_down_data[$i][0].'&classII='.$gesa_down_data[$i][2].'&lenght=88" target="_blank" >'.$gesa_down_data[$i][0].'</a></td>';
					}
					echo
						'<td>'.$gesa_down_data[$i][1].'</td>
						<td>'.$gesa_down_data[$i][2].'</td>

						<td>
						<i type="button" class="buttc" style="cursor:pointer;color: #0c2e8a"  title="'.$gesa_down_data[$i][0].'"  
									data-container="body" data-toggle="popover"  data-placement="top" data-trigger="click|focus"
								data-content="'.$gesa_down_data[$i][4].'">
											'.$gesa_down_data[$i][3].'
									</i></td>
								
						
						<td>'.$gesa_down_data[$i][10].' </td>
						<td>'.$gesa_down_data[$i][9].' </td>
						<td>'.$gesa_down_data[$i][5].'</td>	
							
						<td name="td">'.$gesa_down_data[$i][6].'</td>
						<td name="td">'.$gesa_down_data[$i][7].'</td>
						<td name="td">'.$gesa_down_data[$i][8].'</td>
						<td> <a data-toggle="modal"
						 data-target="#dvenn" 
						 id="'.$gesa_down_data[$i][0].'/'.explode("/",$gesa_down_data[$i][10])[1].'/input/'.$gesa_down_data[$i][11].'/'.$gesa_down_data[$i][3].'" 
						 onclick="dalw_venn(this)"    
						 >         <span class="glyphicon glyphicon-file"></span>      </a></td>
						</tr>';

							if($i<=20)
						{
						$tiao_x=$tiao_x."','".$gesa_down_data[$i][0];
						$xzhou=$xzhou."','".$gesa_down_data[$i][0];

						if($max<strlen($gesa_down_data[$i][0]))
						{
						$max=strlen($gesa_down_data[$i][0]);
						}

						if($min>$gesa_down_data[$i][3])
						{
						$min=$gesa_down_data[$i][3];

						}
						$pv=-log10($gesa_down_data[$i][6]);
						$mapexp=$mapexp.','.$gesa_down_data[$i][2];


						$ardas[$i]["id"]=$gesa_down_data[$i][2];
						$ardas[$i][1]=$pv;
						$ardas[$i]["yalx"]=$gesa_down_data[$i][0];
						$ardas[$i][3]=$gesa_down_data[$i][3];

						$xdata=$xdata."],[".$pv.",'".$gesa_down_data[$i][0]."',".$gesa_down_data[$i][3];
						$tiao_y=$tiao_y.",".$pv;
						}


						}
						$rx=substr($xzhou,3,strlen($xzhou));
						$rdata=substr($xdata,3,strlen($xdata));
						$rrx="data:['".substr($xzhou,3,strlen($xzhou))."'],";
						$tiao_x="'".substr($tiao_x,3,strlen($tiao_x))."'";
						$tiao_y=substr($tiao_y,1,strlen($tiao_y));
						$tiao_y =preg_replace("/INF/","0",$tiao_y);
						/*echo $max;*/



						?>

      						</tbody>
  						</table>
  								</div>
  							</div>
						</div>
						<br><br>


                   </div>

<script type="text/javascript">
	var myChart = echarts.init(document.getElementById('<?php echo $main;?>'));


<?php

$mapexpr=unique($mapexp);
						/*print_r($ardas);*/
						$arr2 = array_column($ardas, 'id');
						/*print_r($arr2);*/
						$intd="";
						$qpl=explode('","',$mapexpr);
						for($pl=0;$pl<count($qpl);$pl++)
						{
						$pldata="";
							for($plt=0;$plt<20;$plt++)
							{
							if($qpl[$pl]==$arr2[$plt])
							{
							$pldata=$pldata.",[".$ardas[$plt+1][1].",'".str_replace(" ","", $ardas[$plt+1]["yalx"])."',".((sqrt($ardas[$plt+1][3]/$min))*7)."]";
							}
							}
							$pldatar=trim($pldata,",");

							echo  'var data'.$pl.'=[ '.preg_replace('/INF/','0',$pldatar).',];';


							   $intd= $intd.'{
							           	name: "'.$qpl[$pl].'",
							            type: "scatter",
							            itemStyle: itemStyle,
							            data: data'.$pl.',
							             symbolSize: function (data) {
							            return Math.abs(data[2]);
							        },
									 label: {
							            emphasis: {
							                show: true,
							                formatter: function (param) {
							                    return param.data[1];
							                },
							                position: "top"
							            }
							        },
							        },';
						}







						/*echo $mapexpr;*/
						$arr3=array_column($ardas, 'yalx');
						$arr32 =implode(" , ",$arr3);

						/*echo "<br>";
						echo $intd;*/


?>



var itemStyle = {
    normal: {


    }
};

//option = {
//	            toolbox: { //可视化的工具箱
//                show: true,
//                x: 'right',
//                feature: {
//                    saveAsImage: {//保存图片
//                        show: true,
//                        title:'download',
//                    },
//
//                }
//            },
//    color: [
//        "#2F9323","#D9B63A","#2E2AA4","#1F814A","#357F88","#673509","#310937","#1B9637","#F7393C"
//    ],
//    legend: {
//        y: 'top',
//        x:'left',
//        data: [/*"<?php //echo $ardas[1]["yalx"]?>//",*/"<?php //echo $mapexpr;?>//"],
//        textStyle: {
//            color: '#191E27',
//            fontSize: 16
//        }
//    },
//    tooltip: {
//        trigger: 'item',
//        axisPointer: {
//            type: 'cross'
//        }
//    },
//    grid: {
//        x: 82+(<?php //echo $max?>//*5.7),//左留白
//        x2: 70,
//        y: '18%',
//        y2: '10%'
//    },
//    tooltip: {
//
//    },
//    xAxis: {
//        type: 'value',
//       name:'-log10',
//        nameGap: 16,
//        nameTextStyle: {
//            color: '#191E27',
//            fontSize: 14
//        },
//
//        splitLine: {
//            show: true
//        },
//        axisLine: {
//            lineStyle: {
//                color: '#191E27'
//            }
//        }
//    },
//        yAxis: [{
//			//data:*[/!*"<?php //echo $ardas[1]["yalx"]?>//",*!/" <?php //echo str_replace(" ","", unique($arr32)) ;?>//"]*/,
//            splitLine: {
//            lineStyle: {
//                type: 'dashed'
//            }
//        }
//        }],
//    visualMap: [
//    ],
//    series: [

//
//
//    ]
//};



    </script><!---图end--->

<script>
    console.log('test!!!!!!!!!!!!!!!!!!!!!!!!')
    console.log([<?php echo $intd;?>]);
    option = {
        legend: {
            data: ["<?php echo $mapexpr;?>"],
            right: 10,
            left: 10
        },
        grid:{//直角坐标系内绘图网格
            show:true,//是否显示直角坐标系网格。[ default: false ]
            left:82+(<?php echo $max?>*5.7),//grid 组件离容器左侧的距离。
            right:"30px",
        },
        toolbox: {
        	right:20,
            show : true,
            feature : {
                dataView : {show: true, readOnly: false,title:'dataView'},
                restore : {show: true,title:'restore',},
                saveAsImage : {show: true,title:'download',}
            }
        },
        xAxis: {
            name: 'P-value (-log10)',
            nameLocation: 'center',
            nameGap: 35,
            splitLine: {
                lineStyle: {
                    type: 'dashed'
                }
            },
            /*interval: 0.001*/
        },
        yAxis: {

            type: 'category',
            splitLine: {
                lineStyle: {
                    type: 'dashed'
                }
            },
            scale: true,
            interval: 0.001
        },
        tooltip: {
            trigger: 'item',
            axisPointer: {
                type: 'cross'
            }
        },
        series: [<?php echo $intd;?>]
    };
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }
</script>
<script type="text/javascript">


var myChart = echarts.init(document.getElementById('<?php echo $bar;?>'));

        // 指定图表的配置项和数据
        var option = {



            toolbox: { //可视化的工具箱
                show: true,
                x: 'left',
                feature: {
                    saveAsImage: {//保存图片
                        show: true,
                        title:'download',
                    },

                }
            },


            tooltip: {},
            grid:{   //绘图区调整
            x:82+(<?php echo $max?>*5.7),  //左留白
            y:30,   //上留白
            x2:20,  //右留白
            y2:65   //下留白
        },

            xAxis: {
            	 type: 'value',
            	 name:'-log10',
            },
            yAxis: {

            	type: 'category',
            	data: [<?php echo $tiao_x;?>]

            },
            series: [{
                name: '-log10(P_value)',
                type: 'bar',
                data: [ <?php echo $tiao_y;?>],
                barWidth : 10,
            }]
        };
        myChart.setOption(option);

</script>


			  	<script type="text/javascript">
$(document).ready(function() {
    $('#<?php echo $exp;?>').dataTable( {
    	"lengthMenu":[15,25,50,100],
    	"order": [[ 1, "asc" ]], //默认排序
        "dom": '<"top row"<"col-lg-2 col-md-2 pull-left"i><"col-lg-5 col-md-5 pull-right"f>>rt<"bottom row"<"col-lg-2 col-lg-2 pull-left"l><"col-lg-8 col-lg-8 pull-right"p>><"clear">'
    } );
} );
</script>
</div>
		        </div><!---手风琴/tissue-based/end--->


</div></div>


<script>

    var tdArr = document.getElementsByName("td");

    for(var i=0;i<tdArr.length;i++){
        tdArr[i].innerText >=0 && tdArr[i].innerText <=0.01?tdArr[i].style.backgroundColor = "#ADF7B2": tdArr[i].style.backgroundColor = "write";
        tdArr[i].innerText >=0.01 && tdArr[i].innerText <=0.05?tdArr[i].style.backgroundColor ="#60BDA0" : tdArr[i].style.backgroundColor = "write";

	}
</script>



<script src="http://echarts.baidu.com/build/dist/echarts-all.js"></script>
    <script>
function   dalw_venn(x)
{

var  spe=x.id.split("/") ;


var myChart = echarts.init(document.getElementById('pvenn'));

var option = {
    title : {

    },
    tooltip : {
        trigger: 'item',
        formatter: "{b}: {c}"
    },
 toolbox: {
      x: 'left',
        show : true,
        feature : {
            restore : {
              show: true,
              title:'reduction',
            },
            saveAsImage : {
              title:'download',
              show: true
            }
        }
    },
    calculable : false,
    series : [
        {
            name:'wenen',
            type:'venn',
            itemStyle: {
                normal: {
                    label: {
                        show: true,
                        textStyle: {
                            fontFamily: 'Arial, Verdana, sans-serif',
                            fontSize: 16,
                            fontStyle: 'italic',
                            fontWeight: 'bolder'
                        }
                    },
                    labelLine: {
                        show: false,
                        length: 10,
                        lineStyle: {
                            // color: 各异,
                            width: 1,
                            type: 'solid'
                        }
                    }
                },
                emphasis: {
                    color: '#cc99cc',
                    borderWidth: 3,
                    borderColor: '#996699'
                }
            },
             data:[
                {value: parseInt(spe[1]), name: spe[0]},
                {value: parseInt(spe[3]), name: spe[2]},
                {value: parseInt(spe[4]), name:'Intersection number'}
            ]
        }
    ]
};





        myChart.setOption(option);


} ;

</script>
<?php
/*echo  'var data'.$pl.'=[ '.$pldatar.' ];';
echo "<br>";
echo  $mapexpr;
echo "<br>";
echo $intd;
echo "<br>";
echo str_replace(" ","", unique($arr32));
echo "<br>";
echo $pldatar;*/
?>



<script>
    $(function () { $("[class=\"glyphicon glyphicon-question-sign\"]").tooltip(); });
</script>
</body>
</html>
<?php






for($sch=0;$sch<count($namearr);$sch++ )
{
unlink('/var/www/html/LncSEA/analysis/upfile/'.$namearr[$sch].'');
}
?>
<script src="../js/public.js"></script>

<script>
    $(document).click((e)=>{
        if(!e.target.hasAttribute('data-original-title')){
            $('i[data-trigger="click|focus"]').popover('hide');
        }
    });
    $('i[data-trigger="click|focus"]').click((e)=>{
        if($(e.target).data('original-title') == 'Popover title'){
            $(e.target).popover('hide');
            $(e.target).data('original-title','');
        }
        else{
            $(e.target).popover('show');
            $(e.target).data('original-title','Popover title');
        }
    });
</script>
<!-- <i onclick="function() {
  return a.apply(b || this, e.concat(d.call(arguments)))
}">test</i> -->
