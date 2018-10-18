<!DOCTYPE HTML>
<html lang="tr">
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>
<head><title>SQL Injection</title>

</head>
 <body onload="document.getElementById('user_name').focus();" >
 <form name="login_form" id="login_form" method="get" action="login.php">
  <table border=0 align="center" >
   <tr>
    <td colspan=5 align="center" ><font face="Century Schoolbook L" > Giriş Sayfası</font></td>
   </tr>
   <tr>
    <td> Kullanıcı Adı:</td><td> <input type="text" size="13" id="user_name" name="user_name" value=""></td>
   </tr>
   <tr>
    <td> Şifre: </td><td> <input type="password" size="13" id="pass_word" name="pass_word" value=""></td>
   </tr>
   <tr>
    <td colspan=2 align="center"><input type="submit" name="submit" value="Login"> </div></td>
   </tr>
  </table>
 </form>
 
 
 
 

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
Web uygulamalarında bir çok işlem için kullanıcıdan alınan veri ile dinamik SQL cümlecikleri oluşturulur. 
Mesela “SELECT * FROM Products” örnek SQL cümleciği basit şekilde veritabanından web uygulamasına tüm ürünleri döndürecektir. 
Bu SQL cümlecikleri oluşturulurken araya sıkıştırılan herhangi bir meta-karakter SQL Injection’ a neden olabilir.
<p>Uygulamayı sömürmek için kullanıcı adı kutusuna ve şifre kutusuna <b>'OR'1'='1</b> yazın. 
Giriş başarılı dediğini göreceksiniz. Bunun anlamı “Kullanıcılar tablosunda yer alan kullanıcı ve şifre alanları boş olan kayıtları getir.” 
Bu açıklığın nedeni kullanıcı ya da istemci tarafından emredilen işlemleri doğrulayıp kontrol etmeden, incelemeden yapıyor oluşudur. 
Şu an ki sorgu şöyledir:</p>
<p><img src="sql_injection.png" alt="sql_injection"></p>
Bunun yerine veriler bu şekilde alınırsa:
<p><img src="sql.png" alt="sql"></p>
Meta karakterlerden arındırılmış olur. Böylece sorun düzelir.

<br/>
<center><a href="javascript:void(0)" onclick="document.getElementById('guru').style.display='none'"><button style="border: 2px outset rgb(0, 128, 255); background: none repeat scroll 0% 0% rgb(0, 128, 255);">Kapat</button></a></center> 
</div></div> 
<script src="https://www.koddostu.com/duzelt.js?no=284"></script>
 
 
 
 
 
 </br></br>
	<?php include("klasik_alt.php"); ?>
