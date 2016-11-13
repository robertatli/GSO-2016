<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/stilsida.css">
	<link rel="stylesheet" href="./css/normalize.css">
  <script src="overlaymenu.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.js-1.4.2/parallax.js"></script>
  	<?php 

		$titles = array(); 

		$titles[] = "Stekkjastaur"; 
		$titles[] = "Giljagaur"; 
		$titles[] = "Stúfur";
		$titles[] = "Þvörusleikir";
		$titles[] = "Pottaskefill";
		$titles[] = "Askasleikir"; 
		$titles[] = "Hurðaskellir"; 
		$titles[] = "Skyrjarmur";
		$titles[] = "Bjúgnakrækir";
		$titles[] = "Gluggagægir";
		$titles[] = "Gáttaþefur";
		$titles[] = "Ketkrókur";
		$titles[] = "Kertasníkir";

		srand ((float) microtime() * 10000000); // Seed the random number generator 

		$sveinn = $titles[array_rand($titles)]; // Pick a random item from the array and output it
	?>
	<title></title>
</head>
<body>
	<div>
  <a data-scroll href="#VSH" onclick="closeNav()">
    <img src="./myndir/Harpa%20Merki/Vertical/No-Background-White/Harpa_Logo_Horizontal_NoBack-White.png" width="100px" height="100px"
    style="position:fixed;">
  </a>
</div>

<div class="annad">
  
    <ul class="navigation">
      <li><a href="#">Harpan</a></li>
      <li><a href="#" class="z">Jólaleikur</a></li>
      <li><a href="login.php">PHP</a></li>
      <li><a data-scroll href="index.php">VSH</a></li>
    </div>
  </ul>

<span onclick="openNav()" class="menu" id="menuicon">&#9776;</span>
  <div class="wrapper"><!-- Heldur utan um allt -->
  	<div>
  		<h1 style="margin-top:10vh;">
  			Hvaða Jólasveinn ert þú?
  		</h1>
  		<div>
  			<?php echo '<img src="myndir/' . $sveinn . '.jpg"/>'; ?>
  		</div>
  		<div>
  			<h2 style="margin-top:11vh;">Þú ert <?php echo $sveinn;?></h2>
  		</div>
  		<form action="Happdraetti.php">
  			<strong><input type="submit" value="Annar Jólasveinn" class="button" /></strong>
  		</form>
  	</div>
  </div><!-- Wrapper -->
</body>
</html>