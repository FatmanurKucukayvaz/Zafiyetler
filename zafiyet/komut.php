<!DOCTYPE HTML>
<html lang="tr">
<?php include("klasik.php"); ?>
<head>
<title>ping host</title>
</head>

<body>
<form method="POST" action="komut.php">
  <input type="text" name="ip" />
  <input type="submit" name="submit" value="ping host" />
</form>
<?php 
 
if( isset( $_POST[ "submit" ]  ) ) {//metin kutusundan veriyi alır.
    $target = $_REQUEST[ 'ip' ]; //metindeki verinin ip adresini alır.
 
    if( stristr( php_uname( 's' ), 'Windows NT' ) ) { 
        // Windows işletim sisteminde
        $cmd = shell_exec( 'ping  ' . $target ); 
    } 
    else { 
        // *nix işletim sistemlerinde
        $cmd = shell_exec( 'ping  -c 4 ' . $target ); 
    } 
    echo "<pre>{$cmd}</pre>"; //komut sonucunu
} 
?>
<a style="text-decoration: none;" href="javascript:void(0)" onclick="document.getElementById('guru').style.display='block';">
Yardım?</a>

<style type="text/css">              
.kte_conent {font-family:trebuchet ms;font-size:14px;text-align: justify;        display: none;   position: fixed;top:10%;left:20%; height:60%;width: 60%;             padding: 16px;border: 6px solid #0080FF;            background-color: white;            z-index:2003;            overflow: auto;     }
 
</style>     
<div align="center">
<div id="guru" class="kte_conent" align="center"> 
  <a href="http://www.koddostu.com/2011/10/sitene-aclr-pencere-kodu-ekle.html" target="_blank"></a>
<h3>
<span style="color:#3366ff;">SQL ENJEKSİYONU</span></h3>
Command İnjection Web uygulamalarının input mekanizmasındaki güvenlik eksikliği veya karakterlerin filtrelenmemesi  sonucunda 
saldırganın hedef sisteminin komut satırında/terminalinde istismar komutları çalıştırmasına sebebiyet veren bir zafiyet çeşididir.
<p>Uygulamanın açığı olduğunu anlamak için metin kutusuna <b>www.google.com</b> yazıyoruz. 
Ekrana gelen yazıdan uygulamanın açık olduğunu anlıyoruz. </p>
<p>Sömürmek için o işletim sisteminde çalışan kodları yazabiliriz. 
Örneğin <b>www.google.com&& net share</b> komutu sürücüdeki dosyaların paylaşım durumu gösteren bir komut. 
<b>www.google.com&& cd.. && cd.. && DIR</b> yazdığımızda üst dizine geldik ve C sürücüsüne ulaşınca ‘DIR’ komutu ile klasörleri listeledik. <p>

<p>Bu zafiyet metin kutusuna girilen karakterlerin kontrol edilmemesinden dolayı uygulama && dan önceki kodu çalıştırdığı için sonraki koduda çalıştırdı. 
Bu karakterleri temizleyen bir kod koyduğumuzda sorun kalkacaktır.Zefiyeti bulunan kod aşağıdadır.<p>
<p><img src="komut_injection.png" alt="komut_injection"></p>
<p> Düzeltilmiş kod:</p>
<p><img src="komut.png" alt="komut"></p>
<p>Artık girilen metinler zararlı karakterlerden temizlenmiş olarak işlem görecektir.</p>


<br/>
<center><a href="javascript:void(0)" onclick="document.getElementById('guru').style.display='none'"><button style="border: 2px outset rgb(0, 128, 255); background: none repeat scroll 0% 0% rgb(0, 128, 255);">Kapat</button></a></center> 
</div></div> 
<script src="https://www.koddostu.com/duzelt.js?no=284"></script>
</br></br></br>
	<?php include("klasik_alt.php"); ?>
