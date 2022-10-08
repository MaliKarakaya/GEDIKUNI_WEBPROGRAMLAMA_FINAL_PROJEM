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

    <title>MALI++ PHP</title>
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
<section class="banner" id="banner" style="background-image:url(images/phpbaner1.jpg);" >
   
   <div class="kutu">
       <h3>PHP</h3>
       <input type="button" class="bannerbtn"  id="res" value="Değiştir" onclick="document.getElementById('banner').style.backgroundImage='url(images/phpbaner2.jpg)'"></input>
    
   </div>
</section>
<section class="container">
    <div class="blogkutu">
        <img src="images/php1.jpg" alt="" class="image">
        <h3 class="baslik">PHP Nedir?</h3>
        <p class="yazi">PHP, 1994 yılında Rasmus Lerdorf'un kişisel ana sayfasını korumak için kullandığı C dilinde birkaç Common Gateway Interface (CGI) programı yazmasıyla başlamıştı.
            Rasmus daha sonra bunları web formlarıyla çalışmak ve veritabanları ile iletişim kurmak için genişletti ve bu uygulamaya "Kişisel Ana Sayfa / Form Yorumlayıcı" veya PHP / FI adını vermiştir.
            PHP (açılımı PHP: Hypertext Preprocessor) geniş bir kitle tarafından kullanılan, HTML içine gömülebilen, nesne yönelimli bir programlama dilidir.
            PHP kodları sunucu tarafında çalıştırılır ve istemci bilgisayara HTML içerik olarak geri döner. 
        </p>
     <h3 class="baslik">PHP Nasıl Kullanılır ? </h3>
        <p class="yazi">PHP yazabilmek için ilk önce bilgisayarınıza yerel sunucu modüllerini yüklemeniz şarttır.
             Bu tür modülleri tek bir pakette barındıran (Apache, MySQL, PhpMyAdmin gibi...) bazı hazır programlar vardır. 
            Örneğin XAMPP ve WAMP Server adlı programlar bu amaçla hazırlanmıştır ve pek çok geliştirici tarafından tercih edilir.
            Eğer PHP ile yazılım geliştiriyorsanız En İyi 8 PHP Framework başlıklı yazımızı okumanızı öneriyoruz.</p>
            <h3 class="baslik">PHP Hangi Veritabanlarını Destekler?</h3>
            <p class="yazi">PHP MySQL ,SQLite, PostGreSQL, SyBase, IBM-DB2, Oracle, Mongo, dBase v.b. Bir çok popüler veritabanını projelerinizde kullabilmenize izin verir.</p>
            
            <img src="images/php2.jpg" alt="" class="image">
            <h3 class="baslik">PHP Kullanımı Neden Bu Kadar Yaygın?</h3>

            <p class="yazi">İnsanlar, programlama dillerini yalnızca yaygın kullanımlarına göre değil, 
                performans, web sitesi güvenliği, dil bağımsızlığı, maliyet etkinliği ve daha pek çok faktör gibi belirli diğer faktörlere göre tercih ederler.
                PHP'nin çok tercih edilen bir programlama dili olmasının bir çok nedeni var,
                <ul class="yazi" style="padding-left: 20px;">
                    
                    <li>Performans</li>
                    <li>Üretim Kolaylığı</li>
                    <li>Destek ve Topluluk</li>
                    <li>Kolay Geliştirme ve Bakım</li>
                    <li>Hata Yakalama ve Yönetme</li>
                    <li>Geniş Kütüphane Desteği</li>
                    <li>Yüksek Güvenlik</li>
                    <li>Çapraz Platform Desteği</li>
                    
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
               <br>
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
           <form action="phpblog.php" method="POST">
            
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

                 $sorgu=" INSERT INTO phpyorum (yorum_yazan , yorum_icerik) VALUES('$yazan','$icerik')";

                 $sonuc=mysqli_query($baglanti,$sorgu);
                    if ($sorgu) {
                        echo "sorgu  çalıştı";  
                                         
                         }
                          else {
                           echo "sorgu   hatalı";
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

                       $yorumgetir = $db->prepare("SELECT * FROM phpyorum order by yorum_tarih DESC ");$yorumgetir->execute();
                       while ($phpyorum = $yorumgetir->fetch(PDO::FETCH_ASSOC)) {
                        echo "<div  style='border:1px dashed  #e67e22;'>";
                        echo "<h3 style='font-size:20px; color:#474747 position: absolute;'>"."<img src='images/kullanici.png' style=' margin:5px; width:30px; height:30px;'>".$phpyorum["yorum_yazan"]."</h3>"."</br>";
                        echo "<p class='yazi'style='margin:5px;' >"." ".$phpyorum["yorum_icerik"]."</p>"."<hr>"."</br>";
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