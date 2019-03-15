<?php
if(!empty($_FILES['kirimGambar'])){
$path="gambar/";
$path=$path.basename($_FILES['kirimGambar']['name']);
if(move_uploaded_file($_FILES['kirimGambar']['tmp_name'])){
echo "File berhasil di upload";
}else{
echo "File gagal di upload";
}

}
?>
