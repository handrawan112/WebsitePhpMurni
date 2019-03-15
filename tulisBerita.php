<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
<form method="post" enctype="multipart/form-data" action="posting.php">
<table>
<tr>
<td>Judul postingan</td>
<td><input type="text" name="judulP" class="inputG"></td>
</tr>
<tr>
<td>Upload Gambar </td>
<td><input type="file" name="kirimGambar"></td>
</tr>
<tr>
<td>Kategori</td>
<td><select name="kategoriP">
<option>Kategori</option>
<option>Teknologi</option>
<option>Sains</option>
<option>Sosial</option>
</select></td>
</tr>
<tr>
<td>Isi Postingan</td>
<td><textarea name="isiP" cols="25" rows="10" onkeyup="hK(this.value,'#datas')"></textarea></td>
</tr>
<tr>
<td><div id="datas">0</div> </td>
<td>Kata</td>
</tr>
<tr>
<td><input type="submit" name="submit" value="Publikasi"></td>
<td><input type="reset" name="reset" value="Reset"></td>
</tr>
</table>
</form>
<script src="js/program.js"></script>
