<!DOCTYPE>
<html>
<head>
	<title> zonnepaneel1 </title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

<!-- container top -->
<div class="container_top"><a class="link_index" href="index.html"> Zonnepanelen </a></div>

<img src="image/20161202_102521.jpg" height="400px" width="400px" rotate="90">

<?php
	include_once "php/crud.php";
	$crud = new crud();
	$crud->getWeek();
?>

<!-- container bottom -->
<div class="container_bottom"> Gemaakt door: mannelijke roze </div>

<div class="container_bottom_2"> </div>

</body>
</html>