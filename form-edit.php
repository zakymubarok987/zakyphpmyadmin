<?php  
include("koneksi.php"); 
 
// kalau tidak ada id di query string 
if (!isset($_GET['id'])) { 
    header('Location: list-siswa.php'); 
} 
 
//ambil id dari query string 
$id = $_GET['id']; 
 
// buat query untuk ambil data dari database 
$sql = "SELECT * FROM tb_lomba WHERE id=$id"; 
$query = mysqli_query($conn, $sql); 
$zaky = mysqli_fetch_assoc($query); 
 
// jika data yang di-edit tidak ditemukan 
if (mysqli_num_rows($query) < 1) {     
    die("data tidak ditemukan..."); 
}  
?> 
  
<!DOCTYPE html> <html lang="en"> 
 

<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>WEBSISWA - Edit Pendaftar</title> 
</head>  
<body> 
    <header> 
        <h3>Formulir Edit Siswa</h3> 
    </header> 
 
    <form action="proses-edit.php" method="POST"> 
 
        <fieldset> 
             <input type="hidden" name="id" value="<?php echo $jumik['id'] ?>" 
/> 
 
            <p> 
                <label for="nama">Nama: </label> 
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $zaky['nama'] ?>" /> 
            </p> 
            <p> 
                <label for="alamat">alamat: </label> 
                <input type="text" name="alamat" placeholder="alamat" value="<?php echo $zaky['alamat'] ?>" /> 
            </p> 
            <p> 
                <label for="sekolah">sekolah: </label> 
                <input type="text" name="sekolah" placeholder="sekolah" value="<?php echo $zaky['sekolah'] ?>" /> 
            </p> 
            <p> 
                <label for="lomba">Jenis lomba: </label> 
                <?php $lomba = $zaky['lomba']; ?> 
                <label><input type="radio" name="lomba" value="web" <?php echo ($lomba == 'web') ? "checked" : "" ?>> web</label> 
                <label><input type="radio" name="lomba" value="mobile" <?php echo ($lomba == 'mobile') ? "checked" : "" ?>> mobile</label> 
                 <label><input type="radio" name="lomba" value="desktop" <?php echo ($lomba == 'desktop') ? "checked" : "" ?>> desktop</label> 
            </p> 
            <p>
                <label for="hp">hp: </label> 
                <input type="text" name="hp" placeholder="hp" value="<?php echo $zaky['hp'] ?>" /> 
            </p> 
            <p>
                <input type="submit" value="Simpan" name="simpan" /> 
            </p> 
 
        </fieldset> 
      </form> 
 
</body> 
 
</html> 
