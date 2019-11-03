<html>
<head>
<title>Cari Data Mahasiswa</title>
</head>
<body>
    <h1>Delete Data</h1>
    <form action="" method="post">
        <select name="kolom">
            <option value="nrp">NRP</option>
        </select>
        NRP : 
        <input type ="text" type ="text" name="cari">
        <input type ="submit" value="Delete Data" >
    </form>

    <?php
            
            $conn=mysqli_connect("localhost","root","");
            mysqli_select_db($conn,"php");

            $nrp   = $_GET['nrp'];

            $query="DELETE from mahasiswa where nrp='$nrp'";
            mysqli_query($conn, $query);

    ?>
</body>
</html>