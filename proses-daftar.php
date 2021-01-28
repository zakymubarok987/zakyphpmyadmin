<?php  
include("koneksi.php"); 
 
// cek apakah tombol daftar sudah diklik atau blum? 
if (isset($_POST['daftar'])) { 
 
    // ambil data dari formulir 
    $nama = htmlspecialchars($_POST['nama']); 
    $alamat = htmlspecialchars($_POST['alamat']); 
    $sekolah = htmlspecialchars($_POST['sekolah']);     
    $lomba = htmlspecialchars($_POST['lomba']); 
    $hp = htmlspecialchars($_POST['hp']); 
 
    // buat query 
    $sql = "INSERT INTO tb_lomba (nama, alamat, sekolah, lomba, hp) 
VALUE ('$nama', '$alamat', '$sekolah', '$lomba', '$hp')"; 
    $query = mysqli_query($conn, $sql); 
 
    // apakah query simpan berhasil? 
    if ($query) { 
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses         
        header('Location: index.php?status=sukses'); 
    } else { 
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal         
        header('Location: index.php?status=gagal'); 
    } } else { 
    die("Akses dilarang..."); 
} 
