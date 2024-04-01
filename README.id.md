# Math Rizz

Math Rizz adalah platform web e-learning matematika yang komprehensif yang dirancang untuk meningkatkan pengalaman belajar bagi siswa SMA. Ini menyediakan pelajaran interaktif, latihan praktik, pelacakan progres, dan fitur kolaboratif untuk mendukung siswa dalam menguasai konsep matematika yang lebih lanjut.

*Baca dengan bahasa lain: [English](README.md).*

## Persyaratan Teknis
- **Platform**: Aplikasi berbasis web menggunakan teknologi web modern (HTML5, CSS3, JavaScript).
- **Kompatibilitas**: Mendukung browser web utama (Chrome, Firefox, Safari, Edge) dan platform mobile (iOS, Android).
- **Keamanan**: Otentikasi pengguna yang aman, enkripsi data, dan langkah-langkah perlindungan privasi.
- **Skalabilitas**: Kemampuan untuk menangani pengguna bersamaan dan mengatur sumber daya sesuai kebutuhan.

## Pedoman Desain
- Antarmuka yang ramah pengguna dengan navigasi yang intuitif dan desain visual yang menarik.
- Integrasi elemen multimedia (video, animasi) untuk pengiriman konten yang menarik.
- Elemen gamifikasi (lencana, reward) untuk memotivasi dan memberi insentif pada pembelajaran.

## Stack Teknologi

- Laravel 11.0
- Svelte 4.12
- MySQL Community Server 8.3
- Bootstrap 5.3

## Memulai

### Persyaratan

- Anda memerlukan [PHP](https://www.php.net/downloads) untuk menjalankannya, dengan versi yang terinstal minimal **PHP 8.3.4**. Pastikan Anda juga dapat mengakses PHP melalui command line dengan menambahkannya ke [environment variable path](https://rgrahardi.medium.com/pengaturan-path-php-dan-composer-di-environment-variables-windows-10-e1e22a637618).
- Pastikan [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos) juga terinstal dan dapat diakses melalui command line.
- Pastikan Anda juga telah menginstall [MySQL](https://dev.mysql.com/downloads/mysql/).
- Anda perlu menginstall [Node.js](https://nodejs.org/en/download/current) untuk memastikan halaman HTML dapat dirender ketika aplikasi dijalankan. Gunakan Node.js versi **v20.11.1 LTS** untuk hasil sesuai ekspektasi.
- Direkomendasikan untuk menginstall [Git](https://git-scm.com/downloads) untuk manajemen kode yang lebih baik.

### Dapatkan Kode Sumber
Tentu, Anda perlu mengunduh atau menggunakan Git untuk mendapatkan kode ini di komputer Anda. Ada dua cara untuk melakukannya, silakan pilih salah satu.

1. **Unduh File Zip Proyek**

    Anda dapat klik [tautan ini](https://github.com/404NotFoundIndonesia/math-rizz/archive/refs/heads/main.zip) untuk mengunduh file zip dari proyek ini.

2. **Git Clone**

    Pastikan Anda telah menginstall git. Buka direktori di terminal tempat Anda ingin menaruh kode sumber. Kemudian, jalankan perintah berikut:
    ```shell
    git clone git@github.com:404NotFoundIndonesia/math-rizz.git
    ```

### Instal Dependensi

Ada dua jenis dependensi yang harus kita install pada proyek ini, yaitu untuk backend dan frontend. Di backend kita menggunakan Composer sedangkan di frontend kita menggunakan npm untuk penginstalan dependensinya.

Pastikan proyek ini sudah terbuka di command line Anda. Untuk memastikan direktori aktif sekarang Anda di terminal, gunakan perintah berikut:
```shell
pwd
```

Untuk menginstall dependensi backend, gunakan perintah berikut:
```shell
composer install
```

Untuk menginstall dependensi frontend, gunakan perintah berikut:
```shell
npm install
```

### Cara Menjalankan
Anda harus membuka dua buah command line untuk menjalankan proyek ini. Masing-masing digunakan untuk bagian backend dan frontend. Dan juga pastikan direktori aktif dari masing-masing command line berada di proyek ini.

Untuk menjalankan server backend, gunakan perintah berikut:
```shell
php artisan serve
```

Untuk menjalankan server frontend, gunakan perintah berikut:
```shell
npm run dev
```

Pastikan bahwa kedua server backend dan frontend berjalan secara bersamaan untuk mengakses Math Rizz di web browser Anda.

Buka http://localhost:8000 di web browser Anda untuk mengakses Math Rizz.

Sekarang, Anda siap untuk menjelajahi Math Rizz dan meningkatkan pengalaman belajar matematika Anda! Selamat belajar! 📚✨

## Daftar Pustaka

- [Susanto dkk. 2021. _Matematika untuk SMA/SMK Kelas X_. Pusat Kurikulum dan Perbukuan Badan Penelitian dan Pengembangan dan Perbukuan: Jakarta](https://static.buku.kemdikbud.go.id/content/pdf/bukuteks/kurikulum21/Matematika-BS-KLS-X.pdf)
- [Susanto dkk. 2021. _Matematika untuk SMA/SMK Kelas XI_. Pusat Perbukuan Badan Standar, Kurikulum, dan Asesmen Pendidikan: Jakarta](https://static.buku.kemdikbud.go.id/content/pdf/bukuteks/kurikulum21/Matematika-BS-KLS-XI.pdf)
- [Tohir dkk. 2022. _Matematika untuk SMA/SMK/MA Kelas XII_. Pusat Perbukuan Badan Standar, Kurikulum, dan Asesmen Pendidikan: Jakarta](https://static.buku.kemdikbud.go.id/content/pdf/bukuteks/kurikulum21/Matematika-BS-KLS-XII.pdf)

## Lisensi

__Math Rizz__ adalah perangkat lunak _open-source_ yang dilisensikan di bawah lisensi [MIT license](https://github.com/404NotFoundIndonesia/math-rizz?tab=MIT-1-ov-file).