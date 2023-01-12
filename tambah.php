<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input Data Siswa</title>
</head>
<body>
    
    <table border = "0" >
    <form action="proses-tambah.php" method="POST">
        <tr><h2>Input Data Siswa</h2></tr>

        <tr>
        <td><label for="id_siswa">Id Siswa :</label></td>
        <td><input type="number" name="id_siswa" /></td>
        </tr>

        <tr>
        <td><label for="nama">Nama :</label></td>
        <td><input type="text" name="nama" /></td>
        </tr>

        <tr>
        <td><label for="kelas">kelas :</label></td>
        <td><select name="kelas" title="Kelas">
            <option value="0" >- Pilih -</option>
            <option value="X">X - Sepuluh</option>
            <option value="XI">XI - Sebelas</option>
            <option value="XII">XII - Dua Belas</option>
            </select></td>
            </tr>

            <tr>
            <td><label for="id_jurusan">Id Jurusan :</label></td>
            <td><input type="number" name="id_jurusan"></td>
        </tr>

        <td><label for="nama_jurusan">Nama Jurusan :</label></td>
        <td><select name="nama_jurusan" title="Nama Jurusan">
            <option value="0" >- Pilih -</option>
            <option value="RPL">RPL</option>
            <option value="Boga">Tata Boga</option>
            <option value="Busana">Tata Busana</option>
            <option value="TBSM">Teknik Bisnis Sepeda Motor</option>
            <option value="TL">Teknik Las</option>
            </select></td>
            </tr>

        <tr>
            <td><label for="id_spp">ID SPP :</label></td>
            <td><input type="number" name="id_spp" /></td>
        </tr>

        <tr>
            <td><label for="tahun">Tahun Membayar SPP :</label></td>
            <td><input type="number" name="tahun" /></td>
        </tr>

        <tr>
            <td><label for="nominal">Jumlah Nominal :</label></td>
            <td><input type="number" name="nominal" /></td>
        </tr>
        
    </form>
    </table>

    <p>
    <button type="submit" id="simpan" name="Simpan">Simpan</button>
    </p>
</body>
</html>