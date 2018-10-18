<!DOCTYPE HTML>
<html lang="tr">
<?php session_start(); ?>
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>

    <div class="container well">

    <?php
    if (!isset($_SESSION["kullanici"])) {
        echo '<div class="alert alert-danger" style="margin-top:50px;"><strong>Opps!</strong> Bu sayfayı görüntüleyebilmek için giriş yapmalısınız</div>';
        die();
    }
    ?>

    <h3><a href="kullanici_sayfasi.php"><< Anasayfa'ya Dön</a></h3>

    <div class="container" style="margin-top:50px;">
        <div class="row">
            <ol>
                <?php
				$sorgu="SELECT * FROM kullanicilar1";
				$sonuc=mysql_query($sorgu,$connection);
                /*foreach ($rows AS $row) {
                    echo '<li><a href="uye.php?id=' . $row->id . '">' . $row->username . '</a></li>';
                }*/
				while($row=mysql_fetch_array($sonuc)){
					echo "<li>".$row["kullanici_ad"]."</br>";
				}
                ?>
				
            </ol>
        </div>
    </div>

</body>
</html>