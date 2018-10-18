<!DOCTYPE HTML>
<html lang="tr">
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>
<?php
	$query="SELECT * FROM kullanicilar1 WHERE kullanici_ad='".$_GET['user_name']."' and sifre='".$_GET['pass_word']."';";;
	//kullanıcı adı ve parola GET methodu ile kontrol edilmeden olarak metin kutularından çekilir.
	$sonuc=mysql_query($query,$connection);//Gelen sorguda meta karakterler bulunuyorsa sorgu çalıştığında sonuç verecektir.
	while($row=mysql_fetch_array($sonuc)){
		echo " <meta http-equiv='refresh' content='1;URL=girisyapildi.php'> ";
	}
?>
<?php include("klasik_alt.php"); ?>
	
	
