<!DOCTYPE html>
<html>
<head>
  <?php ob_start(); 
    $file = 'hallo.php';
    if (file_exists($file) && is_readable($file)) {
      include $file;
    }
    else {
    throw new Exception("$file can't be found");
    }

  ?>
  <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
  <script type="./newfolder/jquery-3.1.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/stilsida.css">
	<link rel="stylesheet" href="./css/normalize.css">
  <script type="bootstrap.min.js"></script>
  <script src="overlaymenu.js"></script>
  <script type="navcollapse.js"></script>
  <script src="parallax.js-1.4.2/parallax.js"></script>
  <script src="newfolder/smooth-scroll-master/dist/js/smooth-scroll.js"></script>
	<title>FlexBox - Verkefni</title>
</head>
<body>
<span id="VSH">
<div id="myNav" class="overlay" data-spy="affix">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <ul class="navigation" id="overlay-content">
      <li><a href="login.php">PHP</a></li>
      <li><a data-scroll href="#VSH" onclick="closeNav()">VSH</a></li>
      <li><a data-scroll href="#Header" onclick="closeNav()">Header</a></li>
      <li><a data-scroll href="#Aside1" onclick="closeNav()">Aside 1</a></li>
      <li><a data-scroll href="#Main" onclick="closeNav()">Main</a></li>
      <li><a data-scroll href="#Aside2" onclick="closeNav()">Aside 2</a></li>
      <li><a data-scroll href="#Footer" onclick="closeNav()">Footer</a></li>
    </ul>
</div>
<span onclick="openNav()" class="menu">&#9776;</span>
  <div class="wrapper"><!-- Heldur utan um allt -->
    <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/raudlauf2.jpg" data-natural-width="1400">
    <div class="wrap-center">
    <div class="banner-centered" id="banner-text">
      <h2 id="hidden">Lorem ipsum dolor sit amet</h2>
    </div>
  </div>
</div>
    <span id="Header">
    <header class="header">Header<br><br><div class="textmanager">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.</div></header></span>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<!--<div>
</div>-->
    <div class="parallax-window" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/steinahaed.jpg" data-natural-width="1400"></div>
      <span id="Aside1">
      <aside class="aside aside-1">Aside 1<br><br><div class="textmanager">In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

      <br><br>

      In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.</div>
      </aside></span> <!--////////////////////////////////////////////////////////////////////////////////////////////////-->
      <div class="parallax-window" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/mountains.jpg" data-natural-width="1400"></div>
      <span id="Main">
      <article class="main" id="container"><h2>Main</h2><p><div class="textmanager">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

      <br><br>

      In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

      <br><br>

      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet.Pellentesque nisl libero, posuere nec justo at, dictum viverra purus.  In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

      <br><br>

      In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.
      </div></p></article> </span> 
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
<div class="parallax-window" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/thoka.jpg" data-natural-width="1400"></div>

         <span id="Aside2">  
        <aside class="aside aside-2">Aside 2<br><br><div class="textmanager"> In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

        <br><br>

        In massa nulla, aliquet vitae ligula a, tempus luctus lacus. Maecenas vel dapibus sapien. Nulla accumsan a tortor ut fermentum. Etiam porttitor justo elit, ut semper mi viverra sit amet. Pellentesque nisl libero, posuere nec justo at, dictum viverra purus. In mollis quam massa, sit amet suscipit leo eleifend quis. Fusce feugiat porttitor dolor id finibus. Sed quis sapien vel libero blandit porttitor. In ipsum augue, porttitor id est vel, tristique rutrum elit. Cras gravida luctus ipsum, id elementum dolor ultrices et.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula faucibus, elementum libero in, ultricies quam. Pellentesque suscipit velit nec imperdiet imperdiet. Sed turpis purus, varius ut quam quis, aliquam accumsan velit. In non congue odio. Vestibulum pretium semper nibh, placerat porta eros porttitor nec. Vivamus vel mi at diam varius fringilla. Fusce consectetur a orci id elementum. Pellentesque rhoncus augue ut leo rhoncus vestibulum.

<!--////////////////////////////////////////////////////////////////////////////////////////////////-->

</div></aside> </span>

        <div class="parallax-window" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/tre.jpg" data-natural-width="1400"></div> 
        <span id="Footer">
      <footer class="footer">Footer<br><br><div class="textmanager">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam malesuada pulvinar nisi, ut egestas nibh vestibulum dictum. Etiam eu ex eu orci sagittis sodales. Morbi sit amet augue ultrices velit gravida sollicitudin. Cras sed orci consectetur, viverra libero ac, iaculis tellus. Nulla finibus nisi ac purus molestie cursus. Pellentesque semper diam tempus elementum volutpat. Suspendisse potenti. Nullam sed odio finibus felis finibus condimentum. Quisque ut lorem sem. Cras non convallis orci, eu interdum leo. Suspendisse congue commodo cursus.

</div>
<script>
    smoothScroll.init();
</script>
</footer></span></div>
    </body>
</html>