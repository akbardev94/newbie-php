<?php
// $mahasiswa = [
//     ["Anas Maulana Akbar", "16201147", "akbarsensei@outlook.com", "Teknik Informatika"],
//     ["Ratna Wati", "1661201016", "ratnawatii.1803@gmail.com", "Managemen Ekonomi"]
// ];

// Array Assosiatif
// definisi sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Anas Maulana Akbar",
        "nim" => "16201147",
        "email" => "akbarsensei@outlook.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "profile1.jpg"
    ],
    [
        "nim" => "1661201016",
        "nama" => "Ratna Wati",
        "email" => "ratnawatii.1803@gmail.com",
        "jurusan" => "Managemen Ekonomi",
        "gambar" => "profile2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama :<?= $mhs["nama"]; ?></li>
            <li>NIM :<?= $mhs["nim"]; ?></li>
            <li>Email :<?= $mhs["email"]; ?></li>
            <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>

</html>