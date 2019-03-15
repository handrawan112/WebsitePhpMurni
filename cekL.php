<!DOCTYPE HTML>
<html>
<head>
<title>L091N</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
<link href="css/berandaLogin.css" rel="stylesheet">
</head>
<body>
<form method="post" action="cekL.php">
<table class="judul" border="1">
<tr>
<th>Halaman Login</th>
</tr>
</table>
<table border="1" class="form">
<tr>
<td>Username : </td>
<td><input type="text" name="userX"></td>
</tr>
<tr>
<td>Password : </td>
<td><input type="password" name="passX"></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Kirim"></td>
<td><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
<div class="logKet">
<?php
require("koneksiLogin.php");
session_start();
$userX=mysql_real_escape_string($_POST['userX']);
$passX=mysql_real_escape_string($_POST['passX']);
$ceks=$_POST['submit'];
if(isset($ceks)){
$query=mysql_query("SELECT * FROM userXY WHERE username='$userX' AND password=md5('$passX')");
$cekS=mysql_num_rows($query);
if($cekS!=0){
$_SESSION['userNames']=$userX;
$_SESSION['passWords']=$passX;
header("location:admin.php");
}else{
if($userX!=""&&$passX!=""){
echo "Username atau Password salah";
echo "<script>var x=document.querySelector('.logKet');x.style.background='red';</script>";
}
}
}
?>
</div>
</body>
</html>
