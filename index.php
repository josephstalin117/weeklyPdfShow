<?php
	$dir=dirname(__FILE__);
	$filesnames=scandir('/srv/ftp/weekly');
	$fl_array = preg_grep("/\.pdf/", $filesnames);
?>

<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>周记</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/jumbotron-narrow.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<div class="header">
			<h3 class="text-muted " id="title"><strong>周记</strong></h3>
		</div>
		<div>
			<table class="table table-bordered">
				<tr>
					<th>title</th>
				</tr>
				<tbody>
				<?php
				foreach ($fl_array as $name){
				?>
				<?php
					$url="read.php?name=".$name;
					$aurl="<a href=\"".$url."\">".$name."</a>";
					echo "<tr><td>".$aurl."</td></tr>";
				}
				?>
				</tbody>
			</table>
		</div>			
		<!-- /container -->
	</div>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
</body>
</html>