<?php
include("baglanti.php");
$username_err="";
$parola_err="";
if(isset($_POST["giris"])){
	if (empty($_POST["kullaniciadi"])) {
	$username_err="Kullanıcı Adı Boş Geçilemez";
}
else{
	$username=$_POST["kullaniciadi"];
}
if (empty($_POST["parola"])) {
	$parola_err="Parola Boş Geçlemez";
}
else{
	$parola=$_POST["parola"];
}
	if (isset($username) && isset($parola)) {
		
	$secim="SELECT * FROM kullanicilar WHERE kullanici_adi = '$username'";
	$calistir=mysqli_query($baglanti,$secim);
	$kayitsayisi=mysqli_num_rows($calistir);
	if ($kayitsayisi>0){
		$ilgilikayit=mysqli_fetch_assoc($calistir);
		$lisifre=$ilgilikayit["parola"];
		if ($lisifre  == $parola) {
			session_start();
			$_SESSION["kullanici_adi"]=$ilgilikayit["kullanici_adi"];
			header("location:profile.php");
		}
		else{
			$parola_err="Parola Yanlış !!!";
		}
	}
	else{
		 $username_err="Kullanıcı Adı Yalnış !!!";
	}
	
	

	mysqli_close($baglanti);
	}
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="images/logo.png" rel="icon">
    <link href="css/haricicss.css" rel="stylesheet">

    <title>MALI++ Oturum Aç</title>
</head>
<body style="background-image:url(images/oturumekran.jpg) ; background-repeat: no-repeat; background-position:  center center; background-attachment: fixed; background-size: cover;">
    <div id="oturumac">
        <form action="oturumac.php" method="POST">
            <img src="images/logo.png" style="width:200px;"/>
            <input class="oturuminput" type="text" name="kullaniciadi" placeholder="kullanıcı adı" required maxlength="12"  /> 
            
            <input class="oturuminput" type="password" name="parola" placeholder="şifrenizi giriniz"/>
            <input class="oturumbtn" type="submit" name="giris" value="Oturum Aç" />
            
        </form>
        <a href="kayitol.php" style="color:#e67e22;">Kayit OL</a>
    </br></br>
        <label><?php
                    echo "<h1 style='color:DC143C;'>".$username_err."</h1>";
                    echo "<h1 style='color:DC143C;'>".$parola_err."</h1>";
    ?></label>
    </div>

</body>
</html>