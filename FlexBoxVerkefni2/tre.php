<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/stilsida.css">
	<link rel="stylesheet" href="./css/normalize.css">
	<title>FlexBox - Verkefni</title>
	<?php 
      $_POST = array('slod' => 'myndir/eitttre.jpg');
    ?>
    <style type="text/css">
      body{
        color: white;
      }
    </style>
</head>
<body>
      <main class="main">
      <?php
      $path = $_POST['slod'];  
      $img = $_GET['name'];
      ?>
      <?php echo $img . "<br>" ?>
      <img src=<?= $path?> style="width:300px;height:400px;">

      </main>
    </div>
  </body>
</html>