<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Analysis Result</title>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <style>
        #myProgress {
            width: 100%;
            background-color: #ddd;
        }

        #myBar {
            width: 10%;
            height: 30px;
            background-color: #4CAF50;
            text-align: center;
            line-height: 30px;
            color: white;
        }
    </style>
</head>
<body>
<?php
			
		$bg=empty($_POST['bg'])?null:trim($_POST['bg']);
		//echo $bg;
		//echo $bg;
		if($bg!='All lncRNA')
		{
			$bg_page="getParams_GENCODE.php";
		}
		else
		{
			$bg_page="getParams.php";
		}
			//echo $bg_page;
	?>		
	
	
	<div style="width: 100%;height:100% ;">
        <div style="display: block;margin: auto;font-size: 60px;height: 100px;width: 100%;text-align: center;vertical-align: center"><b id="process" style="color: #67b168">0</b></div>
        <div id="myProgress" style="display: block;margin: auto;width: 100%;height: 100%;">
            <div id="myBar">0%</div>
       <input id="bgpage" type="hidden" name="bgpage" value="<?php echo $bg_page ?>">
     
	   
	   
		</div>
	</div>
</body>
	
	
	
	
	
	<script type="text/javascript">
        function getUID() { // 获取唯一值
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random()*16|0, v = c == 'x' ? r : (r&0x3|0x8);
                return v.toString(16);
            });
        }
        var userId = getUID();

		var data= {
			"me":"<?php echo $_POST['me'] ?>",
			"input":"<?php echo preg_replace('/[\s]+/'," ",$_POST['input']) ?>",
			"mychk":"<?php echo implode(" ", $_POST['mychk']) ?>",
			"min":"<?php echo $_POST['min'] ?>",
			"max":"<?php echo $_POST['max'] ?>",
			"pvalue":"<?php echo $_POST['pvalue'] ?>",
			"FDR":"<?php echo $_POST['FDR'] ?>",
			"Bonferroni":"<?php echo $_POST['Bonferroni'] ?>",
			"userId": userId
		}
        var bg=document.getElementById('bgpage').value;
        var elem = document.getElementById("myBar");
        var width = 0;
        var timer = setInterval(function () {
            $.ajax({
                url:"/LncSEA/analysis/process.php",
                data: {
                    "userId":userId
                },
                success: data => {
                    width = parseInt(data);
                    elem.style.width = width + '%';
                    elem.innerHTML = width * 1  + '%';
                    $("#process").text(data+" %")
                }
            })
        },500)

		$.ajax({
			url:bg,
			type: "POST",
			data: data,
			success: data => {
                timer = null;
                width = 100;
                elem.style.width = width + '%';
                elem.innerHTML = width * 1  + '%';
                $("#process").text("100 %")
				window.location.href="post.php?dkname="+data.replace(/[\s]+/g,"")
			}
		})
		
	</script>
</html>