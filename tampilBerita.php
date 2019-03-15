<style>
.bacaB {
text-decoration:none;
padding:2px 4px;
background:green;
border-radius:5px;
color:white;
}
</style>
<?php
require("koneksiPosting.php");
$query=mysql_query("SELECT * FROM postinganX");
if(mysql_num_rows($query)==0){
echo "Tidak Ada Postingan";
}else{
while($data=mysql_fetch_array($query)){
$juduld=$data['judul'];
echo "<h1>".$juduld."</h1>";
echo "<pre>".$data['kategori']." ".$data['tanggal']."</pre>";
echo "<img src=' ".$data['lokasiGambar']." ' width='200' height='200' ><div>".substr($data['isi'],0,112)." ..</div> ";
echo "  <a href='hapusBerita.php?id=$juduld' class='bacaB'>Hapus</a>  ";
echo "<a class='bacaB' href='postingan/$juduld.php'> Read more </a>  ";
echo "<br> <br> <br>";
}
}
?>
