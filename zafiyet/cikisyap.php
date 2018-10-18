<!DOCTYPE HTML>
<html lang="tr">
<?php include("klasik.php"); ?>
<?php include("connection.php"); ?>
<?php
session_destroy();
header("Location: xss.php");
?>
</body>
</html>