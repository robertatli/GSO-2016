<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/stilsida.css">
	<link rel="stylesheet" href="./css/normalize.css">
  <script src="overlaymenu.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.js-1.4.2/parallax.js"></script>
	<title><?php 

$titles = array(); 

$titles[] = "Gleðileg Jól"; 
$titles[] = "Harpan heldur uppá jólin með þér"; 
$titles[] = "Jólasöngur";
$titles[] = "Jólafjör";
$titles[] = "Jólasveinar einn og átta";

srand ((float) microtime() * 10000000); // Seed the random number generator 

echo $titles[array_rand($titles)]; // Pick a random item from the array and output it 
?></title>
</head>
</html>