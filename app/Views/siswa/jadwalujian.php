<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

</head>
<body>


    <?= $this->section('styles') ?>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Chewy&display=swap');
         
        body {
            background-image: url("<?= base_url('assets/img/Background-dash2.png') ?>");
            background-size: 100% 100%; /* Paksa gambar mengisi seluruh layar */
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Buat body mengisi tinggi penuh layar */
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

       


        .welcome-message {
            height: 100px;
            width: 700px;
            background: rgba(50, 220, 126, 0.87);
            position: relative;
            left: 115px;
            top: 10px;
            padding: 30px;
            padding-left: 50px;
            border-radius: 10px;
            
            font-family: "Poppins", sans-serif;
            color: rgb(18, 94, 39);

        }


        .welcome-message p{
            color: rgba(9, 45, 19, 0.69);
            font-family: 'Poppins';
            font-weight: 500;
            
        }   

        .daftar-ujian {
            z-index: 1;
            width: 1300px;
            height: 475px; /* Tetap ada tinggi batas */
            background: rgba(65, 213, 134, 0.87);
            position: relative;
            border-radius: 10px;
            left: 115px;
            top: 40px;

            overflow-y: auto; /* Biar bisa di-scroll ke bawah */
            overflow-x: hidden; /* Hindari scroll ke samping */
            padding-right: 10px; /* Ruang buat scrollbar */
        }

        .daftar-ujian h3 {
            font-family: "Poppins", sans-serif;
            font-size: 1.3em;
            color: rgb(17, 91, 38);
            padding: 30px 50px;
            display: inline-block;
            border-bottom: 3px solid rgba(17, 91, 38, 0.66);
        }

        
        /* Styling Scrollbar (Chrome, Safari, Edge) */
        .daftar-ujian::-webkit-scrollbar {
            width: 8px;
        }

        .daftar-ujian::-webkit-scrollbar-track {
            background: rgba(17, 91, 38, 0.2);
            border-radius: 10px;
        }

        .daftar-ujian::-webkit-scrollbar-thumb {
            background: rgba(17, 91, 38, 0.8);
            border-radius: 10px;
        }

        .daftar-ujian::-webkit-scrollbar-thumb:hover {
            background: rgba(17, 91, 38, 1);
        }

        .jadwal-ujian {
            font-family: 'Poppins', sans-serif;
            width: 100%;
            max-width: 900px;
            border-collapse: collapse;
            margin: 20px auto;
            background: rgba(225, 243, 225, 0.76); /* Hijau muda */
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 2px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .jadwal-ujian thead {
            background: rgba(25, 120, 55, 0.89); /* Hijau tua */
            color: white;
        }

        .jadwal-ujian th, .jadwal-ujian td {
            padding: 12px 20px;
            text-align: left;
        }

        .jadwal-ujian thead th {
            text-align: center;
            padding: 15px;
        }

        .jadwal-ujian tbody tr:last-child td {
            border-bottom: none; /* Hapus border bawah di baris terakhir */
        }

        .jadwal-ujian tbody tr:nth-child(even) {
            background: rgba(36, 170, 72, 0.52); /* Alternatif hijau muda */
        }

        .jadwal-ujian td[rowspan] {
            font-weight: bold;
            background: rgba(20, 90, 40, 0.85); /* Hijau lebih gelap untuk sel rowspan */
            color: white;
            text-align: center;
            vertical-align: middle;
        }


        .footer{
            background: rgba(21, 176, 93, 0.72);
            position: relative;
            height: 70px;
            width: 1300px;

            top: 25px;
            left: 115px;
            border-radius: 0px 0px 0px 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins';
            font-size: 0.8em;
            color: rgba(1, 1, 1, 0.46);
        }

        

    </style>

    <?= $this->Endsection() ?>


    <?= $this->extend('layout/template') ?>



    <?= $this->section('content') ?>

    <div class="container">


        
        <div class="welcome-message">
            <h2>Halaman Jadwal Ujian</h2>
            <p>Ayo pastikan kamu sudah belajar sebelum pelajaranya di ujiankan ya...😁👍 </p>
        </div> <!-- End welcome-mesasage-->




        <div class="daftar-ujian">
            <h3>Table jadwal Ujian,  &nbsp Kelas XI</h3>

            <div class="container-mapel">

            <table class="jadwal-ujian">
                <thead>
                    <tr>
                        <th rowspan="2">Hari</th>
                        <th rowspan="2">Tanggal</th>
                    </tr>
                    <tr>
                        <th>Jam</th>
                        <th>Mata Pelajaran</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3">Senin</td>
                        <td rowspan="3">4 Maret 2025</td>
                        <td>07:30 - 09:00</td>
                        <td>Matematika</td>
                    </tr>
                    <tr>
                        <td>09:30 - 11:00</td>
                        <td>Fisika</td>
                    </tr>
                    <tr>
                        <td>12:30 - 14:00</td>
                        <td>Bahasa Inggris</td>
                    </tr>

                    <tr>
                        <td rowspan="3">Selasa</td>
                        <td rowspan="3">5 Maret 2025</td>
                        <td>08:00 - 09:30</td>
                        <td>Bahasa Indonesia</td>
                    </tr>
                    <tr>
                        <td>10:00 - 11:30</td>
                        <td>Kimia</td>
                    </tr>
                    <tr>
                        <td>13:00 - 14:30</td>
                        <td>Sejarah</td>
                    </tr>

                    <tr>
                        <td rowspan="3">Rabu</td>
                        <td rowspan="3">6 Maret 2025</td>
                        <td>09:30 - 11:00</td>
                        <td>Ekonomi</td>
                    </tr>
                    <tr>
                        <td>12:00 - 13:30</td>
                        <td>Geografi</td>
                    </tr>
                    <tr>
                        <td>14:00 - 15:30</td>
                        <td>Sosiologi</td>
                    </tr>
                </tbody>
            </table>



            </div>

            

        </div> <!-- End daftar-ujian-->







    </div><!-- End Main Container -->

    
    

    
    <script>
        document.querySelector(".logo").addEventListener("click", function() {

            let logo = this;
            
            // Tambahkan class animate untuk menjalankan animasi
            logo.classList.add("animate");

            // Hapus class animate setelah animasi selesai agar bisa diklik lagi
            setTimeout(() => {
                logo.classList.remove("animate");
            }, 2000); // Sesuai durasi animasi (2s)
        });



    </script>

<?= $this->endSection() ?>

</body>
</html>
