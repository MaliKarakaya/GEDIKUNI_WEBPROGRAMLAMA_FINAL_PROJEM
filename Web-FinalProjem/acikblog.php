<?php
include("baglanti.php");
session_start();

if (isset($_SESSION["kullanici_adi"])) {
	$kullanic_err=$_SESSION["kullanici_adi"];
	$cikis="Çıkış Yap";
}
else{
	echo "<h1 style='text-align:center; color:red;'>Bu Sayfayı Yetkileme Görüntünüz Yok Oturum Açmanız Gerekmektedir!!!</h1>";
	echo htmlentities(html, ENT_QUOTES);
}

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

  <a href="profile.php" class="logo"><span>M</span>ALİ++</a>

   <nav class="menu">
       <a href="profile.php">ANA SAYFA</a>
       <a href="acikblog.php">BLOG YAZILARIM</a>
       <a href="profile.php"><?php
       echo $kullanic_err;
      ?></a>
   <a href="cikis.php"><?php echo $cikis; ?> </a>
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
            <div class="Dresim"><a href="ac++.php"><img src="images/c++.png"/></div>
            <div class="Dresimyazi">C++</div></a>
        </div>
        <div class="dersler">
            <div class="Dresim"><a href="aphp.php"><img id="spesiyaller" src="images/php.png"></div>
            <div class="Dresimyazi">PHP</div></a>
            
        </div>
        <div class="dersler">
            <div class="Dresim"><a href="aflutter.php"><img id="spesiyaller" src="images/flutter.png"></div>
            <div class="Dresimyazi">flutter</div></a>
        </div>
        <div class="dersler">
            <div class="Dresim"><a href="alarvel.php"><img id="spesiyaller" src="images/laravel.png"></div>
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
               <br>
           </div>
           
                 
               
                 
                 
           </div>
      

       <div class="Ykutu">
           <h3 class="Ybaslik">Kategoriler</h3>
           <div class="Yblog">
               <a href="ac++.php">C++<span>1</span></a>
               <a href="aphp.php">Php<span>2</span> </a>
               <a href="aflutter.php">Fluter<span>3</span> </a>
               <a href="alarvel.php">Laravel<span>4</span> </a>
               
           </div>
       </div>
   </div>

</section>


<section class="footer">
    
   <div class="lisans">Copyright ©<span>mr.Muhammet Ali Karakaya</span> | 2022 Tüm hakları saklıdır.</div>
</section>
</body>
</html>