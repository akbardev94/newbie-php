<?php
require 'functions.php'; // menghubungkan ke function

// cek apakah tombol submit sudah ditekan atau belum
// submit ini terhubung dgn submit BUTTON
if (isset($_POST["submit"])) {



    //cek apakah data berhasil ditambahkan atau tidak
    //cara mengecek data dgn memanfaatkan angka rows, dan itu bisa dilihat
    // menggunakan  var_dump(mysqli_affected_rows($conn));
    if (tambah($_POST) > 0) { //dibawah ini menggunakan javascript dan menyambungkan ke halaman index
        echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo " 
            <script>
                alert('data gagal ditambahkan');
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
    <title>Tambah data karyawan</title>
</head>

<body>

    <h1> Tambah Data Karyawan</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <!--untuk mengolah data enctype="multipart/form-data"-->
        <ul>
            <li>
                <label for=" Gambar">Gambar</label> <!-- for untuk menghubungkan dari a ke b ,contoh label ke input -->
                <input type="file" name="Gambar" id="Gambar ">
            </li>
            <li>
                <label for="NIP">NIP</label>
                <input type="text" name="NIP" id="NIP" required>
                <!-- name nya sesuaikan dengan nma yg ada pada database-->
            </li>
            <li>
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" required>
            </li>

            <li>
                <label for="Usia">Usia</label>
                <input type="text" name="Usia" id="Usia" required>
            </li>
            <li>
                <label for="Pendidikan">Pendidikan</label>
                <input type="text" name="Pendidikan" id="Pendidikan" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data !</button>
            </li>

        </ul>
    </form>



</body>

</html>