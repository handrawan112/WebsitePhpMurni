<?php
require("postingan/koneksi.php");
$dapat=$_GET['judul'];
$komen=mysql_query("SELECT * FROM komenX WHERE judulFile='$dapat' ");
$row=mysql_num_rows($komen);
if($row!=0){
echo "jumlah komen ".$row;
}else{
echo "Tidak ada komen";
}
?>
