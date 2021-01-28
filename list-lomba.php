<?php include("koneksi.php"); ?> 
 
<!DOCTYPE html> <html lang="en"> 
 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>WEBSISWA - List Pendaftar Baru</title> 
</head> 
 
<body> 

    <header> 
        <h3>List Pendaftar Baru</h3> 
    </header>  
    <nav> 
        <a href="form-daftar.php">[+] Daftarkan Siswa Baru</a> 
    </nav>  
    <br> 
 
    <table border="1"> 
        <thead> 
            <tr> 
                <th>no</th> 
                <th>Nama</th> 
                <th>alamat</th> 
                <th>sekolah</th> 
                <th>lomba</th> 
                <th>hp</th> 
                <th>aksi</th>
            </tr> 
        </thead>         <tbody> 
 
            <?php 
            $sql = "SELECT * FROM tb_lomba"; 
            $query = mysqli_query($conn, $sql); 
            $i = 1; 
            ?> 
 
            <?php while ($zaky = mysqli_fetch_array($query)) :  ?> 
                <tr> 
                    <td><?php echo $i ?></td> 
                    <td><?php echo $zaky['nama'] ?></td> 
                    <td><?php echo $zaky['alamat'] ?></td> 
                    <td><?php echo $zaky['sekolah'] ?></td>                     
                    <td><?php echo $zaky['lomba'] ?></td> 
                    <td><?php echo $zaky['hp'] ?></td> 
                    <td> 
                        <a href="form-edit.php?id=<?php echo $zaky['id'] ?>">Edit</a> | 
                        <a href="hapus.php?id=<?php echo $zaky['id'] ?>">Hapus</a> 
                    </td> 
                </tr> 
                <?php $i++ ?> 
            <?php endwhile; ?> 
 
         </tbody>      
         </table> 
 
    <p>Total Pendaftar Baru: <?php echo mysqli_num_rows($query) ?></p> 
</body>  
</html> 
