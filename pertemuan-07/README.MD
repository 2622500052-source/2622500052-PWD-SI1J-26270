Pertemuan 7 — Pemrosesan Formulir PHP, Validasi, dan Session
Identitas
Nama: Vera
NIM: 2622500052
Program Studi: Sistem Informasi
Mata Kuliah: Pemrograman Web Dasar
Tahun Akademik: 2026/2027
Pertemuan: 7
Deskripsi

Pada pertemuan 7, saya melanjutkan proyek dari pertemuan 6 dengan menambahkan fitur pemrosesan formulir menggunakan PHP. Saya mempelajari cara mengambil data dari formulir menggunakan metode GET dan POST, melakukan validasi data, serta menyimpan data menggunakan session.

Selain itu, saya juga menerapkan metode Post-Redirect-Get (PRG) agar halaman tidak mengirim ulang data ketika dimuat kembali.

Perubahan dan Kegiatan yang Dilakukan
Saya menggunakan kembali proyek dari pertemuan 6 sebagai dasar pengerjaan pertemuan 7 dengan menyalin seluruh file yang masih diperlukan ke folder pertemuan-07/.
Saya mempelajari penggunaan event.preventDefault() pada JavaScript untuk mencegah formulir terkirim secara langsung ketika proses validasi dilakukan.
Saya mencoba mengambil data formulir menggunakan metode GET dan POST melalui superglobal $\_GET dan $\_POST.
Saya menambahkan proses penyimpanan data formulir menggunakan session PHP agar data yang sudah dimasukkan tidak langsung hilang setelah halaman dialihkan.
Saya menyesuaikan bagian input formulir supaya nilai sebelumnya dapat ditampilkan kembali menggunakan atribut value.
Saya menambahkan pengambilan data dari berbagai input, seperti nama, email, semester, tanggal kunjungan, jenis pesan, program studi, minat, dan pesan.
Saya mengubah nama checkbox menjadi minat[] supaya pengguna dapat memilih lebih dari satu pilihan, yaitu HTML dan CSS.
Saya menyesuaikan JavaScript pada script.js agar pemeriksaan pilihan minat dapat digunakan pada formulir POST maupun demonstrasi GET.
Saya membuat validasi menggunakan PHP untuk memastikan semua data yang diwajibkan sudah diisi dengan benar.
Saya menggunakan filter_var() untuk memeriksa format email dan FILTER_VALIDATE_INT untuk memastikan semester berupa angka bulat dari 1 sampai 14.
Saya menggunakan in_array() dan is_array() untuk memeriksa pilihan jenis pesan, program studi, serta topik yang dipilih pengguna.
Saya menerapkan trim() untuk membersihkan spasi berlebih pada masukan pengguna sebelum data diperiksa.
Saya menggunakan htmlspecialchars() untuk menjaga keamanan ketika menampilkan kembali data yang dimasukkan ke halaman HTML.
Saya menambahkan pesan kesalahan pada bagian Kontak agar pengguna mengetahui apabila terdapat data yang belum lengkap atau tidak sesuai.
Saya membuat bagian Data yang Diterima Peladen untuk menampilkan kembali informasi yang sudah dikirim melalui formulir.
Saya menggunakan nl2br() agar baris baru pada isi pesan tetap terlihat ketika ditampilkan pada halaman.
Saya menerapkan session_start() untuk mengaktifkan session dan menyimpan data formulir serta pesan validasi.
Saya menggunakan metode Post-Redirect-Get dengan header('Location: index.php') dan exit agar setelah formulir diproses, halaman kembali menggunakan metode GET.
Saya menggunakan unset() untuk menghapus pesan kesalahan dari session setelah pesan tersebut ditampilkan.
Saya melakukan pengujian dengan mencoba mengirim formulir kosong, memasukkan email yang salah, dan tidak memilih topik minat untuk melihat apakah validasi berjalan.
Saya juga mencoba mengirim data formulir yang benar untuk memastikan seluruh informasi dapat ditampilkan kembali dengan sesuai.
Saya menguji fitur session dan PRG dengan memuat ulang halaman setelah formulir dikirim untuk memastikan data tidak dikirim ulang oleh browser.
Saya menjalankan proyek menggunakan Laragon melalui localhost dan memeriksa apakah halaman, validasi, serta penyimpanan session berjalan dengan baik.
Jika menemukan kesalahan, saya memeriksa bagian kode yang bermasalah, melakukan perbaikan, kemudian mencoba menjalankan kembali proyek.
Setelah selesai, saya mendokumentasikan proses pengerjaan, perubahan kode, dan hasil pengujian ke dalam file README.md pada folder pertemuan-07/.
Saya memeriksa perubahan menggunakan Git, kemudian melakukan commit dan push agar hasil pengerjaan tersimpan di repositori GitHub.
Kesimpulan

Pada pertemuan 7, saya belajar mengembangkan formulir pada proyek sebelumnya menggunakan PHP. Saya memahami cara mengambil data dengan GET dan POST, memeriksa masukan pengguna melalui validasi, serta menjaga keamanan data ketika ditampilkan kembali.

Saya juga mempelajari penggunaan session dan metode Post-Redirect-Get agar data formulir dapat dipertahankan setelah pengalihan halaman. Melalui latihan ini, saya menjadi lebih memahami proses pengolahan data pada sisi peladen menggunakan PHP.
