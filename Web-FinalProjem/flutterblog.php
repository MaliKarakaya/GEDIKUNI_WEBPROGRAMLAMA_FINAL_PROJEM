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

    <title>MALI++ Fluter</title>
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
<section class="banner" id="banner" style="background-image:url(images/flutterbanner1.jpg);" >
   
   <div class="kutu">
       <h3>Flutter</h3>
       <input type="button" class="bannerbtn"  id="res" value="Değiştir" onclick="document.getElementById('banner').style.backgroundImage='url(images/flutterbanner2.jpg)'"></input>
    
   </div>
</section>
<section class="container">
    <div class="blogkutu">
        <img src="images/flutter1.png" alt="" class="image">
        <h3 class="baslik">Flutter</h3>
        <p class="yazi">Flutter, Google tarafından oluşturulan açık kaynaklı bir UI yazılım geliştirme kitidir. Android, iOS, Windows, Mac, 
            Linux ve web için uygulamalar geliştirmek için kullanılıyor.[1] Flutter'ın ilk sürümü "Sky" olarak biliniyordu ve Android işletim sisteminde çalışıyordu.
             Flutter ilk olarak 2015 Dart geliştirici zirvesinde tanıtıldı. Tanıtımında sabit bir şekilde saniyede 120 FPS çalışan uygulamalar geliştirilebileceği belirtildi.
             [2] 4 Aralık 2018'de Flutter 1.0, Flutter Live etkinliğinde ilk "kararlı sürüm" olarak yayımlandı. 11 Aralık 2019'da Flutter Interactive etkinliğinde Flutter 1.12 yayımlandı.[3]
             6 Mayıs 2020'de, 2.8 sürümündeki Dart SDK ve 1.17.0 sürümündeki Flutter, Metal API'a desteğin eklendiği ve iOS cihazlarındaki (yaklaşık %50) ana widget'larındaki performansı 
             büyük ölçüde artırdı. Ağ etkinlikleri izleme aracı ve çok daha fazlası eklendi.</p>


        <h3 class="baslik">Framework Mimarisi</h3>
        <p class="yazi">Flutter'ın ana bileşenleri şunlardır:
            <ul class="yazi" style="padding-left: 20px;">
                    
                <li>Dart platformu</li>
                <li>Flutter motoru</li>
                <li>Temel kütüphane</li>
                <li>Tasarıma özel widget'lar</li>
            </ul>
        </p>
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
           <form action="flutterblog.php" method="POST">
            
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

                 $sorgu=" INSERT INTO flutteryorum (yorum_yazan , yorum_icerik) VALUES('$yazan','$icerik')";

                 $sonuc=mysqli_query($baglanti,$sorgu);
                    if ($sorgu) {
                        echo "Yorumunuz Alındı";  
                                         
                         }
                          else {
                           echo "Yorumunuz Hatalı";
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

              $yorumgetir = $db->prepare("SELECT * FROM flutteryorum order by yorum_tarih DESC ");$yorumgetir->execute();
              while ($flutteryorum = $yorumgetir->fetch(PDO::FETCH_ASSOC)) {
               echo "<div  style='border:1px dashed  #e67e22;'>";
               echo "<h3 style='font-size:20px; color:#474747 position: absolute;'>"."<img src='images/kullanici.png' style=' margin:5px; width:30px; height:30px;'>".$flutteryorum["yorum_yazan"]."</h3>"."</br>";
               echo "<p class='yazi'style='margin:5px;' >"." ".$flutteryorum["yorum_icerik"]."</p>"."<hr>"."</br>";
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