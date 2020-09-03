<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lnc Analysis</title>
	
	<link href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<link rel="stylesheet" href="public/css/header.css">
	<link rel="stylesheet" href="public/css/footer.css"/>
	<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.staticfile.org/ionicons/2.0.1/css/ionicons.min.css">
			<link href="hotpoint_index_data/style.css" rel="stylesheet" type="text/css" media="all">

	<link href="/VARAdb/public/css/dataTables.bootstrap.min-1.10.13.css" rel="stylesheet">
	<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>	
	<style type="text/css">
		#accordion .panel-heading{
		    padding: 0;
		    border: none;
		    border-radius: 0;
		    position: relative;
		}
		#accordion .panel-title p{
		    display: block;
		    padding: 15px 20px;
		    margin: 0;
		    background: #1a2235;
		    font-size: 18px;
		    font-weight: 700;
		    letter-spacing: 1px;
		    color: #fff;
		    border-radius: 0;
		    position: relative;
		}
		#accordion .panel-title a.collapsed{ 
			background: #1c2336;}
		#accordion .panel-title a:before,
		
		
		
	

		#accordion .panel-body{
		    border-left: 3px 
		    solid #1a2235;
		    border-top: none;
		    background: #fff;
		    font-size: 17px;
		    color: #1c2336;
		    line-height: 27px;
		    position: relative;
		}
		#accordion .panel-body:before{
		    content: "";
		    height: 3px;
		    width: 100%;
		    background: #1a2235;
		    position: absolute;
		    bottom: 0;
		    left: 0;
		}
		.btn-w3r {
			
			
			border-radius: 25px;
			background: linear-gradient(to bottom,  #0f4a9e 0%,#000000 50%,#0f4a9e 100%); 

			/* W3C */
			color:#fff;
		}
		.btn-w3r:hover {
			background: #333; /* 旧版浏览器 */
			color:#e75616;
		}     		
        		   
		

		.hr1{ height:1px;border:none;border-top:3px solid #346191;}

			.cya{
			 font-family: Geneva, Verdana, sans-serif;
			}

	</style>
	
	
</head>
<?php 
include 'public/conn.php';
$classI=$_GET["classI"];
$classII=$_GET["classII"];
$set=$_GET["set"];
$length=$_GET["length"];
$trust=$_GET["trust"];

//echo $set;

echo $classII;
echo "<br>";
echo $set;
$dt_classI="dbt_".$classI;
echo "<br>";
echo $dt_classI;
$where='ClassII="'.$classII.'" and `Set`="'.$set.'" ';
echo $where;
?>
<body >
  
<header>
	<nav class="navbar main-menu" style="background-color:white;">
		<div class="container">
			<div class="navbar-header" >
				<a class="navbar-brand" href="index.php"><img class="logo" id="logo" src="public/img/logo.jpg" alt="logo" width="300" height="40"></a>
			</div>

			<!-- navbar-collapse start-->
			<div id="nav-menu" class="navbar-collapse collapse" role="navigation" style="float: right;">
				<ul class="nav navbar-nav menu-wrapper">
					<li ><a href="index.php">Home</a></li>
					<li  ><a href="Analysis.php">Analysis</a></li>
					<li><a href="Search.php">Search</a></li>
					<li class="active" ><a href="data-browse.php">Data-Browse</a></li>
					<li><a href="help.php">help</a></li>
					<li><a href="Submit.php">Submit</a></li>

			</div>

		</div>
		<div class="navbot"></div>
	</nav>
</header>

<div class="container-fluid">

 <div class="row">
        <div class="col-lg-10 col-md-offset-1"> 
            <h2><span class="glyphicon glyphicon-stats"></span> PATH</h2>
        <div class="panel panel-info">
            <div class="panel-heading">             
            </div>
            <div class="panel-body">
                <div class="col-lg-4">      
                <table class="table table-hover" >
                    <tr style="font-weight:bold;color: red;font-weight:bold;">
                        <td  width="40%">Set:</td>
                        <td>  <?php echo $set;?> </td>
                    </tr>
                    <tr>
                        <td><strong>classI:</strong></td>
                        <td><?php echo $classI;?></td>
                    </tr>
                    <tr>
                        <td><strong>classII:</strong></td>
                        <td><?php echo $classII;?></td>
                    </tr>
                    <tr>
                        <td><strong>length:</strong></td>
                        <td><?php echo $length;?></td>
                    </tr>
                    <tr>
                        <td><strong>trust:</strong></td>
                        <td><?php echo $trust;?></td>
                    </tr>
                   
                   <tr>
                        <td><strong></strong></td>
                        <td></td>
                    </tr>
                    
                </table>
                </div>
                <div class="col-lg-7 col-md-offset-0">      
                    <div id="main" style="height:300px;width: 100%">
                    	
                    <script src="hotpoint_index_data/3dtag.js" type="text/javascript"></script>

				<div id="tag_cloud_widget">


				<?php

		$cysql='SELECT * 
			from '.$dt_classI.'
			where '.$where.'
			group by LncRNA	
			';
		    $cyresult=mysql_query($cysql,$conn);
		 while($row = mysql_fetch_assoc($cyresult))
		 {
		 	
		 	
		 	$cylnc=$row["LncRNA"];

			echo '
			<a class="cya" style="font-size: 10px; left: 51.4338px; top: 50.4347px; z-index: 176; opacity: 4.53126;"  target="_parent">'.$cylnc.'</a>';



		}						
				?>
				</div>





                    </div>  






                          
                </div>
            </div>
        </div>
        </div>
    </div>


















<div class="row">
		<div class="col-lg-10 col-md-offset-1">
			<hr/>
			<h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> LncRNA</h2>
			<div class="panel panel-info">
				<div class="panel-heading">				
				</div>	
				<div class="panel-body">
					<div class="col-lg-12" style="height:700px; overflow:scroll;">					
					<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
			<thead>
           	<tr>
								
								<th>LncRNA</th>
								<th>D1_Tissue</th>
								<th>D2_Method</th>
								<th>D3_Pubmed</th>
								
							</tr>
			</thead>
			<tbody>
	<?php
		$sql='SELECT * 
			from '.$dt_classI.'
			where '.$where.'		
			';
		    $result=mysql_query($sql,$conn); 
            while($row = mysql_fetch_assoc($result))
				{
				
				$D1_Tissue=$row["D1_Tissue"];
				$D2_Method=$row["D2_Method"];					
				$D3_Pubmed=$row["D3_Pubmed"];
				
				$LncRNA=$row["LncRNA"];
	?> 
			<tr>
							<td><?php echo '<a href="" target="_blank">';?><?php echo $LncRNA?></a></td>					
							
							<td><?php echo $D1_Tissue?></td> 				
							<td><?php echo $D2_Method?></td>
							<td><?php echo $D3_Pubmed?></td></td>
											
						</tr>
			<?php  }
			?>	
			</tbody>
		</table>
		</div>
			</div>
		</div>		
	</div>
</div>
<script type="text/javascript">   
$(document).ready(function() {
    $('#example').dataTable( {
        "dom": '<"top"i>rt<"bottom"flp><"clear">'
    } );
} );
</script> 

<footer>
	  <p><a href="index.php">Home</a> | <a href="data-browse.php">Data-Browse</a> | <a href="search.php">Search</a> | <a href="analysis_snp.php">Analysis</a>  |  <a href="genome-growser.php">Genome-Browser</a> | <a href="download.php">Download</a> | <a href="statistics.php">Statistics</a> | <a href="submit.php">Submit</a> | <a href="contact.php">Contact</a> | <a href="help.php">Help</a></p>
      <p><font size="4" color="red">Copyright &copy; HMU | </font><a href="http://www.licpathway.net//" target="_blank"><font size="4" color="red">Li C Lab</font></a></p>
</footer>


</body>
</html>