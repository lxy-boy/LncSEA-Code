<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
   	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>an</title>
	<script type="text/javascript" src="http://echarts.baidu.com/gallery/vendors/echarts/echarts-all-3.js"></script>
	<link href="public/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/footer.css"/>
</head>






<body>

                    <form  action="pass.php" method="POST" name="search" target="_blank">
					
				
  <label><input id="sel_1" onchange="selectAll()" type="checkbox" value="1" ><font color="red">  Select ALL</font></label>
			<br>
			<table class="table table-striped table-bordered " cellspacing="0" width="100%">
			
            <tr>
                <td><input name="checkbox[]" type="checkbox" value="cancer_hallmarker" > cancer_hallmarker</td>
                <td><input name="checkbox[]" type="checkbox" value="cell_marker" > cell_marker</td>
                <td><input name="checkbox[]" type="checkbox" value="diff" > diff</td>
                
            </tr>
			<tr>
	       		<td><input name="checkbox[]" type="checkbox" value="disease" > disease</td>
                <td><input name="checkbox[]" type="checkbox" value="drug" > drug</td>
                <td><input name="checkbox[]" type="checkbox" value="methylation" > methylation</td>
				
				
	        </tr>
	        <tr>
	        	<td><input name="checkbox[]" type="checkbox" value="miRNA" > miRNA</td>
				<td><input name="checkbox[]" type="checkbox" value="open" > open</td>
				<td><input name="checkbox[]" type="checkbox" value="SE" > SE</td>	
			</tr>

	        <tr>
	        	<td><input name="checkbox[]" type="checkbox" value="subcell0cation" > subcell0cation</td>
				<td><input name="checkbox[]" type="checkbox" value="pathway" > pathway</td>
				<td><input name="checkbox[]" type="checkbox" value="TF" > TF</td>
			</tr>

			</table>
			<table border="0">
					<tr>
					<td width=900px height=320px>
					
				
					<label><font color="red" size="3"><strong><b>Step1:</b> Enter LncRNA list</strong></font></label><br>
					<textarea type="text" class="form-control" name="input" id="input" placeholder="H19 7SK  HCP5  HCP5  HCP5  HCP5  HCP5  HCP5  HLA-AS1  HLA-AS1  NEAT1  NEAT1  RN7SL1  RN7SL1" rows="11" ></textarea>
					
			
					
				</td>
				<td width=900px rowspan="2">

				<div id="bar" style="height:500px;width:100%;" align="center"></div>
				</td>
				<tr>
					
					<td height="120"><button type="Submit" class="btn btn-default"><font color="red" size="3"><strong>RUN</strong></font></button></td>

				</tr>
				</table>





				
				
				
				</div>
				
				</form>

			
			
			
				
</body>				
	 <script src="https://cdn.bootcss.com/jquery/1.10.0/jquery.min.js"></script>
	        <script type="text/javascript">  
	        function selectAll(){
	            var isCheck=$("#sel_1").is(':checked');  //获得全选复选框是否选中
	            $("input[type='checkbox']")
				.each(function() {  
	                this.checked = isCheck;       //循环赋值给每个复选框是否选中
	            });
	        }
	        </script>	

<script type="text/javascript">
	var myChart = echarts.init(document.getElementById('bar'));

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: 'Disease'
            },
            tooltip: {},
            legend: {
                data:['Number']
            },
            xAxis: {
                data: ["1","2","3","4","5","6","7","8"]
            },
            yAxis: {},
            series: [{
                name: 'Number',
                type: 'bar',
                data: [113020, 112102, 12658, 131064, 23646, 65450,427274,116768]
            }]
        };
        myChart.setOption(option);
</script>			

</html>