<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="./css/stilsida.css">
	<link rel="stylesheet" href="./css/normalize.css">
	<title>FlexBox - Verkefni</title>
	<?php 
      $_POST = array('slod' => 'myndir/glasses.jpg');
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
      <img src=<?= $path?> style="width:400px;height:267px;">

      </main>
    </div>
  </body>
</html>