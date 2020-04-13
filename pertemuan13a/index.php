<?php
// INI ADA DI VIDEO 4

require 'functions.php'; // menghubungkan ke functions.php
$dakar = query("SELECT * FROM data_karyawan"); //varible $dakar yg bersisi array assosiativ rapi, penggulangan dgn array harus pakai foreach
// ORDER BY adalah untuk mengurutkan seperti apa, dari kecil ke besar berdasarkan id ASC
// atau sebaliknya DESC contoh : $dakar = query("SELECT * FROM data_karyawan");
// untuk mencaritiap isi tabel dengan kunci tertenu dari tabel,, WHERE NIP ='2'

// tombol ditekan
if (isset($_POST["cari"])) {
    $dakar = cari($_POST["keyword"]);
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Admin</title>
</head>

<body>

    <h1>Data Karyawan</h1>

    <a href="tambah.php">Tambah data karyawan</a>
    <br><br>

    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword disini" autocomplete="off">
        <!--autofocus adalah untuk focus otomati sejk pertama masuk-->
        <!--placeholder untuk tulisan dalam input diatas-->
        <!--autocomlete untuk menghilangkan history pada pencarian-->
        <button type="submit" name="cari">cari</button>

    </form>
    <br>


    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <!-- INI ADALAH TABELNYA -->
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Usia</th>
            <th>Pendidikan</th>
        </tr>

        <?php $i = 1; ?>
        <!-- INI ADALAH ISI DATANYA -->
        <!-- ini untuk membuat angka urut -->
        <?php foreach ($dakar as $dk) : ?>
            <!-- penggulangan dgn array harus pakai foreach -->
            <tr>
                <td> <?php echo $i; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $dk["id"]; ?>">ubah</a>
                    <a href="hapus.php?id=<?= $dk["id"]; ?>" onclick="
                        return confirm('yakin ?');">hapus</a><!-- onclick untuk peringatan apakah user setuju atau tidak-->
                </td>
                <td>
                    <img src="img/<?= $dk["Gambar"]; ?> " width="50">
                </td>
                <td><?php echo $dk["NIP"]; ?></td>
                <td><?php echo $dk["Nama"]; ?></td>
                <td><?php echo $dk["Usia"]; ?></td>
                <td><?php echo $dk["Pendidikan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>

</body>

</html>