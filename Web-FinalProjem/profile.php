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
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="icon">
    <link href="css/haricicss.css" rel="stylesheet">

    <title>MALI++</title>
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
<section class="banner" id="banner" style="background-image:url(images/banner1.jpg);">
   
   <div class="kutu">
       <h3>I'm Developer</h3>
       <input type="button" class="bannerbtn"  id="res" value="Değiştir" onclick="document.getElementById('banner').style.backgroundImage='url(images/banner2.jpg)'"></input>
    
   </div>
   
   
   

</section>
<section class="container">

   

       <div class="blogkutu">
           <img src="images/foto1.jpg" alt="" class="image">
           <div class="ic">
              
               
           </div>
           <h3 class="baslik">Neden kod yazmayı öğrenmeliyiz?</h3>
           <p class="yazi">Bu yazım da programcı olmasanız bile neden kodlamayı öğrenmeniz gerektiğinden bahsedeceğim.</p>
           <h3 class="baslik">Analitik Düşünme (Adım Adım İlerleyin)</h3>
           <p class="yazi">Bilgisayarın ne demek istediğini ya da ne yapmak istediğini anlamamız gerekmektedir. Bilgisayar sadece bizim ona kodlarla söylemek istediklerimizle ilgilenir. 
              Bu nedenle makineye vereceğimiz talimatlar belli ve kesin olmalıdır. Örneğin buzdolabından su alacaksınız ve siz bir bilgisayar olsaydınız şöyle yapacaktınız.</p>
              <p class="yazi">1. Buzdolabına git.<br>
               2. Buzdolabına varmadın mı ? Adım 1’e devam et.<br>
               3. Buzdolabına yönel.<br>
               4. Elini aç ve buzdolabına uzat.<br>
               5. Elini buzdolabının kapı koluna yerleştir.<br>
               6. Elini kapat.<br>
               7. Kapıyı çek.<br>
               8. Suyu bul.<br>
               9. Suyu bulamadın mı? Adım 8’e devam et.<br>
               10. Suya elini uzat<br>
            ...<br>
            Görüldüğü gibi yapmak istediğimiz her iş adım adım, sade ve kesin anlaşır olmalıdır. Bu bizim için basit bir uygulama 
         / örnek oldu belki ama daha büyük ve karmaşık yapıları da en küçük basit parçalara bölersek, işlemlerimizi daha anlaşılır hale getirebiliriz.</p>
         <h3 class="baslik">Yaratıcılığımızı Geliştirir</h3>
         <p class="yazi">Tek bir çözüm doğru değildir. Kodlama yaptıkça analitik düşünceniz gelişecek ve önceki yazdığınız kodları beğenmemeye başlayacaksınız. Göreceksiniz ki daha pratik ve anlaşılır kod yazabiliyorsunuz.
              Bu aslında şu demek; Birincisi, sizin çözümünüz aslında kesin ve net değildir fakat şuan işe yarıyor ve bir işi çözüyordur. İkincisi, eğer kodunuzla ya da çözümünüzle sorun yaşıyorsanız,
             bir adım geri atın ve yaptığınız işe göz atın. Karmaşayı ve sorunu görmeye çalışın, göreceksiniz ki daha kolay basit ve temiz bir çözüm daha var…</p>
             
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