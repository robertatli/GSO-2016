<!DOCTYPE html>
<html>
<head>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/stilsida.css">
  <link rel="stylesheet" href="./css/normalize.css">
  <script src="overlaymenu.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.js-1.4.2/parallax.js"></script>
	  <title>FlexBox - Verkefni</title>
    <?php 
      $_POST = array('slod' => 'myndir/eitttre.jpg','slod2' => 'myndir/glasses.jpg');
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
        <form action="welcome.php" method="get">
        Name: <input type="text" name="name" class="input"><br>
        E-mail: <input type="text" name="email" class="input"><br>
        <input type="submit">
        </form>
      </main><!--tre.php?img=Tre-->
      <?php
          $path = $_POST['slod'];
          $path2 = $_POST['slod2'];
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
        </aside>
    </div>
  </body>
</html>