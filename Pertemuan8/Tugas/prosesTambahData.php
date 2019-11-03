<html>
<head>
<title>Data mahasiswa</title>
</head>
<body>
<h1>Data mahasiswa</h1>
    <?php
        $nrp = $_POST["nrp"];
        $nama = $_POST["nama"];
        $foto = $_POST["foto"];
        $jurusan = $_POST["jurusan"];
        $conn=mysqli_connect ("localhost","root","") or die ("koneksi gagal");
        mysqli_select_db($conn,"php");
        
        echo "NRP : $nrp <br>";
        echo "Nama : $nama <br>";
        echo "Foto : $foto <br>";
        echo "Jurusan : $jurusan <br>";
        $sqlstr="insert into mahasiswa (nrp,nama,ID_Jurusan) values ('$nrp','$nama','$jurusan')";
        $hasil = mysqli_query($conn,$sqlstr);
        
    ?>
</body>
</html>