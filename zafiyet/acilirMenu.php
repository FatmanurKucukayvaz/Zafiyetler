<!DOCTYPE HTML>
<html lang="tr">
<?php include("connection.php"); ?>
<?php include("function.php"); ?>




<head>
<link rel="stylesheet" href="haber.css">
<link rel="stylesheet" href="stil.css">
	<meta charset="UTF-8">
	<title> Kocaeli Üniversitesi Web Zayıflıkları </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="slider.css">
	<link rel="stylesheet" type="text/css" href="kstil.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="haber.css"/>
	<style type="text/css">

	img{
	float:left;
	}
	.responsive-img {
	max-height:90px;
	max-width:90px;
	}
	h2{
		text-align:center;
		margin:40px 20px 20px 20px;
		font-family:Open Sans,sans-serif;
		color:#314c5f;
	}
	p {
		font-size: 15px;
	}

	@media (min-width : 768px) { /* Eğer responsive yazıyorsak mobil
                                boyuttayken bu işlemi yapmamıza
                                gerek yok. Bu nedenle, CSS'imize
                                tarayıcı genişliği 768px veya daha
                                büyükse çalışmasını söylüyoruz. */
  	.dropdown:hover .dropdown-menu {
   		 display: block;
  	}
  
	}
	.carousel-inner > .item > img,
  	.carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  	}
	
	</style>

</head>

<body>

<div class="navbar navbar-inverse navbar-static-top" id="ana_baslik">
	<div class="container" id="banner">
		<img class="responsive-img" src="kocaeli-universitesi.png" width="100%" height="100%" />
  		<h2 id="genel_baslik"> KOCAELİ ÜNİVERSİTESİ WEB ZAYIFLIKLARI <small></small></h2>

		<button class="navbar-toggle" data-toggle="collapse" data-target=".acKapa"><div class="icon-bar"></div></button>
		<a href="acilirMenu.php" class="navbar-brand">Anasayfa</a>
		<div class="collapse navbar-collapse acKapa">
			<ul class="nav navbar-nav">
				<li><a href="kurulum_dokumantasyonu.php">Kurulum Dökümantasyonu</a></li>
				<li><a href="sql_injection.php">SQL Enjeksiyonu</a></li>
				<li><a href="xss.php">XSS</a></li>
				<li><a href="komut.php">Komut Enjeksiyonu</a></li>

			</ul>
		</div>
	</div>
</div>
<div class="kutu">
<h2> ZAYIF WEB UYGULAMASI </h2><hr>
<p>Kasıtlı olarak bırakılmış güvenlik zafiyetlerini (vulnerability) içeren zayıf (vulnerable) web uygulamaları, 
uygulamalı siber güvenlik eğitimlerinde önemli bir rol oynamaktadır. Öğrenciler, yasal olmayan bir şekilde gerçek 
sistemlere saldırmadan bu tip uygulamalar üzerinde öğrendiklerini tecrübe ederek kendilerini geliştirebilmektedirler.
Farklı programlama dillerinde (PHP, ASP, C# .NET, Node.js, PERL, Java, Ruby on Rails, Python, C++, ColdFusion vb.) 
yazılmış vulnerable web uygulamaları bulunmaktadır. Fakat, Türkçe yazılmış ve iyi bir şekilde dokümantasyonu yapılmış 
vulnerable web uygulamaları yok denecek kadar azdır. 
Bu projenin amacı ülkemizdeki siber güvenlik derslerinde kullanılabilecek bir düzeyde vulnerable web uygulamaları geliştirmektir. 
Bunun için sadece üzerinde zafiyetler bulunan bir web uygulaması geliştirmek yeterli değildir, bu uygulamadaki zafiyetlerin neden 
kaynaklandığının ve bu zafiyetlerin nasıl sömürüleceğinin (exploitation) de açık ve anlaşılır bir şekilde dokümantasyonun yapılması gereklidir.
</p>
</div></br></br>

		
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>
<div class="row">
			<div class="panel panel-default col-md-12">
				<div class="panel-footer">
				  <p>Adres: KOÜ Mühendislik Fakültesi (B Blok) Bilgisayar Mühendisliği Umuttepe Yerleşkesi 41380 Kocaeli<br/>
					Tel: +90 (262) 303 35 60<br/>
					E-Posta: bilgisayar@kocaeli.edu.tr<br/> 
					Web: http://bilgisayar.kocaeli.edu.tr 
                    <br>
                  </p>
			  </div>
			</div>
		</div>
</div>


</body>
</html>
