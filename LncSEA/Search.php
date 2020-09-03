<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lnc Analysis</title>

    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico"/>
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="public/css/header.css">
    <link rel="stylesheet" href="public/css/footer.css"/>
    <link rel="stylesheet" href="public/css/ico.css">
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="echarts.js"></script>

    <script src="public/js/select_option.js"></script>
    <script src="public/js/select_option_2.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
        #accordion .panel-heading {
            padding: 0;
            border: none;
            border-radius: 0;
            position: relative;
        }

        #accordion .panel-title a {
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

        #accordion .panel-title a.collapsed {
            background: #50d8af;
        }

        #accordion .panel-title a:before,
        #accordion .panel-title a.collapsed:before {
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

        #accordion .panel-title a.collapsed:before {
            content: "\f067";
            background: #50d8af;
            border: 4px solid #fff;
        }

        #accordion .panel-title a:after,
        #accordion .panel-title a.collapsed:after {
            content: "";
            width: 17px;
            height: 7px;
            background: #fff;
            position: absolute;
            top: 22px;
            right: 0;
        }

        #accordion .panel-body {
            border-left: 3px solid #50d8af;
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
            background: #50d8af;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .label-danger {
            background-color: #4f8fe1;
        }


        .hr1 {
            height: 1px;
            border: none;
            border-top: 3px solid #346191;
        }


        .containerdd {
            position: relative;
            background: white;
            padding: 3em;
        }


        .tab-group {
            position: relative;
            border: 1px solid #eee;
            margin-top: 2.5em;
            border-radius: 0 0 10px 10px;
        }

        .tab-group section {
            opacity: 0;
            height: 0;
            padding: 0 1em;
            overflow: hidden;
            transition: opacity 0.4s ease, height 0.4s ease;
        }

        .tab-group section.active {
            opacity: 1;
            height: auto;
            overflow: visible;
        }

        .tab-nav {
            list-style: none;
            margin: -2.5em -1px 0 0;
            padding: 0;
            height: 2.5em;
            overflow: hidden;
        }

        .tab-nav li {
            display: inline;
        }

        .tab-nav li a {
            top: 1px;
            position: relative;
            display: block;
            float: left;
            border-radius: 10px 10px 0 0;
            background: #eee;
            line-height: 2em;
            padding: 0 1em;
            text-decoration: none;
            color: grey;
            margin-top: .5em;
            margin-right: 1px;
            transition: background .2s ease, line-height .2s ease, margin .2s ease;
        }

        .tab-nav li.active a {
            background: #6EB590;
            color: white;
            line-height: 2.5em;
            margin-top: 0;
        }
    </style>
    <script type="text/javascript">
        function Ex() {
            var en = document.getElementById('ens_id');
            var ln = document.getElementById('ln');

            document.getElementById('lnc_id').value = 'CCAT1 NEAT1 HOTAIR';
        }

        function seqex() {
            document.getElementById("ipt19").value = "CTCGCCCGGGGTGCGCCCCGGGGCAGGACCCCCAGCCCACGCCCAGGGCCCGCCCCTGCCCTCCAGCCCTACGCCTTGACCCGCTTTCCTGCGTCTCTCAGCCTACCTGACCTTGTCTTTACCTCTGTGGGCAGCTCCCTTGTGATCTGCTTAGTTCCCACCCCCCTTTAAGAATTCAATAGAGAAGCCAGACGCAAAACTACAGATATCGTATGAGTCCAGTTTTGTGAAGTGCCTAGAATAGTCAAAATTCACAGAGACA";
        }

        function seqex2() {
            document.getElementById("ipt38").value = "CTCGCCCGGGGTGCGCCCCGGGGCAGGACCCCCAGCCCACGCCCAGGGCCCGCCCCTGCCCTCCAGCCCTACGCCTTGACCCGCTTTCCTGCGTCTCTCAGCCTACCTGACCTTGTCTTTACCTCTGTGGGCAGCTCCCTTGTGATCTGCTTAGTTCCCACCCCCCTTTAAGAATTCAATAGAGAAGCCAGACGCAAAACTACAGATATCGTATGAGTCCAGTTTTGTGAAGTGCCTAGAATAGTCAAAATTCACAGAGACA";
        }


    </script>

</head>
<body id="body">


<!--==========================
  Header
============================-->
<header id="header" style="position: fixed;z-index: 1;top:0;display: block;width:  100%;">
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
                <li class="menu-active"><a href="Search.php">Search</a></li>
                <li><a href="data-browse.php">Browse</a></li>
<li><a href="/LncSEA/id_conversion.php">ID conversion</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="help.php">Help</a></li>

                <li class="menu-has-children"><a href="http://www.licpathway.net/">Contact</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<div class="container-fluid">

    <div class="row">
        <div class="col-lg-5 col-md-offset-6">
            <ol class="breadcrumb text-right" style="background-color:#ffffff;">
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                <li><a href="index.php">Home</a></li>
            </ol>
        </div>
    </div>


    <div class="row"><!---手风琴开始--->
        <div class="col-md-10 col-md-offset-1">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <!---手风琴/panel-group/开始--->

                <div class="panel panel-default"><!---手风琴/tissue-based/start--->
                    <div class="panel-heading" role="tab" id="1">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                               aria-expanded="true" aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-search"></span> Search by lncRNAs
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="1">
                        <div class="panel-body">
                            <div class="col-lg-4" id="back">
                                <form method="post" target="_blank" action="search/search_first.php">

                                    <div class="form-group">

                                        <h4><span class="label label-danger">Search by Gene Symbol/Ensembl ID/NCBI Refseq ID/Alias/Entrez Gene ID</span></h4>
                                        <form method="post" target="_blank" action="search/search_first.php">

                                            <textarea type="text" class="form-control" name="lnc_id" id="lnc_id" value=""
                                                      placeholder="Enter Lnc eg:HOTAIR"></textarea>
                                            <div style="float: right;margin-top: 3%">
                                                <button type="button" class="btn btn-default btn-sm" id="Ex"
                                                        style="background-color: #346191;"><font color="white" size="3"><strong>Example</strong></font>
                                                </button>


                                                <button type="Submit" class="btn btn-default"
                                                        style="background-color: #346191"><font color="white" size="3"
                                                                                                onclick="ward();ent()"><strong>Start
                                                            search</strong></font></button>
                                                <button type="button" class="btn btn-default" id="Reset"
                                                        style="background-color: #346191"><font color="white"
                                                                                                size="3"><strong>Reset</strong></font>
                                                </button>

                                            </div>
                                        </form>
                                        <br><br>
                                        <!--<h4><span class="label label-danger">Search by Ensembl ID</span></h4>-->
                                        <!--<form method="post" target="_blank" action="search/search_first.php">
                                            <input type="text" class="form-control" name="ens_id" id="ens_id" value=""
                                                   placeholder="Enter Lnc eg:ENSG00000267578"/>
                                            <div style="float: right;margin-top: 3%">
                                                <button type="button" class="btn btn-default btn-sm" id="Ex1"
                                                        style="background-color: #346191"><font color="white"
                                                                                                size="3"><strong>Example</strong></font>
                                                </button>
                                                <button type="Submit" class="btn btn-default"
                                                        style="background-color: #346191"><font color="white" size="3"
                                                                                                onclick="ware();ents()"><strong>Start
                                                            search</strong></font></button>
                                                <button type="button" class="btn btn-default" id="Reset2"
                                                        style="background-color: #346191"><font color="white"
                                                                                                size="3"><strong>Reset</strong></font>
                                                </button>

                                            </div>
                                        </form>-->
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row" style="margin-top: 10%">
                                        <div class="col-md-offset">
                                            <label> <font style="color: red;font-size: 25px;">*</font> <font
                                                        style="color: #346191">The lncRNA name you enter requires space
                                                    segmentation.</font></label>
                                        </div>
                                    </div>


                            </div>


                            <div class="col-lg-7 col-md-offset-1" id="bar" style="height: 400px;">


                            </div>


                        </div>
                    </div>
                </div><!---手风琴/tissue-based/end--->


                <div class="panel panel-default"><!---手风琴/sample-based/start--->
                    <div class="panel-heading" role="tab" id="headingtwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
                                <span class="glyphicon glyphicon-search"></span> Search by genomic region
                            </a>
                        </h4>
                    </div>
                    <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwo">
                        <div class="panel-body">
                            <div class="col-lg-12 col-md-offset">
                                <form method="post" enctype="multipart/form-data" target="_blank"
                                      action="search/search_chr_result.php">

                                    <div style="margin-top: 0%">
                                        <div class="tab-group">
                                            <section id="tab1" title="GRCh37">
                                                <div class="form-group">
                                                    <label><font style="color: #346191">Enter chr</font></label>
                                                    <input type="text" class="form-control" name="chr19" id="chr19"
                                                           value="" placeholder="Enter chr eg:chr12"/>
                                                    <label><font style="color: #346191">Enter start</font></label>
                                                    <input type="text" class="form-control" name="start19" id="start19"
                                                           value="" placeholder="Enter start eg:54356092"/>
                                                    <label><font style="color: #346191">Enter end</font></label>
                                                    <input type="text" class="form-control" name="end19" id="end19"
                                                           value="" placeholder="Enter end eg:54368740"/>
                                                </div>

                                                <div style="float: right;">
                                                    <button type="Submit" class="btn btn-default"
                                                            style="background-color: #346191" onclick="war();"><font
                                                                color="white" size="3" onclick=""><strong>Start
                                                                search</strong></font></button>
                                                    <button type="Reset" class="btn btn-default"
                                                            style="background-color: #346191"><font color="white"
                                                                                                    size="3"><strong>Reset</strong></font>
                                                    </button>
                                                    <button type="button" class="btn btn-default "
                                                            style="background-color: #346191"
                                                            onclick="return Expart2();"><font color="white"
                                                                                              size="3"><strong>Example</strong></font>
                                                    </button>
                                                </div>
                                            </section>
                                            <section id="tab2" title="GRCh38">
                                                <div class="form-group">
                                                    <label><font style="color: #346191">Enter chr</font></label>
                                                    <input type="text" class="form-control" name="chr38" id="chr38"
                                                           value="" placeholder="Enter chr eg:chr12"/>
                                                    <label><font style="color: #346191">Enter start</font></label>
                                                    <input type="text" class="form-control" name="start38" id="start38"
                                                           value="" placeholder="Enter start eg:53962308"/>
                                                    <label><font style="color: #346191">Enter end</font></label>
                                                    <input type="text" class="form-control" name="end38" id="end38"
                                                           value="" placeholder="Enter end eg:53974956"/>
                                                </div>

                                                <div style="float: right;">
                                                    <button type="Submit" class="btn btn-default"
                                                            style="background-color: #346191" onclick="war3();"><font
                                                                color="white" size="3" onclick=""><strong>Start
                                                                search</strong></font></button>
                                                    <button type="Reset" class="btn btn-default"
                                                            style="background-color: #346191"><font color="white"
                                                                                                    size="3"><strong>Reset</strong></font>
                                                    </button>
                                                    <button type="button" class="btn btn-default"
                                                            style="background-color: #346191"
                                                            onclick="return Expart3();"><font color="white"
                                                                                              size="3"><strong>Example</strong></font>
                                                    </button>
                                                </div>
                                            </section>


                                        </div>
                                    </div>


                                </form>
                            </div>


                        </div>
                    </div>
                </div><!---手风琴/sample-based/start--->


                <div class="panel panel-default"><!---手风琴/sample-based/start--->
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="glyphicon glyphicon-search"></span> Search by genomic sequence
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                         aria-labelledby="headingThree">
                        <div class="panel-body">
                            <!-- 								<div class="col-lg-10 col-md-offset-1">
                                                        <form enctype="multipart/form-data" action="search/search_sequence_result.php">
                                                                <label><font style="color: #346191">Enter query sequences here:</font></label>
                                                        <textarea class="form-control" rows="12" id="input" name="input" spellcheck="false" style="resize:none;height: 200px;">
                                                        </textarea>
                                                        <label><font style="color: #346191">Or upload sequence fasta file (Max. 5M):</font>
                                                            <input type="file" name="file"  style="float: right;">

                                                        </label>

                                                        <div style="float: right;">
                                                        <button type="button" class="btn btn-default" style="background-color: #346191"><font color="white" size="3"  ><strong>Example</strong></font></button>
                                                        <button type="Submit" class="btn btn-default" style="background-color: #346191;"><font color="white" size="3" style=""><strong>Start search</strong></font></button>
                                                        </div>
                                                        </form>
                                                            </div> -->
                            <div class="tab-group">
                                <section id="tab1" title="GRCh37">
                                    <div class="col-lg-11 ">
                                        <?php
                                        $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                                        $password = "";
                                        for ($i = 0; $i < 12; $i++) {
                                            // 这里提供两种字符获取方式
                                            // 第一种是使用 substr 截取$chars中的任意一位字符；
                                            // 第二种是取字符数组 $chars 的任意元素
                                            // $password .= substr($chars, mt_rand(0, strlen($chars) – 1), 1);
                                            $password .= $chars[mt_rand(0, strlen($chars) - 1)];
                                        }
                                        $dkname = $password . "_ake";
                                        ?>
                                        <label><font style="color: #346191">Enter query sequences here:</font></label>
                                        <form action="search/search_sequence19_result.php?dkname=<?php echo $dkname; ?>"
                                              method="post" autocomplete="off" enctype="multipart/form-data">
                                            <textarea class="form-control" rows="12" id="ipt19" name="ipt19"
                                                      spellcheck="false" style="resize:none;height: 200px;"></textarea>
                                            <label><font style="color: #346191">Or upload sequence fasta file (Max.
                                                    5M):</font>
                                                <input type="file" name="file19" id="fi19" style="float: right;">

                                            </label>

                                            <div style="float: right;">

                                                <a class="btn btn-default" style="background-color: #346191"
                                                   href="public/Example.fa" download="Example.fa"><font color="white"
                                                                                                        size="3"><strong>Example
                                                            file</strong></font></a>
                                                <button type="button" id="seqex" class="btn btn-default"
                                                        style="background-color: #346191"><font color="white" size="3"
                                                                                                onclick="seqex();"><strong>Example</strong></font>
                                                </button>
                                                <button type="Reset" id="res19" class="btn btn-default"
                                                        style="background-color: #346191"><font color="white"
                                                                                                size="3"><strong>Reset</strong></font>
                                                </button>
                                                <button type="Submit" class="btn btn-default" id="sum19"
                                                        style="background-color: #346191;"><font color="white" size="3"
                                                                                                 onclick="chela()"><strong>Start
                                                            search</strong></font></button>
                                            </div>
                                        </form>
                                    </div>
                                </section>
                                <section id="tab2" title="GRCh38">
                                    <div class="col-lg-11 ">

                                        <label><font style="color: #346191">Enter query sequences here:</font></label>
                                        <form enctype="multipart/form-data"
                                              action="search/search_sequence38_result.php?dkname=<?php echo $dkname; ?>"
                                              method="post">
                                            <textarea class="form-control" rows="12" id="ipt38" name="ipt38"
                                                      spellcheck="false" style="resize:none;height: 200px;"></textarea>
                                            <label><font style="color: #346191">Or upload sequence fasta file (Max.
                                                    5M):</font>
                                                <input type="file" name="file38" id="fi38" style="float: right;">

                                            </label>

                                            <div style="float: right;">
                                                <a class="btn btn-default" style="background-color: #346191"
                                                   href="public/Example.fa" download="Example.fa"><font color="white"
                                                                                                        size="3">
                                                        <strong>Example file</strong></font></a>
                                                <button type="button" class="btn btn-default"
                                                        style="background-color: #346191"><font color="white" size="3"
                                                                                                onclick="seqex2();"><strong>Example</strong></font>
                                                </button>
                                                <button type="Reset" class="btn btn-default" id="res38"
                                                        style="background-color: #346191"><font color="white"
                                                                                                size="3"><strong>Reset</strong></font>
                                                </button>
                                                <button type="Submit" class="btn btn-default" id="sum38"
                                                        style="background-color: #346191;"><font color="white" size="3"
                                                                                                 onclick="chela2()"><strong>Start
                                                            search</strong></font></button>
                                            </div>
                                        </form>
                                    </div>
                                </section>


                            </div>

                        </div>
                    </div>
                </div><!---手风琴/sample-based/start--->


            </div>
        </div><!---手风琴结束--->

        <div class="row">
            <div class="col-lg-10 col-md-offset-1">
                <hr/>
                <div class="panel panel-primary " style="border: 1px solid #50d8af;">
                    <div class="panel-body">
                        <font color="red" size="4">Features:</font>
                    </div>
                    <div class="panel-footer" style="font-size: 120%;">
                        <p><font color="red">1) Search by lncRNAs: </font>Users will search lncRNAs and related sets based on Gene Symbol, Ensembl ID, NCBI Refseq ID, Alias or Entrez Gene ID.</p>
                        <p><font color="red">2) Search by genomic region: </font>Users will search lncRNAs and related
                            sets based on genomic region.</p>
                        <p><font color="red">3) Advanced search by genomic sequence: </font>Users will search lncRNAs
                            and related sets based on genomic sequence. User can also download the sequence comparison
                            result analysed by BLAST.</p>
                    </div>
                    <hr/>
                </div>
            </div>
        </div>


    </div>

    <!---柱状图--->
    <script type="text/javascript">
        var myChart = echarts.init(document.getElementById('bbar'));

        // 指定图表的配置项和数据
        var dataAxis = ['Accessible_Chromatin', 'Cancer_Hallmark', 'Cancer_Phenotype', 'Cell_Marker', 'Disease', 'Drug', 'Enhancer', 'RNA_Binding_Protein', 'Exosome', 'Methylation_Pattern', 'MicroRNA', 'EQTL', 'smORF', 'Subcellular_Location', 'Super_Enhancer', 'Survival', 'Transcription_Factor'];
        var data = [13518, 284, 13107, 452, 7546, 11466, 13515, 18320, 31, 91, 6554, 15622, 15098, 13851, 22981, 14387, 13523];
        var yMax = 500;
        var dataShadow = [];

        for (var i = 0; i < data.length; i++) {
            dataShadow.push(yMax);
        }

        option = {


            grid: {   //绘图区调整
                x: 0,  //左留白
                y: 30,   //上留白
                x2: 0,  //右留白
                y2: 65   //下留白
            },

            xAxis: {
                data: dataAxis,
                axisLabel: {
                    rotate: 30
                }

            },
            yAxis: {
                axisLine: {
                    show: false
                },
                axisTick: {
                    show: false
                },
                axisLabel: {
                    textStyle: {
                        color: '#999'
                    }
                }
            },
            dataZoom: [
                {
                    type: 'inside'
                }
            ],
            series: [
                { // For shadow
                    type: 'bar',
                    itemStyle: {
                        normal: {color: 'rgba(0,0,0,0.05)'}
                    },
                    barGap: '-100%',
                    barCategoryGap: '40%',
                    data: dataShadow,
                    animation: false
                },
                {
                    type: 'bar',
                    itemStyle: {
                        normal: {
                            color: new echarts.graphic.LinearGradient(
                                0, 0, 0, 1,
                                [
                                    {offset: 0, color: '#83bff6'},
                                    {offset: 0.5, color: '#188df0'},
                                    {offset: 1, color: '#188df0'}
                                ]
                            )
                        },
                        emphasis: {
                            color: new echarts.graphic.LinearGradient(
                                0, 0, 0, 1,
                                [
                                    {offset: 0, color: '#2378f7'},
                                    {offset: 0.7, color: '#2378f7'},
                                    {offset: 1, color: '#83bff6'}
                                ]
                            )
                        }
                    },
                    data: data
                }
            ]
        };

        myChart.setOption(option);
    </script>

    <!--    饼状图-->
    <script type="text/javascript">
        var myChart = echarts.init(document.getElementById('bar'));
        // var myChart = echarts.init(dom);
        var app = {};
        option = null;
        option = {
            title: {
                text: 'Statistics of lncRNA sets',
                x: 'center'
            },
            tooltip: {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient: 'vertical',
                padding: [67, 0, 0, 0],
                left: 'left',
                data: ["Accessible_Chromatin", "Cancer_Hallmark", "Cancer_Phenotype", "Cell_Marker", "Disease", "Drug", "Enhancer", "RNA_Binding_Protein", "Methylation_Pattern", "MicroRNA", "EQTL", "smORF", "Subcellular_Location", "Super_Enhancer", "Survival", "Transcription_Factor","Exosome","Conservation"]
            },
            series: [
                {
                    name: 'Number',
                    type: 'pie',
                    radius: '55%',
                    center: ['55%', '60%'],
                    data: [

                        {value: 1253, name: 'Accessible_Chromatin'},

                        {value: 7, name: 'Cancer_Hallmark'},
                        {value: 470, name: 'Cancer_Phenotype'},
                        {value: 67, name: 'Cell_Marker'},
                        {value: 1199, name: 'Disease'},

                        {value: 155, name: 'Drug'},
                        {value: 1623, name: 'Enhancer'},
                        {value: 126, name: 'EQTL'},
                        {value: 5, name: 'Methylation_Pattern'},
                        {value: 1231, name: 'MicroRNA'},
                        {value: 15, name: 'smORF'},
                        {value: 14, name: 'Subcellular_Location'},
                        {value: 2150, name: 'Super_Enhancer'},
                        {value: 33, name: 'Survival'},
                        {value: 18717, name: 'RNA_Binding_Protein'},
                        {value: 14478, name: 'Transcription_Factor'},
                         {value: 1, name: 'Exosome'},
                          {value: 18, name: 'Conservation'},
                    ],
                    itemStyle: {
                        emphasis: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    }
                }
            ]
        };
        ;
        if (option && typeof option === "object") {
            myChart.setOption(option, true);
        }
    </script>


    <script type="text/javascript">

        function Expart2() {
            document.getElementById('chr19').value = "chr12";
            document.getElementById('start19').value = "54356092";
            document.getElementById('end19').value = "54368740";
        }

        function Expart3() {
            document.getElementById('chr38').value = "chr12";
            document.getElementById('start38').value = "53962308";
            document.getElementById('end38').value = "53974956";
        }

    </script>


    <script type="text/javascript">
        function war() {
            document.getElementById('chr38').value = "";
            document.getElementById('start38').value = "";
            document.getElementById('end38').value = "";
            if (document.getElementById('chr19').value.length == 0) {
                alert("Please Enter chr");
                window.event.returnValue = false;
                return false;
            } else {
                if (document.getElementById('start19').value.length == 0) {
                    alert("Please Enter start");
                    window.event.returnValue = false;
                    return false;
                } else {

                    if (document.getElementById('end19').value.length == 0) {
                        alert("Please Enter end");
                        window.event.returnValue = false;
                        return false;
                    }
                }


            }

        }

        function ward() {
            if (document.getElementById("lnc_id").value.length == 0) {
                alert("Please Enter lnc id");
                window.event.returnValue = false;
            }
        }


        function ware() {
            if (document.getElementById("ens_id").value.length == 0) {
                alert("Please Enter Ensemble ID");
                window.event.returnValue = false;
            }
        }


    </script>


    <script type="text/javascript">
        function war3() {
            document.getElementById('chr19').value = "";
            document.getElementById('start19').value = "";
            document.getElementById('end19').value = "";
            if (document.getElementById('chr38').value.length == 0) {
                alert("Please Enter chr");
                window.event.returnValue = false;
                return false;
            } else {
                if (document.getElementById('start38').value.length == 0) {
                    alert("Please Enter start");
                    window.event.returnValue = false;
                    return false;
                } else {

                    if (document.getElementById('end38').value.length == 0) {
                        alert("Please Enter end");
                        window.event.returnValue = false;
                        return false;
                    }
                }


            }

        }
    </script>
    <script type="text/javascript">
        $("#lnc_id").click(function () {
            $("#ens_id").attr("disabled", true);
        });

        $("#ens_id").click(function () {
            $("#lnc_id").attr("disabled", true);
        });

        $("#Reset").click(function () {
            $("#lnc_id").attr("disabled", false);
            $("#ens_id").attr("disabled", false);
            $("#lnc_id").val("");
        });

        $("#Reset2").click(function () {
            $("#lnc_id").attr("disabled", false);
            $("#ens_id").attr("disabled", false);
            $("#ens_id").val("");
        });


        $("#Ex").click(function () {
            $("#ens_id").attr("disabled", true);
            $("#lnc_id").attr("disabled", false);
            $("#lnc_id").val('CCAT1\nNEAT1\nHOTAIR\nTncRNA\nHOXC11-AS1\nonco-lncRNA-40\nENSG00000247844\nENSG00000228630\nENSG00000245532\nNR_002802\nNR_047518\nNR_108049');
            $("#ens_id").val("");
        });

        $("#Ex1").click(function () {
            $("#lnc_id").attr("disabled", true);
            $("#ens_id").attr("disabled", false);
            $("#ens_id").val('ENSG00000247844 ENSG00000228630 ENSG00000245532');
            $("#lnc_id").val("");
        });


        $("#sum19").click(function () {
            $("#file38").val("");
            $("#ipt38").val("");
        });

        $("#sum38").click(function () {
            $("#file19").val("");
            $("#ipt19").val("");
        });


        /*	$("#ipt19").click(function() {
             $("#fi19").attr("disabled",true);
             $("#fi19").css("cursor","not-allowed");
        });*/
        $("#fi19").click(function () {
            $("#ipt19").attr("disabled", true);
        });
        $("#res19").click(function () {
            $("#ipt19").attr("disabled", false);
            $("#fi19").attr("disabled", false);
            $("#fi19").css("cursor", "default");
        });


        /*$("#ipt38").click(function() {
             $("#fi38").attr("disabled",true);
             $("#fi38").css("cursor","not-allowed");
        });*/

        $("#fi38").click(function () {
            $("#ipt38").attr("disabled", true);
        });
        $("#res38").click(function () {
            $("#ipt38").attr("disabled", false);
            $("#fi38").attr("disabled", false);
            $("#fi38").css("cursor", "default");
        });


        function chela() {
            if (document.getElementById("ipt19").value.length == 0 && document.getElementById("fi19").value.length == "") {
                alert("Please Enter Query Sequences Or Submit Your Sequence Fasta File");
                window.event.returnValue = false;
                return false;
            }
        }

        function chela2() {
            if (document.getElementById("ipt38").value.length == 0 && document.getElementById("fi38").value.length == "") {
                alert("Please Enter Query Sequences Or Submit Your Sequence Fasta File");
                window.event.returnValue = false;
                return false;
            }
        }


        function ent() {
            if ($("#lnc_id").is(":disabled")) {
                alert("This text box has been disabled");
                window.event.returnValue = false;
            }
        }

        function ents() {
            if ($("#ens_id").is(":disabled")) {
                alert("This text box has been disabled");
                window.event.returnValue = false;
            }
        }


    </script>


    <script src="http://cdn.bootcss.com/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
    <script type="text/javascript" src="js/jquery-tab.js"></script>
    <script type="text/javascript">
        $(function () {
            // Calling the plugin
            $('.tab-group').tabify();
        })
    </script>


    <footer id="footer">
        <div class="container">
            <div class="copyright">
                <p style="color: white;">Copyright © 2019 School of Medical Informatics,Daqing Campus</p>
                <p style="color: white;margin-top: -30px"><img src="/LncSEA/public/img/beian.png"
                                                               style="width: 18px;margin-bottom: 2px;"> <a
                            href="http://www.beian.miit.gov.cn" style="color:#09c5ff">黑ICP备16009434号-1</a> Harbin
                    Medical University Chunquan Li Lab</p>
            </div>
        </div>
    </footer><!-- #footer -->
</body>
</html>
<script src="js/public.js"></script>