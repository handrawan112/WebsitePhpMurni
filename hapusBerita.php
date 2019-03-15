<?php
require("koneksiPosting.php");
$juduls=mysql_real_escape_string($_GET['id']);
$paths="postingan/$juduls.php";
$delFile=unlink($paths);
if($delFile){
$lihatDir=mysql_query("SELECT * FROM postinganX WHERE judul='$juduls' ");
$pilih=mysql_fetch_array($lihatDir);
$dirGambar=$pilih['lokasiGambar'];
$delGambar=unlink($dirGambar);
if($delGambar){
$hapusPostingan=mysql_query("DELETE FROM postinganX WHERE judul='$juduls' ");
if($hapusPostingan){
$cekKomen=mysql_query("SELECT * FROM komenX WHERE judulFile='$juduls' ");
$jKomen=mysql_num_rows($cekKomen);
if($jKomen!=0){
$hapusKomen=mysql_query("DELETE FROM komenX WHERE judulFile='$juduls' ");
if($hapusKomen){
header("location:admin.php");
}
}else{
header("location:admin.php");
}
}else{
echo "$juduls postingan gagal dihapus ";
}
}else{
echo "File $dirGambar gambar gagal dihapus";
}
}else{
echo "File php gagal dihapus";
}

?>
