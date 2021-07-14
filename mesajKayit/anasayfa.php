<html>
<head>
<title>Uygulama 4</title>
</head>
<style>
body{
    background-color:#79cdcd;
    color:#870009; }
    .mesajkutusu {width: 300; height: 150}
</style>
<body>
<center>
<form action="sayfa.php
" method="post" >
Ad Soyad : <br>
	<input type="text" name="adsoyad" /><br>
E-posta : <br>
	<input type="email" name="mail" /><br>
Mesaj : <br>
	<input type="text" name="mesaj" class="mesajkutusu" /> <br>
	<input type="submit" name="submit" value="Gönder" >
</form>
<br>
<?php include ("mesaj.txt");  ?>
</body>
</html>
