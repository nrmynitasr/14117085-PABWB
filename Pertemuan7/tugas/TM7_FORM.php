<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM</title>
</head>
<body>
    <form action="" method="POST" class="form-inline">
    <div class="form-group mb-2">
        Nama : 
        <input type="text" name="nama"><br><br>
        Alamat : 
        <input type="text" name="alamat"><br><br>
        Jenis Kelamin : 
        <input name="jenis_kelamin" type="radio" value="L">Laki-Laki
        <input name="jenis_kelamin" type="radio" value="P">Perempuan
        <br><br>
        Golongan Darah : 
        <select name="golongan_darah">
            <option value="b"> B </option>
            <option value="a"> A </option>
            <option value="o"> O </option>
        </select>
        <br><br>
        Hoby :
        <input type="checkbox" name="hobi[]" value="Makan">Makan <br>
        <input type="checkbox" name="hobi[]" value="Minum">Minum <br>
        <input type="checkbox" name="hobi[]" value="Tidur">Rebahan <br>
        <input type="checkbox" name="hobi[]" value="Browsing">Browsing <br>
        <br><br>
        Keterangan :
        <textarea rows="5" cols="50" name="keterangan"></textarea> 
        <br><br>
    </div>
    <button type="submit" class="btn btn-primary mb-2" name="submit" > Simpan </button>

            
    </form>
</body>
</html>