<?php
	require_once 'config.php';
	error_reporting(E_ALL);
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Tag Cash Data Entry API interface</title>

		<!-- jQuery 
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		-->
	</head>
	<body>
		<div class="wrapper container">
			<div class="col-xs-12" id="header">
				
			</div>
			<div class="col-xs-6 col-xs-offset-3">
				<h3>Import Data from CSV files</h3>
				<form enctype="multipart/form-data" method="post" action="import">
					<div class="fieldset">
						<input type="file" name="file" id="file" class="form-control" >
						<input type="submit" value="Import now">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
