<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<div>
<?php
require("koneksiPosting.php");
$judulP=$_POST['judulP'];
$Pjudul=" '$judulP' ";
$kategoriP=$_POST['kategoriP'];
$h=date("H")+6;
if($h>=24){
$h=$h-24;
}
$tanggal=date("F d Y ".$h.":i:s");
$isiP=$_POST['isiP'];
$lokF="postingan/gambar/";
$lokF=$lokF.basename($_FILES['kirimGambar']['name']);
$Flok="gambar/";
$Flok=$Flok.basename($_FILES['kirimGambar']['name']);
$paths="postingan/".$judulP.".php";
if(file_exists($paths)){
echo "File sudah ada";
}else{
if(!empty($_FILES['kirimGambar'])){
if(move_uploaded_file($_FILES['kirimGambar']['tmp_name'],$lokF)){
$cFile=fopen("postingan/".$judulP.".php","w");
$was='<!DOCTYPE HTML>
<html>
<head>
<title>Halaman web</title>
<meta name="keyword" content="'.$judulP.'">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="halamans.css" rel="stylesheet">
</head>
<body>
<header>
<h1 class="judulH">'.$judulP.'</h1>
<section>
<div>Kategori  : <code class="kategoriH">'.$kategoriP.'</code></div>
<div>Terbit  : <code class="tanggalH">'.$tanggal.'</code></div>
<br>
</header>
<img src="'.$Flok.'" width="100%" height="100%"><br><br>
<section class="isiH">'.$isiP.'</section>
<section class="kolomKomentar">
<h2>Komentar</h2>
<div>
<?php
require("koneksi.php");
$query=mysql_query("SELECT * FROM komenX WHERE judulFile='.$Pjudul.' ");
$row=mysql_num_rows($query);
if($row!=0){
while($data=mysql_fetch_array($query)){
echo "Komentar dari   :  ".$data["nama"]."<br>";
echo $data["komentar"]."<br>";
echo "<br>";
}
}else{
echo "Komentar tidak ada";
}
?>
</div>
<form method="post" action="komen.php">
<h3>Isi Komentar</h3>
<table>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Website  </td>
<td><input type="text" name="website"></td>
</tr>
<tr>
<td>Email  </td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Komentar  </td>
<td><textarea cols="25" rows="5" name="komentar"></textarea></td>
</tr>
<tr style="display:none">
<td>Judul File</td>
<td><select name="judulX">
<option>'.$judulP.'</option>
</select></td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Post"></td>
<td><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
</div>
</section>
</body>
<script src="ajax.js"></script>
</html>
';
$dFile=fopen("halaman.php","r");
fwrite($cFile,$was);
if($cFile){
if(isset($judulP)&&isset($kategoriP)&&isset($isiP)){
$query=mysql_query("INSERT INTO postinganX(judul,kategori,tanggal,isi,lokasiGambar) VALUES('$judulP','$kategoriP','$tanggal','$isiP','$lokF')") or die(mysql_error());
if($query){
header("location:admin.php");
}else{
echo "Berita gagal dipublikasi";
}
}
}else{
echo "File gagal dibuat";
}

}else{
echo "File gagal diupload";
}
}
}
?>
</div>
