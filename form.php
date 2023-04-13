<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>element form</title>
</head>
<body>
    <h2>Isi Formulir</h2>
    <form method="POST" action="hasil.php">
     <table rules="rows">
  <tr>
     <td>Nama</td>
     <td><input type="text" name="nama" placeholder="Masukan Nama" style="width:97%;"></td>
</tr>
<tr>
    <td>Nomor Induk Mahasiswa</td>
    <td><input type="text" name="nim" placeholder="Masukan Nim" style="width:97%;"></td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td><input type="date" name="tgllahir"></td>
</tr>
<tr>
    <td>Jenis Kelamin</td>
    <td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki
    <input type="radio" name="jk" value="Perempuan">perempuan</td>
</tr>
<tr>
    <td>Foto Profil</td>
    <td><input type="file" name="foto" accept="image/*"></td>
</tr>
<tr>
    <td>Angkatan Mahasiswa</td>
    <td><select name="angkatan_mahasiswa" id="">
        <option value="">Pilih</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
</select></td>
</tr>
<tr>
    <td>Hobi</td>
    <td><input type="checkbox" name="check1" value="Olah Raga">Bola
    <input type="checkbox" name="check1" value="Traveling">Traveling
    <input type="checkbox" name="check1" value="Musik">Musik</td>
</tr>
</table>
<br>
<td><button type="submit" name="submit" value="submit">kirim</td>
</tr>
</table>
</form>
</body>
</html>