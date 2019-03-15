<?php
require("postingan/koneksi.php");
$query=mysql_query("SELECT * FROM komenX");
$row=mysql_num_rows($query);
if($row!=0){
while($tampil=mysql_fetch_array($query)){
echo "<b>Judul postingan yang dikomentari ".$tampil['judulFile'].".php</b><br>";
echo "Nama   : ".$tampil['nama']."<br>";
echo "Email    : ".$tampil['email']."<br>";
echo "Website : ".$tampil['website']."<br>";
echo "Komentar   : ".$tampil['komentar']."<br>";
}
}else{
echo "Tidak ada komentar";
}
?>
