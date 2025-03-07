<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>



   
    


        
</style>

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

        .daftar-ujian{      
            z-index: 1;
            height: 375px;
            width: 1300px;
            background: rgba(143, 218, 179, 0.26);
            position: relative;
            border-radius: 10px;
            left: 115px;
            top: -20px;

        }

        .daftar-ujian h3 {
            font-family: "Poppins", sans-serif;
            font-size: 1.3em;
            color: rgb(17, 91, 38);
            border-radius: 10px;
            background: rgba(40, 160, 98, 0.6);

            padding: 30px 50px;
            display: flex;
            border-bottom: 3px solid rgba(17, 91, 38, 0.66);
        }

        .container-mapel {
            width: 100%; /* Gunakan full width biar fleksibel */
            max-width: 1100px; /* Batas maksimal biar nggak terlalu lebar */
            height: auto; /* Biar otomatis menyesuaikan konten */
            display: flex;
            flex-wrap: wrap; /* Biar kalau gak muat, turun ke bawah */
            margin-top: 30px;
            /* background: red; */
            margin-right: auto; /* Biar tetap di tengah */
            padding: 20px;
            justify-content: center; /* Rata tengah secara horizontal */
            align-items: center; /* Rata tengah secara vertikal */
            gap: 30px;
        }


        .mapel {
            background: linear-gradient(to bottom right, rgba(28, 185, 91, 0.82), rgba(36, 147, 77, 0.82), rgba(37, 172, 64, 0.82));
            padding: 15px 30px;
            border-radius: 15px;
            cursor: pointer;
            position: relative;
            font-family: 'Poppins', sans-serif;
            color: white;
            font-weight: 500;
            box-shadow: 2px 2px 2px 0px rgba(6, 84, 33, 0.6);
            transition: all 0.4s ease-in-out;

            display: flex; /* Flexbox agar bisa center */
            justify-content: center; /* Center horizontal */
            align-items: center; /* Center vertikal */
            
            width: fit-content; /* Lebar sesuai teks */
            min-width: 150px; /* Atur batas minimum lebar */
            height: 100px; /* Atur tinggi */
            white-space: nowrap; /* Mencegah teks turun ke bawah */
            overflow: hidden; /* Jika teks terlalu panjang, disembunyikan */
            text-overflow: ellipsis; /* Tambahkan "..." jika teks melebihi */
        }



        .mapel:hover{
            box-shadow: 5px 5px 0px 0px rgb(9, 121, 48);
            background: linear-gradient(to bottom right,rgba(19, 150, 71, 0.82), rgba(35, 140, 74, 0.82), rgba(26, 158, 83, 0.82));
        }

        /* Indikator Status */
        .status {
            position: absolute;
            bottom: 10px;
            right: 10px;
            height: 15px;
            width: 15px;
            border-radius: 5px;
        }   

        /* Status Warna */
        .status-merah { background:rgba(198, 100, 100, 0.64); }  /* Belum dimulai */
        .status-hijau { background:rgb(20, 108, 49); } /* Ujian bisa di mulai */



        .modal {
            display: none; 
            position: fixed; 
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0; 
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s;
            z-index: 50;
        }

        .modal-content {
            background: rgba(65, 213, 134, 0.87);
            font-family: 'Poppins';
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 500px;
            height: 300px;
            transform: scale(0.8);  /* Awalnya diperkecil */
            transition: transform 0.3s ease-in-out;
        }

        .modal-content #modal-title{
            color: rgb(19, 113, 63);
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(0, 0, 0, 0.37);
        }

        .modal-content p {
            position: relative;
            display: flex;
            color: rgba(1, 1, 1, 0.62);
            font-weight: 500;
            left: 0px;
        }

        .modal-content button{
            position: absolute;
            bottom: 20px;
            right: 20px;
            display: flex;
            background: linear-gradient(to bottom right, rgba(28, 185, 91, 0.82), rgba(36, 147, 77, 0.82), rgba(37, 172, 64, 0.82));
            padding: 15px 25px;
            border: none;
            cursor: pointer;
            border-radius: 10px;
            color: white;
            font-size: 1em;
            font-family: 'Poppins';
            box-shadow: 2px 2px 0px 0px rgb(9, 116, 59);
            transition: all 0.3s ease-in-out;


        }

        .modal-content button:hover {
            padding: 16px 27px;
        }

        .modal.show {
            opacity: 1;
            visibility: visible;
        }

        .modal.show .modal-content {
            transform: scale(1); /* Kembali ke ukuran normal */
        }

        .close {
            position: absolute;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            color: rgb(22, 99, 45);
            font-weight: bold;
        }






        .fitur-lain{
            height: 130px;
            width: 790px;
            /* background:  skyblue; */ 
            position: relative;
            top: 5px;
            left: 150px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 15px;  
            
        }

        .fitur-lain a{
            color: white;
            font-size: 15px;
            background: linear-gradient(to bottom right,rgba(41, 199, 146, 0.82), rgba(111, 199, 143, 0.82), rgba(59, 129, 90, 0.82));


            padding: 30px 50px;
            text-decoration: none;
            border-radius: 10px;
            font-family: 'Poppins';
            transition: all 0.3s ease-in-out;
            /* box-shadow: 2px 2px 5px 5px rgba(22, 139, 63, 0.49) inset; */
            color: rgb(14, 86, 53);
            font-weight: bold;
            white-space: nowrap; /* Mencegah teks turun ke bawah */


            
        }

        .fitur-lain a:hover{
            /* box-shadow: 2px 2px 5px 5px rgba(9, 121, 48, 0.49) inset; */
            background: linear-gradient(to bottom right,rgba(41, 199, 104, 0.82), rgba(35, 202, 96, 0.82), rgba(37, 172, 64, 0.82));
        }





        .info-akun {
            display: none; 
            position: fixed; 
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0; 
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s;
            z-index: 50;
        }

        .info-akun-content{
            position: absolute;
            right: 75px;
            top: 20px;
            background: rgba(65, 213, 134, 0.87);
            font-family: 'Poppins';
            padding: 20px;
            border-radius: 10px;
            text-align: left;
            width: 400px;
            height: 230px;
            transform: scale(0.5);  /* Awalnya diperkecil */
            transition: transform 0.3s ease-in-out;

        }

        .info-akun.show {
            opacity: 1;
            visibility: visible;
        }

        .info-akun.show .info-akun-content {
            transform: scale(0.8);
        }          


        .info-akun-content{
            /* background: red; */
            display: flex;
            flex-direction: column;
            text-align: left;
            gap: 0px;
        }

        .info-akun-content h2 {
            border-bottom: 2px solid rgba(1, 1, 1, 0.42);
            padding: 5px;
            color: rgb(16, 91, 44);
        }

        .info-akun-content p {
            position: relative;
            margin: 5px;
            font-size: 1em;
            display: flex;
            font-weight: 500;
        }

        .close-infoakun {
            position: absolute;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            color: rgb(22, 99, 45);
            font-weight: bold;
        }


        

        .footer{
            background: rgba(21, 176, 93, 0.72);
            position: relative;
            height: 70px;
            width: 1300px;

            top: -20px;
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

    <?= $this->endSection() ?>
    

    <?= $this->extend('layout/template') ?>


    <?= $this->section('content') ?>

    <div class="container">


        
        <div class="welcome-message">
            <h2>Selamat Datang $user</h2>
            <p>Wah $user sudah siap untuk ujian nih?  semoga berhasil ya Ujianya 😁👍 </p>
        </div> <!-- End welcome-mesasage-->




        <div class="fitur-lain">
            <a href="/siswa/kisi-kisi" class="kisi-kisi"><i class="fa-solid fa-book-open"></i> Kisi-kisi</a>
            <a href="/siswa/jadwal-ujian" class="jadwal-ujian"><i class="fa-solid fa-calendar"></i> Jadwal Ujian</a>
            <a href="/siswa/riwayat-ujian" class="riwayat-ujian"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Ujian</a>
            <a href="#" class="info-akun-card" id="btn-info-akun"><i class="fa-solid fa-address-card"></i> Info Akun</a>
        </div>



        <!-- Modal Info Akun -->
        <div id="Modal_infoakun" class="info-akun">
            <div class="info-akun-content">
                <span class="close-infoakun">&times;</span>
                <h2>Info Akun</h2>
                <p>Nama : <span id="info-nama">Username</span></p>
                <p>Role : <span id="info-role">Siswa</span></p>
                <p>Kelas : <span id="info-kelas">Kelas XI</span></p>
                <p>Sekolah : <span id="info-sekolah">Taruna Bangsa</span></p>
            </div>
        </div>



        <div class="daftar-ujian">
            <h3>Daftar Ujian yang tersedia,  &nbsp Kelas XI</h3>

            <div class="container-mapel">

                <div class="mapel" onclick="openModal('Pemrograman Web', 20, '60 Menit')">
                    Pemrograman Web 
                    <div class="status status-hijau"></div> 
                </div>

                <div class="mapel" onclick="openModal('Visual Basic', 20, '60 Menit')">
                    Visual Basic
                    <div class="status status-merah"></div> 
                </div>

                <div class="mapel" onclick="openModal('Game Developer', 20, '60 Menit')">
                    Game Developer
                    <div class="status status-merah"></div> 
                </div>

                <div class="mapel" onclick="openModal('Bahasa Indonesia', 20, '60 Menit')">
                    Bahasa Indonesia
                    <div class="status status-merah"></div> 
                </div>

            </div>


            <div id="modal-konfirmasi" class="modal">

                <div class="modal-content">

                    <span class="close" onclick="closeModal()">&times;</span>

                    <h2 id="modal-title"></h2>
                    <p>Jumlah Soal: &nbsp<span id="modal-soal"></span></p>
                    <p>Durasi: &nbsp<span id="modal-durasi"></span></p>

                    <button onclick="mulaiUjian()">Mulai Mengerjakan </button>
                    
                </div>

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


        // Modal konfirmasi

        function openModal(title, jumlahSoal, durasi) {
            document.getElementById("modal-title").textContent = title;
            document.getElementById("modal-soal").textContent = jumlahSoal;
            document.getElementById("modal-durasi").textContent = durasi;
            document.getElementById("modal-konfirmasi").classList.add("show");
        }

        function closeModal() {
            document.getElementById("modal-konfirmasi").classList.remove("show");
        }


        // Modal Info akun


        document.addEventListener("DOMContentLoaded", function () {

            const modalInfo = document.getElementById("Modal_infoakun");
            const btnClose = document.querySelector(".close-infoakun");

            function openInfoModal() {
                modalInfo.classList.add("show");
            }

            function closeInfoModal() {
                modalInfo.classList.remove("show");
            }

            btnClose.addEventListener("click", closeInfoModal);

            // Menutup modal jika klik di luar modal-content
            modalInfo.addEventListener("click", function (event) {
                if (event.target === modalInfo) {
                    closeInfoModal();
                }
            });

            // Trigger modal untuk contoh (bisa dipakai saat tombol ditekan)
            document.getElementById("btn-info-akun").addEventListener("click", openInfoModal);
        });




    </script>

<?= $this->endSection() ?>

</body>
</html>
