<!DOCTYPE html> <html lang="en">  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>WEBSISWA - Tambah Pendaftar Baru</title> 
</head>  
<body> 
    <header> 
<h3>Formulir Pendaftaran Siswa Baru</h3> 
    </header> 
<form action="proses-daftar.php" method="POST"> 
 
        <fieldset> 
 
            <p> 
                <label for="nama">Nama: </label>                 
                <input type="text" name="nama" placeholder="Nama Lengkap" /> 
            </p> 
            <p> 
                <label for="nama">alamat: </label> 
                <input type="text" name="alamat" placeholder="Alamat " /> 
            </p> 
            <p> 
                <label for="nama">sekolah: </label> 
                <input type="text" name="sekolah" placeholder="sekolah" 
/> 
            </p> 
            <p> 
                <label for="lomba">lomba: </label> 
                <label><input type="radio" name="lomba" value="web"> web </label> 
                <label><input type="radio" name="lomba" value="mobile"> mobile </label>
                <label><input type="radio" name="lomba" value="desktop"> desktop </label> 
            </p> 
            <p>
                <label for="hp">hp: </label> 
                <input type="text" name="hp" placeholder="hp" /> 
            </p>  
                <input type="submit" value="Daftar" name="daftar" /> 
            </p>  
        </fieldset> 
 
    </form> 
</body> 
 
</html> 

