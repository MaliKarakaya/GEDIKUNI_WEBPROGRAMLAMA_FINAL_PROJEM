<?php
include("baglanti.php");
$username_err="";
$email_err="";
$kaytonay_err="";
$parola_err="";
$parolatkr_err="";
if(isset($_POST['kaydet'])){
	if (empty($_POST["kullaniciadi"])) {
	$username_err="Kullanıcı Adı Boş Geçilemez";
}
elseif (strlen($_POST["kullaniciadi"])<6) {
 $username_err="Kullanıcı en az 6 karekter olmalı";
}

else{
	$username=$_POST["kullaniciadi"];
}
if (empty($_POST["email"])) {
	$email_err="Email Alanı Boş Geçlemez";
}
else{
	$email=$_POST["email"];
}
if (empty($_POST["parola"])) {
	$parola_err="Parola Boş Geçlemez";
}
else{
	$password=$_POST["parola"];
}
if (empty($_POST["parolatkr"])) {
	$parolatkr_err="Parola Tekrar Kısmı Boş Geçilemez.";
}
elseif ($_POST['parola']!=$_POST['parolatkr']) {
	$parolatkr_err="Şifreler Eşleşmyor";
}
else{
	$parolatkr_err=$_POST['parolatkr'];
}
	if (isset($username) && isset($email) && isset($parola)) {
	$ekle="INSERT INTO kullanicilar (kullanici_adi, email , parola) VALUES ('$username','$email','$password')";
	$calistirekle=mysqli_query($baglanti,$ekle);
	if ($calistirekle) {
		$kaytonay_err="Kayıt İşlemi Başarılı";
	}
	else{
		$kayıtonay_err="Kayıt Esnasında Bir Problem Oluştu";
	}
	mysqli_close($baglanti);
	}
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="icon">
    <link href="css/haricicss.css" rel="stylesheet">

    <title>MALI++ Kayıt Ol</title>
</head>
<body style="background-image:url(images/oturumekran.jpg) ; background-repeat: no-repeat; background-position:  center center; background-attachment: fixed; background-size: cover;">

    <div id="oturumac">
        <form action="kayitol.php" method="POST">
            <img src="images/logo.png" style="width:200px;"/>
            <input class="oturuminput" type="text" name="kullaniciadi" placeholder="Kullanıcı Adı" required maxlength="12"  /> 
            <label style="color: red;"><?php
              echo $username_err;
               ?>
               </label>
            <input class="oturuminput" type="email" name="email" placeholder="E-mail Adresinizi Giriniz"/>
            <label style="color: red;"><?php
                echo $email_err;
            ?>
            </label>


            <input class="oturuminput" type="password" name="parola" placeholder="Şifrenizi Giriniz" />
            <label style="color: red;"><?php
              echo $parola_err;
            ?>	
            </label>

             <input class="oturuminput" type="password" name="parolatkr" placeholder="Şifrenizi Tekrar Giriniz" />
            <label style="color: red;">
            </label>


            <input class="oturumbtn" type="submit" name="kaydet" value="Kayıt Ol" />
          <br></br>
            
        </form>
        <a href="oturumac.php"> <input class="oturumbtn" type="submit" value="Oturum AÇ" /> </a>
          <br></br>
            <label>
            	<?php
                    echo $kaytonay_err;
            	?>
            </label>
      
    </div>

</body>
</html>