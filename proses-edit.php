<?php  
include("koneksi.php"); 
 
// cek apakah tombol simpan sudah diklik atau blum?
 if (isset($_POST['simpan'])) { 
 
    // ambil data dari formulir 
    $id = $_POST['id']; 
    $nama = $_POST['nama']; 
    $email = $_POST['alamat']; 
    $telepon = $_POST['sekolah']; 
    $lomba = $_POST['lomba'];
    $hp = $_POST['hp'];

    // buat query update 
    $sql = "UPDATE tb_lomba SET nama='$nama', alamat='$alamat',sekolah='$sekolah',lomba='$lomba',hp='$hp' WHERE id=$id"; 
    $query = mysqli_query($conn, $sql); 
 
    // apakah query update berhasil?    
     if ($query) { 
        // kalau berhasil alihkan ke halaman list-lomba.php        
         header('Location: list-lomba.php'); 
    } else { 
        // kalau gagal tampilkan pesan        
         die("Gagal menyimpan perubahan..."); 
    } } else { 
    die("Akses dilarang..."); 
} 
