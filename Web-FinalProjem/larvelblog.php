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

    <title>MALI++ Laravel</title>
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
<section class="banner" id="banner" style="background-image:url(images/larvelbanner1.png);" >
   
   <div class="kutu">
       <h3>LARAVEL</h3>
       <input type="button" class="bannerbtn"  id="res" value="Değiştir" onclick="document.getElementById('banner').style.backgroundImage='url(images/larvelbanner2.png'"></input>
    
   </div>
</section>
<section class="container">
    <div class="blogkutu">
        <img src="images/laravel1.jpg" alt="" class="image">
        <h3 class="baslik">Laravel Nedir?</h3>
        <p class="yazi">Bildiğiniz üzere PHP dilinin içerisinde kullanıcıların işlerini kolaylaştıran ve güvenlik açısından destek sağlayan birçok framework bulunur. 
            ”Web Sanatçılarının PHP Framework’ü” sloganıyla Laravel bu framework yapılarında ilk sıralarda gelir. Web uygulamaları geliştirilirken büyük bir kullanım oranına sahiptir.
            Laravel, yerleşik özellikler aracılığıyla web uygulamaları geliştirmeyi daha kolay ve daha hızlı hale getirmek için tasarlanmış açık kaynaklı bir PHP frameworktür.
            Anlaşılması kolay olan syntax yapısı ile öğrenilmesi kolaydır.
            Laravel ile projelerimizin hazırlanmasını hızlandırıp, çok zaman harcadığınız işlemleri kolayca yapabilirsiniz. Örneğin oturum yönetimi, 
            caching ve kullanıcı doğrulama gibi işlemleri kolayca hazırlayabilirsiniz.
            Açık kaynak kodlu bir framework olan MVC yapısıyla zenginleştirilmiştir. 
            Amatör ve profesyonel web geliştiricileri tarafından kullanılır. 
            Öğrenmek isteyen birisi HTML / CSS ve orta seviyede PHP bilmesi yeterli olacaktır.
             Diğer PHP frameworkler hakkında detaylı bilgi almak için En İyi 8 PHP Framework isimli yazımızı inceleyebillirziniz.</p>
             <img src="images/laravel2.jpeg" alt="" class="image">
             <h3 class="baslik">Laravel Nasıl Çalışır?</h3>
             <p class="yazi">Model", uygulamanızın üzerinde çalıştığı verilerin şeklini temsil eder. 
                 Kullanıcıların yaptığı postların bir listesini içeren bir kullanıcı tablonuz varsa, bu sizin modelinizdir.
                "Controller" bu modelle etkileşime girer. Bir kullanıcı gönderi sayfasını görmek isterse, controller modelle (genellikle sadece veritabanıyla) konuşur ve bilgiyi alır.
                 Kullanıcı yeni bir gönderi yapmak isterse, controller modeli günceller. 
                Controller bu bilgiyi bir "View" oluşturmak için kullanır. View, görüntülenebildiği bir şablondur ve controller tarafından değiştirilebilir.
                 View, uygulamanızın tüm HTML bileşenleridir.</p>
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
   <div class="blogkutu">
        
        <h3 class="baslik">Yorum Yap</h3>
           </br>
           <form action="larvelblog.php" method="POST">
            
        <input type="tex" name="yorumyazan" class="yorumad" placeholder="Ad Soyad" style="float:left; border:2px solid #e67e22;">
    </br>
    </br>
        <textarea name="yorumicerik" placeholder="Yorum yaz.." style="width:500px; height: 250px; border:2px solid #e67e22;"></textarea></br></br>
        <input  class="oturumbtn" type="submit" name="yorum" value="Yorum Yap">
        
        </form>
        <?php
            if (@$_POST['yorum']){
                $yazan=$_POST["yorumyazan"];
                $icerik=$_POST["yorumicerik"];
                if(empty($icerik) && empty($yazan)){
                    echo"Formda boş alan olamaz";
                }
                else{

                 $sorgu=" INSERT INTO larvelyorum (yorum_yazan , yorum_icerik) VALUES('$yazan','$icerik')";

                 $sonuc=mysqli_query($baglanti,$sorgu);
                    if ($sorgu) {
                        echo "Yorumunuz Alındı";  
                                         
                         }
                          else {
                           echo "Yorum Hatalı";
                            }
                
                }
               
            }
            
       

        ?>
        <h3 class="baslik">Yorumlar</h3>
    </br>
    <?php

try{
         $db=new PDO("mysql:host=localhost;dbname=tablo1;charset=utf8",'root','');
       }

      catch(PDOException $e ){
         echo  $e->getMessage();
                   }

              $yorumgetir = $db->prepare("SELECT * FROM larvelyorum order by yorum_tarih DESC ");$yorumgetir->execute();
              while ($larvelyorum = $yorumgetir->fetch(PDO::FETCH_ASSOC)) {
               echo "<div  style='border:1px dashed  #e67e22;'>";
               echo "<h3 style='font-size:20px; color:#474747 position: absolute;'>"."<img src='images/kullanici.png' style=' margin:5px; width:30px; height:30px;'>".$larvelyorum["yorum_yazan"]."</h3>"."</br>";
               echo "<p class='yazi'style='margin:5px;' >"." ".$larvelyorum["yorum_icerik"]."</p>"."<hr>"."</br>";
               echo "</div>";
           }
?>

    </div>

</section>


<section class="footer">
   <div class="lisans">Copyright ©<span>mr.Muhammet Ali Karakaya</span> | 2022 Tüm hakları saklıdır.</div>
</section>
</body>
</html>