<?php
$cek=false;
$konek=@mysql_connect("localhost:10000","root","") or die("Gagal terhubung ke localhost:10000"); /*Komputer mencoba menghubungkan ke localhost:10000 jika berhasil maka tidak ada pesan Gagal terhubung */
$pilihDB=mysql_select_db("Handrawan");
if($pilihDB){
$tabel=mysql_query("CREATE TABLE userXY( username varchar(255) NOT NULL, password varchar(255) NOT NULL )");
if($tabel){
$bup=mysql_query("INSERT INTO userXY(username,password) VALUES('adminw20',md5('handw20'))");
if($bup){
echo "Silakan login dengan <br>Username : adminw20<br>Password : handw20 1";
}
}
}else{
$db=mysql_query("CREATE DATABASE Handrawan");
if(!$cek){
header("location:index.php");
}
}
/*Komputer mencoba menghubungkan ke database Handrawan jika tidak ada database maka komputer akan membuat databasenya */
?>
