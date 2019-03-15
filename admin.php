<?php
session_start();
if(isset($_SESSION['userNames'])&&isset($_SESSION['passWords'])){
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Beranda Admin</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<link href="css/berandaAdmin.css" rel="stylesheet">
<nav class="judul tetap">Beranda Admin</nav>
<header class="menu">
<a class="hijau sejajar links" onclick="openTabs(event,'tulisBerita',1)">Tulis berita</a>
<a class="hijau sejajar links" onclick="openTabs(event,'komentar',2)">Komentar</a>
<a class="hijau sejajar links" onclick="openTabs(event,'artikel',3)">Postingan</a>
</header>
</head>
<body>
<section class="bodyContainer">
<section class="container">
<div id="tulisBerita" class="konten">
<h1>Tulis berita</h1>
<div id="dataTB"></div>
</div>
<div id="komentar" class="konten">
<h1>Komentar</h1>
<div id="dataKomen"></div>
</div>
<div id="artikel" class="konten">
<h1>Postingan</h1>
<div id="artikels"></div>
</div>
</section>
</section>
<footer></footer>
<script src="js/program.js"></script>
</body>
</html>
<?php
}else{
header("location:cekL.php");
}
?>
