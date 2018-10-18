<?php
	$connection =@mysql_connect("localhost","root","FaydoFaydo123.");
	if(!$connection){
		die("Veritabanı bağlantı hatası: ".mysql_error());
	}
	$db_select=@mysql_select_db("kou",$connection);
	if(!$db_select){
		die("Veritabanı tablo seçim hatası ".mysql_error());
	}
?>