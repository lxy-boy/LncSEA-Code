<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lnc SEA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="public/img/favicon.ico"/>
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <!--  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">-->

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.1.0/fonts/remixicon.css" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>

    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/dataTables.buttons.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.flash.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.print.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/buttons/1.4.2/js/buttons.html5.js" type="text/javascript"></script>
    <style>
        .panel-default > .panel-heading {
            color: #fbfbfb;
            background-color: #0c2e8a;
            border-color: #ddd;
        }
        #services h2{

            color: #f5f7f6;
            line-height: 1;
            display: inline-block;
            font-size: 30px;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            margin-left: 180px;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        body {
            font-size: 16px;

        }
        #about .about-img img {
            margin-left: 1px;
            max-width: 100%;
        }
        .nam{
            text-align: center;color: #0c2e8a;
            padding-bottom: 7px;

            padding-top: 7px;
        }
    </style>
</head>

<body id="body">
<header id="header">
    <div class="container">
        <div id="logo" class="pull-left">
            <h1><a href="#body" class="scrollto">Lnc<span>SEA</span></a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="Analysis.php">Analysis</a></li>
                <li><a href="Search.php">Search</a></li>
                <li><a href="data-browse.php">Browse</a></li>
                <li class="menu-active"><a href="/LncSEA/id_conversion.php">ID conversion</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="help.php">Help</a></li>
                <li class="menu-has-children"><a href="http://www.licpathway.net/">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->
<main class="container" style="padding: 20px 0">
    <div class="row">
        <div class="col-lg-12">
            <label for="other_name">Gene Symbol/Ensembl ID/NCBI Refseq ID/Alias/Entrez Gene ID</label>
            <textarea class="form-control" id="other_name" rows="10"></textarea>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <button type="button" style="margin: 10px auto;display: inline-block" class="btn btn-primary" id="other2symbol"> Convert </button>

            <input type="file" style="margin: 10px auto;display:inline-block" id="file">
            <a type="download" style="margin: 10px auto;display: inline-block" class="btn btn-primary" download="example.txt" href="example.txt"> File example </a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div id="symbol"></div>
        </div>
    </div>
</main>
<div cols="20" id="biao1" style="display: none"></div>
<script>
    window.table = null;
    $("#other2symbol").click(()=>{
        var value = $("#other_name").val();
        if(value===""){
            let reader = new FileReader();
            reader.readAsText(document.getElementById("file").files[0], 'UTF-8');
            setTimeout(function () {
                value = reader.result;
            },500);
        }
        setTimeout(function () {
            window.table = null;
            $('#symbol').html("<table id=\"symbol_table\" style=\"width: 100%\" class=\"table table-striped table-bordered table-hover table-condensed\">\n" +
                "                <thead>\n" +
                "                <tr>\n" +
                "                    <th>Gene Symbol</th>\n" +
                "                    <th>Entrez Gene ID</th>\n" +
                "                    <th>Alias</th>\n" +
                "                    <th>Ensembl ID</th>\n" +
                "                    <th>NCBI Refseq ID</th>\n" +
                "                </tr>\n" +
                "                </thead>\n" +
                "<tfoot>\n" +
                "        <tr>\n" +
                "            <th><button onclick=\"getTableContent(0)\" class=\"btn btn-primary\">Analysis</button></th>\n" +
                "            <th></th>\n" +
                "            <th></th>\n" +
                "            <th></th>\n" +
                "            <th></th>\n" +
                "        </tr>\n" +
                "    </tfoot>" +
                "            </table>")
            window.table = $('#symbol_table').dataTable({
                dom: '<"top row"<"col-md-6 col-xs-6 pull-left"iB><"col-md-6 col-xs-6 pull-right"f>>rt<"bottom row"<"col-md-4 col-xs-4 pull-left"l><"col-md-8 col-xs-8 pull-right"p>><"clear">',
                buttons: [{
                    extend: 'csvHtml5',
                    text: '<i class="ri-folder-download-line" style="font-size: 20px"></i>'
                }],
                ajax: {
                    type:"POST",
                    url:"id_convert_server.php",
                    data:{
                        "params":value,
                        "type":"other2symbol"
                    }
                }
            })
        },600);
    });

    /*
    *功能： 模拟form表单的提交
    *参数： URL 跳转地址 PARAMTERS 参数
    */
    function Post(URL, PARAMTERS) {
        //创建form表单
        var temp_form = document.createElement("form");
        temp_form.action = URL;
        //如需打开新窗口，form的target属性要设置为'_blank'
        temp_form.target = "_self";
        temp_form.method = "post";
        temp_form.style.display = "none";
        //添加参数
        for (var item in PARAMTERS) {
            var opt = document.createElement("textarea");
            opt.name = PARAMTERS[item].name;
            opt.value = PARAMTERS[item].value;
            temp_form.appendChild(opt);
        }
        document.body.appendChild(temp_form);
        //提交数据
        temp_form.submit();
    }
    function copyUrl2()
    {
        var Url2=document.getElementById("biao1").innerText;
        var oInput = document.createElement('input');
        oInput.value = Url2;
        document.body.appendChild(oInput);
        oInput.select(); // 选择对象
        document.execCommand("Copy"); // 执行浏览器复制命令
        oInput.className = 'oInput';
        oInput.style.display='none';
    }
    function getTableContent(n){
        var rs = "";
        var nTrs = table.fnGetNodes();
        for(var i = 0; i < nTrs.length; i++){
            var t = table.fnGetData(nTrs[i]);
            rs = rs+"\n"+t[n];
        }
        $("#biao1").text(rs);

        var parames = new Array();
        parames.push({ name: "params", value: rs});

        Post("/LncSEA/Analysis.php", parames);
    }
</script>
<!--==========================
  Footer
============================-->
<footer id="footer">
    <div class="container">
        <div class="copyright">
            <p style="color: white;">Copyright © 2019 School of Medical Informatics,Daqing Campus</p>
            <p style="color: white;"><img src="/LncSEA/public/img/beian.png" style="width: 18px;margin-bottom: 2px;"> <a
                    href="http://www.beian.miit.gov.cn" style="color:#09c5ff">黑ICP备16009434号-1</a> Harbin Medical
                University Chunquan Li Lab</p>
        </div>

    </div>
</footer><!-- #footer -->
</body>
</html>