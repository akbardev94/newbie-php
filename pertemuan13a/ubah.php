<?php
require 'functions.php'; // menghubungkan ke function

//ambil dta dari url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$kry = query("SELECT * FROM data_karyawan WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
// submit ini terhubung dgn submit BUTTON
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    //cara mengecek data dgn memanfaatkan angka rows, dan itu bisa dilihat
    // menggunakan  var_dump(mysqli_affected_rows($conn));
    if (ubah($_POST) > 0) { //dibawah ini menggunakan javascript dan menyambungkan ke halaman index
        echo "
                <script>
                    alert('data berhasil diubah');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo " 
            <script>
                alert('data berhasil diubah');
                document.location.href = 'index.php';
            </script>
    ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit data karyawan</title>
</head>

<body>

    <h1> Edit Data Karyawan</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $kry["id"] ?>">
        <ul>
            <li>
                <label for="Gambar">Gambar</label> <!-- for untuk menghubungkan dari a ke b ,contoh label ke input -->
                <input type="text" name="Gambar" id="Gambar" required value="<?= $kry["Gambar"] ?> "> <!-- name nya sesuaikan dengan nma yg ada pada database-->
                <!--required adalah bila sisi teks kosong maka tidak bisa masuk-->
                <!-- value="<?= $kry["Nama"] ?> 
                    VALUE adalah untuk menampilkan data,tapi sebelumnya harus menambhakan [0] posisi diatas
                    // query data mahasiswa berdasarkan id 
                    $kry = query("SELECT * FROM data_karyawan WHERE id = $id")[0];-->

            </li>
            <li>
                <label for="NIP">NIP</label>
                <input type="text" name="NIP" id="NIP" required value="<?= $kry["NIP"] ?> ">
                <!-- name nya sesuaikan dengan nma yg ada pada database-->
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required value="<?= $kry["Nama"] ?> ">
            </li>

            <li>
                <label for="Usia">Usia</label>
                <input type="text" name="Usia" id="Usia" required value="<?= $kry["Usia"] ?> ">
            </li>
            <li>
                <label for="Pendidikan">Pendidikan</label>
                <input type="text" name="Pendidikan" id="Pendidikan" required value="<?= $kry["Pendidikan"] ?> ">
            </li>
            <li>
                <button type="submit" name="submit">Edit Data !</button>
            </li>

        </ul>
    </form>



</body>

</html>