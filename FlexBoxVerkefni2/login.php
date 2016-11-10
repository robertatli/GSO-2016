<!DOCTYPE html>
<?php

      if(isset($_GET['id'])){

          print_r($_GET); // Skoðum GET

          // Sækjum gildi úr GET
          $id = $_GET["id"];

          if($id == 1){
              $img = "1.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 2){
              $img = "2.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 3){
              $img = "3.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 4){
              $img = "4.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 5){
              $img = "5.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 6){
              $img = "6.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 7){
              $img = "7.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
          if($id == 8){
              $img = "8.jpg";
              $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
              // búum til cookie til að senda með page request næst til miðlara
              setcookie("pic", $img, $expire);
          }
      } 
?>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/stilsida.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <script src="overlaymenu.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.js-1.4.2/parallax.js"></script>
  <script> 
    function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["fpass"].value;
    if (x == null && y == null || x == "" && y == "") {
      alert("Name and Password must be filled out");
      return false;
    }
    else if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    else if (y == null || y == "") {
        alert("Password must be filled out");
        return false;
    }
}
  </script>
	  <title>FlexBox - Verkefni</title>
    <?php 
      $_POST = array('slod' => 'myndir/eitttre.jpg','slod2' => 'myndir/glasses.jpg');
      $cookie_name = "userback";
      $cookie_value = "Velkominn Aftur";
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    ?>
</head>
<body>
  <div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="navigation" id="overlay-content">
      <li><a href="login.php">PHP</a></li>
      <li><a href="index.php">VSH</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
</div>
<span onclick="openNav()" class="menu">&#9776;</span>
    <div class="wrapper">
      <header class="header">
        Login
      </header>
      <main class="main">
        <form name="myForm" action="welcome.php" onsubmit="return validateForm()" method="get">
        Username: <input type="text" name="fname" class="input" style="font-family:Arial, Georgia, Serif"><br>
        Password: <input type="password" name="fpass" class="input" style="font-family:Arial, Georgia, Serif"><br>
        <input type="submit" value="Submit">
        </form>
      </main><!--tre.php?img=Tre-->
      <?php
          $path = $_POST['slod'];
          $path2 = $_POST['slod2'];
          if(!isset($_COOKIE[$cookie_name])) {
               echo "Halló nýi notandi";
          } else {
               echo $_COOKIE[$cookie_name];
          }
        ?>
        <aside>
        <a href="tre.php?name=Mynd+af+tré">
              <input type="image" src=<?= $path?> style="width:300px;height:400px;" alt="Mynd af tré"/>
          </a>
          
        </aside>
        <aside>
          <a href="gleraugu.php?name=Mynd+af+gleraugum">
            <input type="image" src=<?= $path2?> style="width:400px;height:267px;" alt="Mynd af gleraugum"/>
          </a>
          <a href="tre.php?name=Mynd+af+tré">
              <input type="image" src=<?= $path?> style="width:300px;height:400px;" alt="Mynd af tré"/>
          </a>
          <!--|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-->
          <a href="login.php?id=1">
            <input type="image" src="myndir/1.jpg" style="width:100px;height:100px;" alt="1"/>
          </a>
          <a href="login.php?id=2">
            <input type="image" src="myndir/2.jpg" style="width:100px;height:100px;" alt="2"/>
          </a>
          <a href="login.php?id=3">
            <input type="image" src="myndir/3.jpg" style="width:100px;height:100px;" alt="3"/>
          </a>
          <a href="login.php?id=4">
            <input type="image" src="myndir/4.jpg" style="width:100px;height:100px;" alt="4"/>
          </a>
          <a href="login.php?id=5">
            <input type="image" src="myndir/5.jpg" style="width:100px;height:100px;" alt="5"/>
          </a>
          <a href="login.php?id=6">
            <input type="image" src="myndir/6.jpg" style="width:100px;height:100px;" alt="6"/>
          </a>
          <a href="login.php?id=7">
            <input type="image" src="myndir/7.jpg" style="width:100px;height:100px;" alt="7"/>
          </a>
          <a href="login.php?id=8">
            <input type="image" src="myndir/8.jpg" style="width:100px;height:100px;" alt="8"/>
          </a>
        </aside>
        <div>
            <?php
                $output = "";
                $mynd = "";
                // athugum hvort cookie er til
                if(isset($_COOKIE['pic'])){
                    $output = "<h2>Nýlega skoðað</h2>";
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE['pic'];     
                    // birtum mynd
                    echo $output . "<img src=\"myndir/{$mynd}\" style=\"width:100px;height:100px;\">"; 
                }   
            ?>
        </div>
    </div>
  </body>
</html>