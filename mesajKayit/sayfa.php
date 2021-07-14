<html>
<head>
<title>Uygulama 4</title>
</head>
<style>
body{
    background-color:darkgrey;
    color:##79cdcd; }
    .mesajkutusu {width: 300; height: 150}
</style>
<body>
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href=anasayfa.php>Geri</a>"; 
?>
<form action="">
<br>
<b>!!!</b><br>
<i>Boş veri girdiyseniz lüften geri dönün!</i> <br>

<center>

<?php
if(!empty($_POST["adsoyad"])&&($_POST["mail"])&&($_POST["mesaj"])){
$adsoyad = $_POST["adsoyad"];

$mail = $_POST["mail"];

$mesaj = $_POST["mesaj"];



//if($adsoyad=="" or $mesaj=="" or $mail=="") {

//die( "<center><b>Ad Soyad, Mesaj ve E-Mail alanlarini bos birakmayiniz!</b><br><a href=anasayfa.php>Anasayfa</a></center>");

//}

echo "<center><b>Mesajiniz Basariyla eklenmistir.</b><br><br><a href=anasayfa.php>Anasayfaya Dön</a></center>";

$dbdosya = "mesaj.txt";
$dosya = fopen ($dbdosya, 'a') or die ("<b>Dosyaya erisilemedi!</b><br>");
$tarih = date("Y-m-d");
$goster = "   
⚫ Tarih: ".$tarih." <br> Yazan: $adsoyad <br> E-Mail:$mail <br> Mesaj: $mesaj <br> <hr>";   
fwrite ($dosya, $goster) ;

fclose ($dosya); 
}
?>
</center>
</body>
</html>