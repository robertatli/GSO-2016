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
  <script src="snowstorm-min.js"></script>
  <meta charset="utf-8">
  <script>
    snowStorm.followMouse = false;
    snowStorm.vMaxX = 3;
    snowStorm.vMaxY = 3;
    snowStorm.excludeMobile = true;
  </script>
	<title>FlexBox - Verkefni</title>
</head>
<body><!---->
<div>
  <a data-scroll href="#VSH" onclick="closeNav()">
    <img src="./myndir/Harpa%20Merki/Vertical/No-Background-White/Harpa_Logo_Horizontal_NoBack-White.png" width="100px" height="100px"
    style="position:fixed;">
  </a>
</div>
<span id="VSH"></span>

<div class="annad">
  
    <ul class="navigation">
      
      <li><a href="login.php">PHP</a></li>
      <li><a data-scroll href="#VSH" onclick="closeNav()">VSH</a></li>
    </div>
    <div class="fela">
      <li>
        <a data-scroll href="#" onclick="closeNav()" class="opna">Sýningar</a>
        <ul  id="overlay-content">


          <div id="myNav" class="overlay" data-spy="affix">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <li><a data-scroll href="#adsinf" onclick="closeNav()">Aðventutónleikar Sinfóníunnar</a></li>
            <li><a data-scroll href="#krijoh" onclick="closeNav()">Hátíðartónleikar Kristjáns Jóhannsonar</a></li>
            <li><a data-scroll href="#goi" onclick="closeNav()">Jólafjör Góa</a></li>
            <li><a data-scroll href="#stefhilm" onclick="closeNav()">Jólatónleikar Stefáns Hilmars</a></li>
            <li><a data-scroll href="#sigbein" onclick="closeNav()">Jólatónleikar Siggu Beinteins</a></li>
            <li><a data-scroll href="#sissel" onclick="closeNav()">Jól með Sissel</a></li>
            <li><a data-scroll href="#jolsinf" onclick="closeNav()">Jólatónleikar Sinfóníuhljómsveit Íslands</a></li>
          </div>
        </ul>
      </li>
    </div>
  </ul>

<span onclick="openNav()" class="menu" id="menuicon">&#9776;</span>







  <div class="wrapper"><!-- Heldur utan um allt -->
    <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/harpa_snow.jpg" data-natural-width="1400">
    <div class="wrap-center">
    <div class="banner-centered" id="banner-text">
      <h2 id="hidden">Jóladagskrá Hörpunnar</h2>
    </div>
  </div>
</div>
    
    <header class="header"><br><br><div class="textmanager"><h2>Fagnaðu hátíðunum með Hörpunni og taktu þátt í skemmtuninni sem haldin verður um jólin</h2></div><br><br></header></span>
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
    <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/sinfoniaislands.jpg" data-natural-width="1400"><span id="adsinf"></span>      
      <div class="wrap-center">
        <div class="banner-centered" id="banner-text">
          <h2 id="hidden">Aðventutónleikar Sinfóníunnar</h2>
        </div>
      </div>
    </div>


      
      <aside class="aside aside-1"><div class="textmanager"><h4 style="font-style:italic">„Jólastemning er allt, sem þurfum hér: Andi gleði og ástargeð æ gefist mér og þér“</h4>

Jólatónleikar Sinfóníuhljómsveitarinnar hafa notið gífurlegra vinsælda og eru fastur liður í jólahaldi margra fjölskyldna á Íslandi.

<p>Í ár, sem endranær, verður hátíðleikinn í fyrirrúmi þar sem sígild jólalög og klassísk balletttónlist er í forgrunni. Ungir einleikarar, sigurvegarar úr áheyrnarprufu jólatónleikanna, leika á flautu og hörpu í gullfallegu lagi Jórunnar Viðar, Jól, og nemendur Listdansskóla Íslands túlka fjölbreytta og litríka dansa úr Jólatréssvítu Rebikovs sem hljómar nú í fyrsta sinn á Íslandi. Framúrskarandi hljóðfæraleikarar úr Skólahljómsveit Árbæjar og Breiðholts munu leggja Sinfóníuhljómsveitinni lið í flutningi lagsins sívinsæla Boðskapur Lúkasar með hljóðfæraleik og líflegri sviðsframkomu. Bjöllukór Tónlistarskóla Reykjanesbæjar mun svo venju samkvæmt hringja inn jólin með hátíðlegum klukknahljóm ásamt því að flytja gullfallegt enskt jólalag með tilvísun í enska endurreisnartónskáldið John Bull.</p>

Einsöngvarar jólatónleikanna, Hulda Björk Garðarsdóttir og Kolbrún Völkudóttir ásamt Stúlknakór Reykjavíkur og Táknmálskórnum Vox Signum, flytja úrval innlendra og erlendra jólalaga sem koma öllum í sannkallað hátíðarskap.

<p>Kynnir tónleikana er trúðurinn Barbara sem mun á sinn einlæga og óviðjafnanlega hátt tendra ljós í hverju tónleikahjarta. Tónleikarnir verða túlkaðir á táknmáli.</p>

<strong>dagsetningar: Lau. 13. des. >> 14:00 || Lau. 13. des. >> 16:00 || Lau. 14. des. >> 14:00<br>Verð frá: 2500 - 7200</strong><br><br>
</div></aside></span> <!--////////////////////////////////////////////////////////////////////////////////////////////////-->
      
      <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/HKJ2.jpg" data-natural-width="1400"><span id="krijoh"></span>
        <div class="wrap-center">
            <div class="banner-centered" id="banner-text">
              <h2 id="hidden">Hátíðartónleikar<br>Kristjáns Jóhannssonar</h2>
            </div>
        </div>
      </div>


      
      <article class="main" id="container"><h2></h2><div class="textmanager"><p><br><strong>Kristján Jóhannsson</strong> heldur sína árlegu jólatónleika í <strong>Eldborg í Hörpu</strong>,  laugardaginn 3. desember kl 20:00. Tónleikarnir hafa notið gríðarlegra vinsælda í gegnum árin og eru fastur liður í jólaundirbúningi margra tónlistarunnenda.</p>

Efnisskrá tónleikanna er sérlega glæsileg en <strong>Kristján Jóhannsson, Dísella Lárusdóttir, Elmar Gilbertsson, Oddur Arnþór Jónsson og Hrafnhildur Árnadóttir</strong> flytja eftirlætis óperuaríur og hátíðleg jólalög ásamt <strong>Óperukórnum í Reykjavík og Karlakór Kópavogs</strong> við undirleik <strong>sinfóníuhljómsveitar</strong> undir stjórn <strong>Garðars Cortes.</strong>
<p><strong>03. desember 2016 20:00<br>
Verð frá: 4500 - 12900</strong></p><br>
      </div></article> </span> 
<!--////////////////////////////////////////////////////////////////////////////////////////////////-->
       
      <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/goi.jpg" data-natural-width="1400"><span id="goi"></span>
        <div class="wrap-center">
            <div class="banner-centered" id="banner-text">
              <h2 id="hidden">Jólafjör með Góa og Stórsveit Reykjavíkur</h2>
            </div>
        </div>
      </div>

         

        <aside class="aside aside-2"><br><br><div class="textmanager"><p><strong>Gói</strong> endurnýjar frábærlega vel heppnuð kynni af <strong>Stórsveit Reykjavíkur</strong> frá í fyrra. Spjall, sprell og söngur fyrir alla fjölskylduna. Aldrei að vita nema jólasveinarnir láti sjá sig líka og láti öllum illum látum. Efnisskráin verður samsett af léttum og skemmtilegum jólalögum í fjörugum útsetningum. Einsöngvari og kynnir: <strong>Gói.</strong> Stjórnandi og útsetjari: <strong>Haukur Gröndal.</strong></p>

        Ef keyptir eru miðar á a.m.k  þrenna tónleika í einu fæst 20% afsláttur.  Aðeins selt í miðasölu Hörpu sími 5285050

        <p><strong>04. desember 2016 14:00<br>
Almenn miðaverð kr. 3.900 - en kr. 1.900- fyrir eldriborgara, öryrkja og börn í grunnskóla ( miðar seldir í miðasölu Hörpu)</strong></p>

</div></aside> </span>
<!--////////////////////////////////////////////////////////////////////////////////////////////////--> 


        
        <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/stefanhilm.jpg" data-natural-width="1400"><span id="stefhilm"></span>
          <div class="wrap-center">
            <div class="banner-centered" id="banner-text">
              <h2 id="hidden">Jólatónleikar Stefáns Hilmarssonar</h2>
            </div>
          </div>
        </div>
        <aside class="aside aside-2"><div class="textmanager"><p><strong>Stefán Hilmarsson</strong> heldur árlega jólatónleika sína í Silfubergi í Hörpu 8. og 9. desember. Sérstakir gestir <strong>Stefáns</strong> í ár verða Jón Jónsson, <strong>Jóhanna Guðrún og Ísold Wilberg</strong>, ung söngkona sem er að stíga sín fyrstu skref.</p><p> Á tónleikunum verða að vanda flutt lög af jólaplötum Stefáns, <strong>„Í desember“</strong> og <strong>„Ein handa þér“</strong>, í bland við sérvalin stemmnings- og hátíðarlög af ýmsum toga. Hljómsveitin verður skipuð annáluðum sérfræðingum og galdramönnum.</p><p><strong>Verð frá: 6990<br>08. desember 2016 | kl. 20:00 - 09. desember 2016 | kl. 20:00</strong></p></div></aside> </span>

        <!--////////////////////////////////////////////////////////////////////////////////////////////////--> 


        
        <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/siggabein.jpg" data-natural-width="1400"><span id="sigbein"></span>
          <div class="wrap-center">
            <div class="banner-centered" id="banner-text">
              <h2 id="hidden">Jólatónleikar Siggu Beinteins</h2>
            </div>
          </div>
        </div>
        <span id="Aside2">  
        <aside class="aside aside-2"><div class="textmanager"><p><strong>„Á hátíðlegum nótum“</strong></p>
        <p>Hinir árlegu jólatónleikar <strong>Siggu</strong> verða haldnir í <strong>Eldborgarsal Hörpu</strong> 9. og 10. desember. Þetta er áttunda árið sem <strong>Sigga</strong> heldur sína eigin jólatónleika og þriðja árið í röð sem þeir verða haldnir í <strong>Eldborgarsal Hörpu.</strong></p> 

        <p>Fyrir jólin 2015 var uppselt á tvenna ógleymanlega <strong>jólatónleika Siggu</strong> í Eldborg, en kvöldin voru sem töfrum líkust og stemningin sem myndaðist í salnum lét engan ósnortinn, enda lagavalið sambland af klassískum jólalögum, hressum poppjólalögum og mögnuðum ballöðum sem spiluðu á allan tilfinningaskala tónleikagesta.</p> 

        <p>Umgjörðin utan um tónleikana var einkar falleg þar sem jólatré og falleg grafík spiluðu stóran þátt í að gera tónleikana bæði hlýlega, hátíðlega og afar eftirminnilega.</p>

        <p>Með <strong>Siggu</strong> koma fram góðir gestir ásamt landsliði tónlistarmanna og tónninn sem gefinn er er einlægur og hlýr - eins og <strong>Sigga</strong> sjálf.</p>
        <p><strong>Verð frá: 5490 - 9990</strong><br><strong>09. desember 2016 | kl. 21:00 - 10. desember 2016 | kl. 21:00</strong></p></div></aside> </span>

        <!--////////////////////////////////////////////////////////////////////////////////////////////////--> 


        
        <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/sissel.jpg" data-natural-width="1400"><span id="sissel"></span>
          <div class="wrap-center">
            <div class="banner-centered" id="banner-text">
              <h2 id="hidden">Jól með Sissel</h2>
            </div>
          </div>
        </div>
        <span id="Aside2">  
        <aside class="aside aside-2"><div class="textmanager"><p>UPPSELT Á ÞRENNA TÓNLEIKA 11. OG 12. DESEMBER FÁIR MIÐAR EFTIR Á ÞÁ FJÓRÐU (12. DES. KL. 18)</p><p><strong>ATHUGIÐ: EKKI ER HÆGT AÐ BÆTA VIÐ FLEIRI TÓNLEIKUM</strong></p><p><strong>Sissel Kyrkjebø</strong> er ein skærasta söngstjarna Norðurlandanna og hefur selt upp á hverja tónleikana á fætur öðrum, árum saman. Sissel hefur svo sannarlega sungið sig inn í hugi og hjörtu landsmanna, en hún hefur í þrígang komið fram á tónleikum hér á landi og færri komist að en vildu í öll skiptin.</p>

        <p>Að þessu sinni slást tónlistarmenn á heimsmælikvarða með í för, sem hafa margir hverjir unnið með mörgum helstu stjörnum heims, þeirra á meðal eru <strong>Wayne Hernandez</strong> (Tina Turner Madonna, Yusuf Islam) <strong>Sam White</strong> (Duran Duran, David Gray, Annie Lennox) og <strong>Phebe Edwards</strong> (Rod Stewart, Adele, Donna Summer.)</p>

        <p>Það má því búast við einstaklega vönduðum og skemmtilegum tónleikunum, en að þessu sinni verða flutt kraftmikil og sálarskotin dægurlög ásamt gömlu góðu og klassísku jólalögunum sem lokka fram jólastemninguna ár eftir ár.</p></div></aside> </span>

        <!--////////////////////////////////////////////////////////////////////////////////////////////////--> 


        
        <div class="parallax-window-header" data-parallax="scroll" data-bleed="0" data-speed="0.5" data-image-src="myndir/sinfoniajolat.jpg" data-natural-width="1400"><span id="jolsinf"></span>
          <div class="wrap-center">
            <div class="banner-centered" id="banner-text">
              <h2 id="hidden">Jólatónleikar Sinfóníuhljómsveit Íslands</h2>
            </div>
          </div>
        </div>
        <aside class="aside aside-2"><div class="textmanager"><p>Á <strong>jólatónleikum Sinfóníunnar</strong> er hátíðleikinn í fyrirrúmi og þar eiga sígildar jólaperlur fastan sess. Nýr forleikur með jólalögum frá Norðurlöndunum og Sleðaferð Andersons gefa upptaktinn að tónleikunum ásamt gullfallegri túlkun nemenda Listdansskólans á Blómavalsi Tsjajkovskíjs og flutningi <strong>Bjöllukórs Tónlistarskóla Reykjanesbæjar</strong> á hinu sígilda íslenska jólalagi Jólin alls staðar. Skólahljómsveit Kópavogs flytur sívinsælt lag <strong>Gunnars Þórðarsonar</strong> Aðfangadagskvöld og ungir einleikarar koma fram í hinu ægifagra Panis Angelicus. Einsöngvarar ásamt kórum úr Langholtskirkju og táknmálskór flytja úrval innlendra og erlendra jólalaga sem koma öllum í sannkallað hátíðarskap. Trúðurinn Barbara kynnir tónleikana af sinni alkunnu snilld en tónleikarnir eru einnig túlkaðir á táknmáli. Nemendur úr <strong>Skólahljómsveit Kópavogs</strong> og <strong>Bjöllukór Tónlistarskóla Reykjanesbæjar</strong> flytja jólalög á undan tónleikunum. </p></div></aside> </span>

       <!--<span id="Footer">
      <footer class="footer"><br><br><div class="textmanager"></div>-->
<script>
    smoothScroll.init();
</script>
</footer></span></div>
    </body>
</html>