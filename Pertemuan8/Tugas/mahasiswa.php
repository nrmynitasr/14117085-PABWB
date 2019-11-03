<html>
<head>
<title>Mahasiswa</title>
</head>
<body>
<h1>TAMBAH DATA</h1>
    <form action="prosesTambahData.php" method="post">
        NRP : <input type="text" name="nrp" size="25" maxlength="50"> <br> <br>
        Nama : <input type="text" name="nama" size="25" maxlength="50"> <br> <br>
        Foto : <input type="file" value="value"> <br><br>
        Jurusan : <select name="jurusan" id="">
                        <option value="TL">Telekomunikasi</option>
                        <option value="IF">T. Informatika</option>
                        <option value="EL">T. Elektro</option>
                  </select>
                  <br><br>
        <input type="submit" value="Simpan">
       
    </form>
</body>
</html>