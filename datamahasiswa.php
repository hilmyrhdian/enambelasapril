<?php
    $koneksi = mysqli_connect("localhost:3306", "root", "yanghackjahat","enambelasapril"); 
    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($koneksi, $query); 
   

    ///ambil data dari (fetch) dari lemari result
   
       // while ($mhs = mysqli_fetch_assoc($result))
        //{ var_dump($mhs) ;

        //}
    
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
</head>
<body>
    <h1>Data Mahasiswa </h1>

    <table border="1" cellspacing="0" cellpadding="10">
       <tr> 
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>no_hp</th>
        </tr>
         <?php 
         $i = 1;
         while ($mhs = mysqli_fetch_assoc($result)) { ?>
        <tr>
           
            <td><?= $i?> </td>
            <td>
                    <img src="img/<?= $mhs['foto'] ?>" alt="Foto Mahasiswa" width="80">
                </td>
            <td> <?= $mhs["nama"] ?> </td>
            <td><?= $mhs["nim"] ?></td>
            <td><?= $mhs["jurusan"] ?></td>
            <td><?= $mhs["no_hp"] ?></td>
           
        </tr>
        <?php $i++; } ?>
    <table/>
       
</body>
</html>