<?php
//koneksi ke database
//parameternya ada 4 yaitu nama hostnya, usrname mysql, password mysql,nama databse
$conn = mysqli_connect("localhost", "root", "", "phpdasar");


function query($query)
{
    global $conn; //variable scopr/ variable lingkup,,lingkup luar dan dalam beda,bila ingin menghubungkan maka tambahkan global dan nama variablenya apa

    $result = mysqli_query($conn, $query); ////parameternya ada 2 yaitu koneksi database, querynya 
    $kotakkosong = []; //wadah array kosong untuk mengisi data
    while ($baris = mysqli_fetch_assoc($result)) { //mengambil data dengan looping
        $kotakkosong[] = $baris; //artinya $ktak kosong diisi dengan $baris
    }
    return $kotakkosong;
}



function tambah($data)
{
    global $conn;

    //ambil data dari tiap element dalam form

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }
    $nip = htmlspecialchars($data["NIP"]);
    $nama = htmlspecialchars($data["Nama"]);
    $usia = htmlspecialchars($data["Usia"]);
    $ppd = htmlspecialchars($data["Pendidikan"]);

    // query insert data
    $query = "INSERT INTO data_karyawan
    VALUES
    ('', '$gambar', '$nip', '$nama', '$usia', '$ppd')
    "; // urutan field dalam tabelnya,gk boleh tertukar

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn); //cek apakah data berhasil ditambahkan atau tidak
    // akan mengembalikan angka, angka yg akan sya dapat dari mysqli_affected_rows 
    // dia akan berhasil atau tidak
}

function upload()
{
    $error = $_FILES['Gambar']['error'];
    $namaFile = $_FILES['Gambar']['name'];
    $ukuranFile = $_FILES['Gambar']['size'];
    $tmpName = $_FILES['Gambar']['tmp_name'];

    // cek apakah tidak ada gambar yg di upload
    if ($error === 4) {
        echo "<script>
                alert ('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yg di upload adalah gambar
    $ekstensiGambarvalid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile); // untuk memecah sebuah string menjadi array
    // contohnya bila saya punya file bebri.jpg  maka akan menjadi bebri.jpg=['bebri', 'jpg']
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    // end untuk mengambil nama file yg terakhir
    //strtolower untuk memaksa ektensi yg diambil menjad huruf kecil semua

    // cek adakah string didalam array
    //kalau yg dicek tidak seperti ekstensi gambar maka akan muncul.....
    if (!in_array($ekstensiGambar, $ekstensiGambarvalid)) {
        echo "<script>
                alert ('yang anda upload bukan sebuah gambar');
            </script>";
        return false;
    }

    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert ('ukuran gambar terlalu besar');
            </script>";
        return false;
    }
}



function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM data_karyawan WHERE id =$id");

    return mysqli_affected_rows($conn);
}



function ubah($data)
{
    global $conn;

    $id = $data["id"];

    //ambil data dari tiap element dalam form
    $gambar = htmlspecialchars($data["Gambar"]); // fungsi htmlspecialchars(data["]) untuk anti hack 
    $nip = htmlspecialchars($data["NIP"]);
    $nama = htmlspecialchars($data["Nama"]);
    $usia = htmlspecialchars($data["Usia"]);
    $ppd = htmlspecialchars($data["Pendidikan"]);

    // query insert data
    $query = "UPDATE data_karyawan SET
                Gambar = '$gambar',
                NIP = '$nip',
                Nama = '$nama',
                Usia = '$usia',
                Pendidikan = '$ppd'
                WHERE id = $id;
      "; // disini kita belum ada id, maka dibuatlah di ubah.php
    // urutan field dalam tabelnya,gk boleh tertukar

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn); //cek apakah data berhasil ditambahkan atau tidak
    // akan mengembalikan angka, angka yg akan sya dapat dari mysqli_affected_rows 
    // dia akan berhasil atau tidak
}


function cari($keyword)
{
    $query = "SELECT * FROM data_karyawan
            WHERE
            Nama LIKE '%$keyword%' OR
            Usia LIKE '%$keyword%'
        "; //awalnya Nama = '$keyword' 
    //tpi bila ingin fliksibel pencariannya edit jadi 
    // Nama LIKE '%$keyword%', tnda % itu untuk kata pencarian dari depan atau belakang, sesua kebutuhan
    //bila ingin mencari selain dari satu maka tambahkan OR , seperti diatas
    return query($query);
}
