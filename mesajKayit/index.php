<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dilek ve Şikayetler</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

<style>
body{
    background-color:darkgray;
 }
.mesajkutusu {
   width:300;
   height:150; 
}
</style>
<body>
<center>
    <br>
    <h1 class="page-section-heading text-center text-secondary">Dilek ve Şikayet</h1>
<form action="" method="post" >
Ad Soyad : <br>
	<input type="text" name="adsoyad" placeholder="Adınızı soyadınızı girin .." required/><br>

E-posta : <br>
	<input type="email" name="mail" required placeholder="E-posta adresinizi girin .."/><br>
Mesaj : <br>
<textarea name="mesaj" rows="10" cols="30" wrap="soft" required placeholder="Dilek ve şikayetinizi girin .."></textarea> <br>
<br>
	<input type="submit" name="submit" class=btn-danger value="Gönder" onclick="uyari()"  />
</form>
<br>
<?php
if(!empty($_POST["adsoyad"])&&($_POST["mail"])&&($_POST["mesaj"])){
$adsoyad = $_POST["adsoyad"];

$mail = $_POST["mail"];

$mesaj = $_POST["mesaj"];



//if($adsoyad=="" or $mesaj=="" or $mail=="") {

//die( "<center><b>Ad Soyad, Mesaj ve E-Mail alanlarini bos birakmayiniz!</b><br><a href=index.php>Anasayfa</a></center>");

//}

//echo "<center><b>Mesajiniz Basariyla eklenmistir.</b><br><br><a href=index.php>Anasayfaya Dön</a></center>";

$dbdosya = "mesaj.txt";
$dosya = fopen ($dbdosya, 'a') or die ("<b>Dosyaya erisilemedi!</b><br>");
$tarih = date("Y-m-d");
$goster = "   
⚫ Tarih: ".$tarih." <br> Yazan: $adsoyad <br> E-Mail:$mail <br> Mesaj: $mesaj <br> <hr>";   
fwrite ($dosya, $goster) ;

fclose ($dosya); 
}
?>

<script type="text/javascript">
 
   function uyari(){
       alert("Mesajınız Gönderildi. ");
   }
 
</script>
</center>
</body>
</html>

   <!-- Bootstrap core JS-->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
