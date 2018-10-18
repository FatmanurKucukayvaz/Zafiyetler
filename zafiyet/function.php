<?php

	function sorgu_dogrulama($sonuc){
		if(!$sonuc){
			die("Veritabani Sorgu Hatasi: ".mysql_error());
		}
	}
	function baglanti_kapat(){
		global $connection;
		mysql_close($connection);
	}
	function konulari_getir(){
			global $connection;
			$limit = 5;
		
			$sorgu="SELECT * FROM duyurular ORDER BY duyuru_id DESC LIMIT $limit ";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	
	function tum_konulari_getir(){
			global $connection;
			
		
			$sorgu="SELECT * FROM duyurular ";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	function bolum_konulari_getir(){
			global $connection;
			$limit=5;
			$sorgu="SELECT * FROM bolum_duyurulari ORDER BY duyuru_id DESC LIMIT $limit";
			$result_bolum=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result_bolum);
			return $result_bolum;
	}
	function tum_bolum_konulari_getir(){
			global $connection;
			
			$sorgu="SELECT * FROM bolum_duyurulari";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	
	function etkinlik_konulari_getir(){
			global $connection;
			$limit=2;
			$sorgu="SELECT * FROM etkinlikler ORDER BY etkinlik_id ASC LIMIT $limit";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	function tum_etkinlik_konulari_getir(){
			global $connection;
			
			$sorgu="SELECT * FROM etkinlikler";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	function mysql_prep($value){
		$value=mysql_real_escape_string($value);
		return $value;
	}
	function kisinin_etkinlikleri(){
			global $connection;
			$kullanici=$_SESSION['kullanici'];
			$sorgu="SELECT * FROM etkinlikler WHERE isim='$kullanici'";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	function kisinin_bolum_duy(){
			global $connection;
			$kullanici=$_SESSION['kullanici'];
			$sorgu="SELECT * FROM bolum_duyurulari WHERE isim='$kullanici'";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	function kisinin_genel_duy(){
			global $connection;
			$kullanici=$_SESSION['kullanici'];
			$sorgu="SELECT * FROM duyurular WHERE isim='$kullanici'";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}
	function kisinin_slider(){
			global $connection;
			$kullanici=$_SESSION['kullanici'];
			$sorgu="SELECT * FROM slider WHERE isim='$kullanici'";
			$result=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result);
			return $result;
	}

	
	function konulari_getir2(){
			global $connection;
			$sorgu="SELECT * FROM duyurular WHERE duyuru_id = '".$_POST["employee_id"]."'";
			$result2=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result2);
			return $result2;
	}
	
	function konulari_getir3(){
			global $connection;
			$sorgu="SELECT * FROM bolum_duyurulari WHERE duyuru_id = '".$_POST["employee_id1"]."'";
			$result3=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result3);
			return $result3;
	}
	
	function konulari_getir4(){
			global $connection;
			$sorgu="SELECT * FROM etkinlikler WHERE etkinlik_id = '".$_POST["employee_id2"]."'";
			$result4=mysql_query($sorgu,$connection);
			sorgu_dogrulama($result4);
			return $result4;
	}
	
	
	
	
	
	
	
?>






