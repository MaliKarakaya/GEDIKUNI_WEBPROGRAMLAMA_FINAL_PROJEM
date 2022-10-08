<?php
include("baglanti.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="icon">
    <link href="css/haricicss.css" rel="stylesheet">

    <title>MALI++ Blog Yazılarım</title>
</head>
<body>
<header class="header">

   <a href="index.php" class="logo"><span>M</span>ALİ++</a>

   <nav class="menu">
       <a href="index.php">ANA SAYFA</a>
       <a href="blog.php">BLOG YAZILARIM</a>
       <a href="oturumac.php">OTORUM AÇ</a>
   </nav>

   

</header>
<section class="banner" id="banner" style="background-image:url(images/banner3.jpg);" >
   
   <div class="kutu">
       <h3>BLOG YAZILARIM</h3>
       <input type="button" class="bannerbtn"  id="res" value="Değiştir" onclick="document.getElementById('banner').style.backgroundImage='url(images/banner4.jpg)'"></input>
    
   </div>
   
   
   

</section>
<section class="container">
       <div class="blogkutu">



        <div class="dersler">
            <div class="Dresim"><a href="c++.php"><img src="images/c++.png"/></div>
            <div class="Dresimyazi">C++</div></a>
        </div>
        <div class="dersler">
            <div class="Dresim"><a href="phpblog.php"><img id="spesiyaller" src="images/php.png"></div>
            <div class="Dresimyazi">PHP</div></a>
            
        </div>
        <div class="dersler">
            <div class="Dresim"><a href="flutterblog.php"><img id="spesiyaller" src="images/flutter.png"></div>
            <div class="Dresimyazi">flutter</div></a>
        </div>
        <div class="dersler">
            <div class="Dresim"><a href="larvelblog.php"><img id="spesiyaller" src="images/laravel.png"></div>
            <div class="Dresimyazi">laravel</div></a>
        </div>


       </div>

   <div class="yanekler">
       <div class="Ykutu">
           <h3 class="Ybaslik">Hakkımda</h3>
           <div class="hakkımda">
               <img src="images/ben.jpg" alt="">
               <h3>Muhammet Ali Karakaya</h3>
               <p>Yazılım Geliştirme alanında uzmanlaşmış, uzman yazılım geliştiricisiyim. İstanbul'da ikamet ediyorum. Son teknolojileri takip ederek ve kullanmaya özen göstererek yalın, işlevsel ve temiz kod yazıyorum.</p>
           </div>   
           </div>
   <div class="Ykutu">
            <h3 class="Ybaslik">Kategoriler</h3>
            <div class="Yblog">
                <a href="c++.php">C++<span>1</span></a>
                <a href="phpblog.php">Php<span>2</span> </a>
                <a href="flutterblog.php">Fluter<span>3</span> </a>
                <a href="larvelblog.php">Laravel<span>4</span> </a>
                
            </div>
        </div>
   </div>

</section>


<section class="footer">
    
   <div class="lisans">Copyright ©<span>mr.Muhammet Ali Karakaya</span> | 2022 Tüm hakları saklıdır.</div>
</section>
</body>
</html>