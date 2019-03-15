<!DOCTYPE HTML>
<html>
<head>
<title>Halaman web</title>
<meta name="keyword" content="Yay">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="halamans.css" rel="stylesheet">
</head>
<body>
<header>
<h1 class="judulH">Yay</h1>
<section>
<div>Kategori  : <code class="kategoriH">Sosial</code></div>
<div>Terbit  : <code class="tanggalH">March 15 2019 17:51:47</code></div>
<br>
</header>
<img src="gambar/+62 813-1425-4420‬ 20190217_003512.jpg" width="100%" height="100%"><br><br>
<section class="isiH">Wawan</section>
<section class="kolomKomentar">
<h2>Komentar</h2>
<div>
<?php
require("koneksi.php");
$query=mysql_query("SELECT * FROM komenX WHERE judulFile= 'Yay'  ");
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
<option>Yay</option>
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
