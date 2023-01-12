<?php
include "koneksi.php";

if (isset($_POST['Simpan'])){
    $id_siswa = $_POST['id_siswa'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $id_spp = $_POST['id_spp'];
    $tahun = $_POST['tahun'];
    $nominal = $_POST['nominal'];

    $sql = "INSERT INTO tb_siswa (id_siswa, nama, kelas, id_jurusan, id_spp) values ('$id_siswa','$nama','$kelas','$id_jurusan','$id_spp')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "INSERT INTO tb_spp (id_siswa, tahun, nominal) values ('$id_siswa','$tahun','$nominal')";
    $query = mysqli_query($koneksi, $sql);

    $sql = "INSERT INTO tb_jurusan (id_jurusan, nama_jurusan) values ('$id_jurusan','$nama_jurusan')";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:tabel.php?status=sukses');
    }else{
        header('location:tambah.php?status=gagal');
    }
}
?>