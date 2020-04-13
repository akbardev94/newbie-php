<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l,d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo time();

// Prediksi Tanggal
// echo date("l", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik 
//mktimr (0,0,0,0,0,0)
// jam, menit, detik, bulan , tanggal, tahun
// echo date("l", mktime(0, 0, 0, 3, 12, 1994));

// strtotime
echo date("l", strtotime("3 Dec 1994"));
