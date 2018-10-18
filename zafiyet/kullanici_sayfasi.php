<!DOCTYPE HTML>
<html lang="tr">
<?php session_start(); ?>
<?php include("connection.php"); ?>
<?php include("function.php"); ?>
<head>

	<meta charset="UTF-8">
	<title>  Kocaeli Üniversitesi | Bilgisayar Mühendisliği </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="kullanici_sayfasi.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>


	<style type="text/css">

	p {
		margin:30px;
	}
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

	@media (min-width : 768px) { /* Eğer responsive yazıyorsak mobil
                                boyuttayken bu işlemi yapmamıza
                                gerek yok. Bu nedenle, CSS'imize
                                tarayıcı genişliği 768px veya daha
                                büyükse çalışmasını söylüyoruz. */
  .dropdown:hover .dropdown-menu {
    display: block;
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

<?php echo "<h1>".$_SESSION['kullanici']." hoşgeldiniz.</h1>"?>
<div class="container well">
			<ul>
				<?php
				if(isset($_SESSION['kullanici'])){
				?>
				<li><a href="uyeler.php">Diğer Üyeleri Gör</a></li>
				<li><a href="cikisyap.php">Çıkış Yap</a></li>
				<?php
				}else{
				?>
				<li><a href="xss.php">Giriş Yap</a></li>
				<li><a href="uyeol.php">Üye Ol</a></li>
				<?php
				}		
				?>
			</ul>
		</div>


<?php include("klasik_alt.php"); ?>