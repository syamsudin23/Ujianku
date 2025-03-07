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


        .mapel {
            background: linear-gradient(to bottom right, rgba(28, 185, 91, 0.82), rgba(36, 147, 77, 0.82), rgba(37, 172, 64, 0.82));
            padding: 15px 30px;
            border-radius: 15px;
            cursor: pointer;
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
            height: 75px; /* Atur tinggi */
            white-space: nowrap; /* Mencegah teks turun ke bawah */
            overflow: hidden; /* Jika teks terlalu panjang, disembunyikan */
            text-overflow: ellipsis; /* Tambahkan "..." jika teks melebihi */
        }



        .mapel:hover{
            box-shadow: 5px 5px 0px 0px rgb(9, 121, 48);
            background: linear-gradient(to bottom right,rgba(19, 150, 71, 0.82), rgba(35, 140, 74, 0.82), rgba(26, 158, 83, 0.82));
        }

        #searchInput {
            padding: 15px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 10px;
            position: absolute; 
            right: 100px;
            top: 40px;
        }

        #searchInput:focus{
            border: 2px solid #4CAF50; /* Ganti warna border saat fokus */
            outline: none; /* Hilangkan outline default */
            background-color: #f0fff0; /* Warna background saat fokus */ 
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



        .modal {
            display: none; 
            position: fixed; 
            left: 0; top: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.66);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0; 
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s;
            z-index: 10;
        }

        .modal-content {
            background: rgba(65, 213, 134, 0.87);
            font-family: 'Poppins';
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 600px;
            height: 400px;
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
            text-align: left;
            color: rgba(1, 1, 1, 0.62);
            font-weight: 500;
            left: 0px;
        }

        .modal-content button{
            position: absolute;
            bottom: 20px;
            left: 20px;
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
            color:rgb(14, 82, 45);
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
            <h2>Halaman Kisi-kisi</h2>
            <p>Ayo baca dulu kisi2 nya biar ulanganmu nilainya bagus 😁👍 </p>
        </div> <!-- End welcome-mesasage-->




        <div class="daftar-ujian">
            <h3>Daftar kisi-kisi yang tersedia,  &nbsp Kelas XI</h3>
            <input type="text" id="searchInput" placeholder="Cari mapel..." onkeyup="filterMapel()">
            

            <div class="container-mapel">

                <div class="mapel mapel1" onclick="openModal('Pemrograman Web')">Pemograman Web </div>
                <div class="mapel mapel2" onclick="openModal('Visual Basic')">Visual Basic</div>
                <div class="mapel mapel3" onclick="openModal('Game Developer')">Game Developer</div>
                <div class="mapel mapel4" onclick="openModal('Bahasa Indonesia')">Bahasa Indonesia</div>
                <div class="mapel mapel4" onclick="openModal('Bahasa Inggris')">Bahasa Inggris</div>
                <div class="mapel mapel4" onclick="openModal('PPKN')">PPKN</div>
                <div class="mapel mapel4" onclick="openModal('PJOk')">PJOK</div>
                <div class="mapel mapel4" onclick="openModal('Metematika')">Matematika</div>
                <div class="mapel mapel4" onclick="openModal('PAI')">PAI</div>
                <div class="mapel mapel4" onclick="openModal('Sejarah')">Sejarah</div>
                <div class="mapel mapel4" onclick="openModal('PKK')">PKK</div>

            </div>

            <div id="modal-konfirmasi" class="modal">

                <div class="modal-content">

                    <span class="close" onclick="closeModal()">&times;</span>

                    <h2 id="modal-title"></h2>
                    <p><span id="note-kisi-kisi">
                        Catatan guru saat membuat kisi2,  bisa untuk nulis isi materi atau menjelaskan materi untuk ujian nanti itu apa saja...
                        </br></br> Contoh: 
                        <br></br> Materi 1 - tentang bla bla bla
                        <br> Materi 2 - tentang bla bla bla
                       
                    </span></p>

                    <button>Download File Kisi-kisi</button>
                    
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



        // seleksi input search mapel kisi-kisi

        
        function filterMapel() {
            let input = document.getElementById("searchInput").value.toLowerCase();
            let mapels = document.querySelectorAll(".container-mapel .mapel");

            mapels.forEach(function(mapel) {
                let text = mapel.textContent.toLowerCase();
                if (text.includes(input)) {
                    mapel.style.display = "block"; // Munculkan jika cocok
                } else {
                    mapel.style.display = "none";  // Sembunyikan jika tidak cocok
                }
            });
        }


    </script>

<?= $this->endSection() ?>

</body>
</html>
