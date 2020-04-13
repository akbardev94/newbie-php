<?php
// $_GET
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
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?
                nama=<?= $mhs["nama"]; ?>
                &nim=<?= $mhs["nim"]; ?>
                &email=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>
                &gambar=<?= $mhs["gambar"]; ?>">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>