<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST</title>
</head>
<!-- perbedaan $_GET ada di URL
sedangkan $_POST tidak ada di URL -->
<!-- untuk Action buat halaman baru sedangkan misalkan di kosongkan akan kembali ke halaman semula/sendiri dan menjadi default -->
<!-- perlakukan $_GET dan $_POST seperti Array Associative -->

<body>
    <?php if(isset($_POST["submit"])):?>
    <h1>Halo, Selamat Datang <?= $_POST ["nama"];?></h1>
<?php endif;?>   
    <form action="" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>

    </form>
</body>

</html>