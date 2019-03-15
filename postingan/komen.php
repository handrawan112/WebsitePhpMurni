<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<?php
$con=@mysql_connect("localhost:10000","root","") or die("Gagal konek ke localhost");
$pilDb=mysql_select_db("Handrawan") or die("Gagal konek ke database Handrawan");
$nama=$_POST["nama"];
$website=$_POST["website"];
$email=$_POST["email"];
$komentar=$_POST["komentar"];
$judul=$_POST['judulX'];
if(!empty($nama)&&!empty($website)&&!empty($email)&&!empty($komentar)&&!empty($judul)){
$query=mysql_query("INSERT INTO komenX(nama,website,email,komentar,judulFile) VALUES('$nama','$website','$email','$komentar','$judul')");
if($query){
header("location:$judul.php");
}else{
echo "Komentar gagal di tambahkan";
}
}else{
echo "Kolom komentar belum lengkap";
echo $judul;
}
?>
