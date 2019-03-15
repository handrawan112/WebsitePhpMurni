<?php
$cek=false;
$koneksi=@mysql_connect("localhost:10000","root","") or die("Gagal menghubungkan ke localhost:10000");
$pilihDB=mysql_select_db("Handrawan");
if($pilihDB){
$tabel=mysql_query("CREATE TABLE postinganX( judul varchar(255) NOT NULL, kategori varchar(20) NOT NULL, tanggal varchar(100) NOT NULL, isi text NOT NULL )");
}else{
$db=mysql_query("CREATE DATABASE Handrawan");
if(!$cek){
header("location:index.php");
}
}
?>
