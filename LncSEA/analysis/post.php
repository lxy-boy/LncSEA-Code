<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analysis Result</title>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico"/>
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src='https://www.echartsjs.com/gallery/vendors/echarts/echarts.min.js'></script>
    <script src='https://www.echartsjs.com/gallery/vendors/echarts/extension/dataTool.js'></script>
    <link rel="stylesheet" href="../public/css/header.css">
    <link rel="stylesheet" href="../public/css/footer.css"/>
    <link rel="stylesheet" href="../public/css/ico.css">
    <script src="../echarts.js"></script>
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../a.css">
    <script src="../b.js"></script>

    <link href="/VARAdb/public/css/dataTables.bootstrap.min-1.10.13.css"
          rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    <style type="text/css">
        .bottom {
            margin-top: 12px;
        }

        .dataTables_filter {
            margin-top: 8px;
        }

        .dataTables_length {
            margin-top: 8px;
        }


        .black_overlay {
            display: none;
            position: fixed;
            top: 0%;
            left: 0%;
            width: 100%;
            height: 100%;
            background-color: gray;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: .80;
            filter: alpha(opacity=88);
        }

        .white {

            display: none;
            width: 500px;
            height: 450px;
            background-color: white;
            position: fixed;
            z-index: 1005;
            margin-left: 23%;
            margin-top: -20px;
            text-align: center;
            font-size: 20px;
            font-family: 黑体;
            color: #84072a;

            z-index: 1005;

        }

        .white_content {

            position: absolute;
            top: 14%;
            right: 0%;
            width: 100%;
            height: 80%;
            text-align: center;
            font-size: 20px;
            font-family: 黑体;
            color: #84072a;
            background-color: white;
            z-index: 1004;
            overflow: auto;
            overflow-y: auto;
        }

        .cl {
            position: absolute;

            top: 0%;
            right: 0%;
            z-index: 1005;
            color: #84072a;
        }

        .kl {
            position: absolute;
            font-size: 37px;
            top: 3%;
            right: 45%;
            z-index: 1005;
            color: #5183f2;
        }

        hr {
            border: 0;
            border-bottom: 2px solid black;
            z-index: 1007;
        }


        .qp {
            position: absolute;
            margin-top: 100px;
            margin-left: 100px;
            width: 500px;

            height: 500px;
        }

        #accordion .panel-heading {
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

        #accordion .panel-title .collapsed {
            background: #60BDA0;
        }


        #accordion .panel-body {
            border-left: 3px solid #60BDA0;
            border-top: none;
            background: #fff;
            font-size: 15px;
            color: #1c2336;
            line-height: 27px;
            position: relative;
        }

        #accordion .panel-body:before {
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


        .hr1 {
            height: 1px;
            border: none;
            border-top: 3px solid #346191;
        }
    </style>

    <?php
    /*$dir = "/var/www/html/LncSEA/analysis/upfile/";
    $namearr=[];
    // 打开目录，然后读取其内容
    $nar=0;
    if (is_dir($dir)){
      if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){

            if($file!=".."&&$file!=".")
            {
              echo "filename:" . $file . "<br>";
              $namearr[$nar]=$file;
              $nar=$nar+1;
              }

        }
        closedir($dh);
      }
    }
    for($sch=0;$sch<count($namearr);$sch++ )
    {
    unlink('/var/www/html/LncSEA/analysis/upfile/'.$namearr[$sch].'');
    }*/


    $dir = "/var/www/html/LncSEA/analysis/accum";
    $namearr = [];
    $unique = [];
    // 打开目录，然后读取其内容
    $nar = 0;
    if (is_dir($dir)) {
        if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {

                if ($file != ".." && $file != ".") {

                    $namearr[$nar] = $file;
                    $punique = substr($file, 0, 12);
                    $unique[$nar] = $punique;
                    $nar = $nar + 1;
                }

            }
            closedir($dh);
        }
    }


    /*print_r($namearr);
    print_r($time);
    print_r($unique);
    echo $nari;*/

    /*echo "<br>";
    echo $namearr[$nar-1];
    echo "<br>";
    echo $unique[$nari];
    echo "<br>";
    echo strstr($namearr[$nar-1],$unique[$nari-1]);*/
    /*print_r($unique);
    echo "<br>";*/
    /*print_r($time);*/

    $nunique = array_unique($unique);
    $unique_key = array_keys($nunique);
    $unlik = $unique_key[0];
    for ($nkey = 1; $nkey <= count($unique_key); $nkey++) {
        $timefile = "/var/www/html/LncSEA/analysis/accum/" . $namearr[$unlik];
        $timefile2 = "/var/www/html/LncSEA/analysis/accum/" . $namearr[$unique_key[$nkey]];
        if (filemtime($timefile) < filemtime($timefile2)) {
            $unlik = $unlik;
        } else {
            $unlik = $unique_key[$nkey];
        }

    }


    if (count($nunique) > 17) {

        $arr = array();
        foreach ($namearr as $key => $values) {
            if (strstr($values, $unique[$unlik]) !== false) {
                $unlinkname = '/var/www/html/LncSEA/analysis/accum/' . $values;
                /*array_push($arr, $unlinkname);*/
                unlink($unlinkname);
            }
        }

    }

    /*while(strstr($namearr[$nar-1],$unique[$unlik])==false)
    {
    $unlinkname='/var/www/html/LncSEA/analysis/accum/'.$namearr[$nar-1];
    //unlink($unlinkname);
    $nar=$nar-1;
    }	for($delt=0;$delt<=count($namearr);$delt++)
    {
    if(strstr($namearr[$delt],$unique[$unlik])==false)
    {
        echo $namearr[$delt];
    }
    */


    ?>


    <script>
        $(function () {
            $("[data-toggle='popover']").popover();
        });
    </script>
    <?php
    //ini_set("error_reporting","E_ALL & ~E_NOTICE");
    ?>
    <?php
    //header("Location:post.php");
    $dkname = $_GET['dkname'];


    ?>
</head>


<?php
$filename = "/var/www/html/LncSEA/analysis/accum/" . $dkname . "type.txt";
$type_down_contents = file_get_contents($filename);
$type_down_lines = explode("\n", $type_down_contents);


$type_length = count($type_down_lines, 0) - 1;


?>
<body id="body">
<br>
<br>

<header id="header" style="position: fixed;z-index: 1;top:0;display: block;width:  100%;">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Lnc<span>SEA</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="../index.php">Home</a></li>
                <li class="menu-active"><a href="../Analysis.php">Analysis</a></li>
                <li><a href="../Search.php">Search</a></li>
                <li><a href="../data-browse.php">Browse</a></li>
<li><a href="/LncSEA/id_conversion.php">ID conversion</a></li>
                <li><a href="../download.php">Download</a></li>
                <li><a href="../help.php">Help</a></li>
                <li class="menu-has-children"><a href="http://www.licpathway.net/">Contact</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<div class="row" style="width:99%;">


    <div class="col-lg-2 " style="position: fixed;">


        <div class="panel-group" role="tablist" style="overflow-y:auto;height: 450px;z-index: 999999">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Class</h4>

                </div>
                <div class="list-group" id="left_classI_1">
                    <?php
                    for ($p = 0; $p < $type_length; $p++) {
                        echo '<a href="Analysis_result_show.php?m=' . $p . '&dkname=' . $dkname . '" class="list-group-item" target="frame" onclick="cname(this);cx()">' . $type_down_lines[$p] . '</a>';
                    }

                    ?>


                </div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-lg-10 col-md-offset-2">


            <div class="row"><!---手风琴开始--->
                <div class="col-md-12 col-md-offset">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <!---手风琴/panel-group/开始--->
                        <?php
                        $m = 0;
                        $exp = "exp" . $m;
                        $main = "main" . $m;
                        $bar = "bar" . $m;
                        $myModal = "myModal" . $m;
                        $myModalbar = "myModalbar" . $m;
                        ?>
                        <div class="panel panel-default"><!---手风琴/tissue-based/start--->
                            <div class="panel-heading" role="tab" id="1">

                                <h4 class="panel-title">
                                    <span class="glyphicon glyphicon-list"></span> <font
                                            id="tname"> <?php echo $type_down_lines[$m]; ?>
                                    </font>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $m; ?>" class="panel-collapse collapse in" role="tabpanel"
                                 aria-labelledby="1">
                                <div class="panel-body" style="overflow-x:auto;">
                                    <img src="../search/loading2.gif" id="lod" height="400px" width="400px"
                                         style="display: block;margin-left: 40%;">
                                    <iframe src="" id="myframe"
                                            style="width: 100%;height: 850px;border: 0px solid #60BDA0;margin-left: 1%"
                                            name="frame">
                                    </iframe>


                                </div>


                            </div>
                        </div><!---手风琴/tissue-based/end--->


                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script type="text/javascript">
    function cname(x) {
        var p = document.getElementById('tname');
        p.innerText = x.innerText;

    }


    document.getElementById("left_classI_1").getElementsByTagName("a")[0].click();


</script>


<script type="text/javascript">

    var iframe = document.getElementById("myframe");
    iframe.onload = function () {
        document.getElementById("myframe").style.display = "block";

        document.getElementById("lod").style.display = "none";
    };
</script>
<script type="text/javascript">
    function cx() {
        document.getElementById("lod").style.display = "block";
        document.getElementById("myframe").style.display = "none";
    }

</script>


<footer id="footer">
    <div class="container">
        <div class="copyright">
            <p style="color: white;">Copyright © 2019 School of Medical Informatics,Daqing Campus</p>
            <p style="color: white;margin-top: -30px"><img src="/LncSEA/public/img/beian.png"
                                                           style="width: 18px;margin-bottom: 2px;"> <a
                        href="http://www.beian.miit.gov.cn" style="color:#09c5ff">黑ICP备16009434号-1</a> Harbin Medical
                University Chunquan Li Lab</p>
        </div>
    </div>
</footer><!-- #footer -->
</body>
</html>
<script src="../js/public.js"></script>