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
            gap: 50px;
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

        

        .container-card {
            width: 80%;
            max-width: 600px;
        }
        .card {
            background: linear-gradient(to bottom right,rgba(28, 185, 91, 0.82), rgba(39, 185, 92, 0.82), rgba(10, 155, 39, 0.82));
            font-family: 'Poppins';
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 15px;
            border-left: 5px solid #2e7d32;
        }
        .card h3 {
            
            color:rgb(12, 77, 42);
        }
        .card p {
            margin: 5px 0;
            color: #333;
        }






        

        .footer{
            background: rgba(21, 176, 93, 0.72);
            position: absolute;
            height: 70px;
            width: 1300px;

            left: 115px;
            bottom: 15px;
            border-radius: 10px;
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
            <h2>Halaman Riwayat Ujian</h2>
            <p>Ini adalah halaman kamu bisa melihat Riwayat ujian yang sudah kamu kerjakan... </p>
        </div> <!-- End welcome-mesasage-->




        <div class="daftar-ujian">
            <h3>Riwayat Ujian kamu,</h3>

            <div class="container-mapel">

                <div class="container-card">

                    <div class="card">
                        <h3>Matematika</h3>
                        <p><i class="fa-solid fa-calendar-days"></i>&nbsp; Senin, 4 Maret 2024</p>
                        <p><i class="fa-solid fa-clock"></i>&nbsp; 08:00 - 09:30</p>
                    </div>

                    <div class="card">
                        <h3>Bahasa Inggris</h3>
                        <p><i class="fa-solid fa-calendar-days"></i>&nbsp; Selasa, 27 Februari 2024</p>
                        <p><i class="fa-solid fa-clock"></i>&nbsp; 10:00 - 11:30</p>
                    </div>

                    <div class="card">
                        <h3>Fisika</h3>
                        <p><i class="fa-solid fa-calendar-days"></i>&nbsp; Jumat, 16 Februari 2024</p>
                        <p><i class="fa-solid fa-clock"></i>&nbsp; 07:30 - 09:00</p>
                    </div>

                </div>

            </div>

            

        </div> <!-- End daftar-ujian-->


        <div class="footer">
            <h4>&copy All rights reversed by Ujianku</h4>
        </div>






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

<?= $this->endSection() ?>> 

</body>
</html>
