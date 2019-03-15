<?php
$con=@mysql_connect("localhost:10000","root","") or die("Gagal konek ke localhost");
$pilDb=mysql_select_db("Handrawan") or die("Gagal konek ke database Handrawan");

?>