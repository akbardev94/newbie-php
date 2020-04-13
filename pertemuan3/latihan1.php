<!-- 
// Pengulangan
// for
// while
// do..while
// foreach : pengulangan khusus array

// kurung kurawal untuk menandai dimana perulangan
// for ($i = 0; $i < 5; $i++) {
//     echo "Hello World! <br>";
// }

// while "selama kondisinya bernilai true lakukan apapun yang ada di dalamnya"

// Cek dulu lalu jalankan
// $i = 0;
// while ($i < 5) {
//     echo "Hello World! <br>";
//     // increament kalau tidak akan terjadi looping forever atau tidak akan berhenti
//     $i++;
// }

// lakukan hal ini selama kondisi bernilai true " jalankan dulu lalu cek kondisinya" 
// $i = 0;
// do {
//     echo "Hello World! <br>";
//     $i++;
// } while ($i < 5); -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                </tr>
            <?php endif; ?>
            <?php for ($j = 1; $j <= 5; $j++) : ?> <td><?= "$i, $j"; ?></td>
            <?php endfor; ?>
            </tr>
        <?php endfor; ?>

    </table>
</body>

</html>