<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ujianku | Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Chewy&display=swap');
         
        body {
            background-image: url('assets/img/Background-dash2.png');
            background-size: 100% 100%; /* Paksa gambar mengisi seluruh layar */
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Buat body mengisi tinggi penuh layar */
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav {
            position: absolute;
            right: 30px;
            top: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            display: inline-block;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            background: rgba(25, 190, 85, 0.67);
            border-radius: 20px;
            display: inline-flex; /* Gunakan inline-flex agar elemen tetap sejajar */
            align-items: center;
            gap: 10px;
            padding: 20px 20px;
        }


        nav a span {
            white-space: nowrap;
            font-size: 1rem;
        }

        .sidebar {
            width: 95px;
            height: 100vh;
            background: linear-gradient(rgba(9, 100, 46, 0.82), rgb(10, 99, 42, 0.82), rgb(18, 118, 38, 0.82));
            color: white;
            transition: width 0.3s;
            position: fixed;
            font-size: 23px;
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 50px;
            font-family: "Poppins", sans-serif;
        }

        .sidebar .menu {
            padding: 10px;
            padding-top: 175px;
            
        }
        .sidebar .menu a {
            position: relative;
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: 5px;
            color: white;
            text-decoration: none;
            transition: all 0.1s ease-in-out;
        }
        .sidebar .menu a:hover {
            background: linear-gradient(to bottom right,rgba(28, 185, 91, 0.82), rgba(39, 185, 92, 0.82), rgba(10, 155, 39, 0.82));

            border-radius: 15px;
        }

        .sidebar .menu a.active{
            background: linear-gradient(to bottom right,rgba(28, 185, 91, 0.82), rgba(39, 185, 92, 0.82), rgba(10, 155, 39, 0.82));
            border-radius: 15px;

        }

        .menu a i{
            position: relative;
            z-index: 2; /* Supaya ikon di atas tooltip */
        }


        


        .menu a span {
            position: absolute;
            left: 120%;
            top: 50%;
            transform: translateY(-50%);
            background: linear-gradient(to bottom right,rgba(28, 185, 91, 0.82), rgba(39, 185, 92, 0.82), rgba(10, 155, 39, 0.82));


            color: white;
            padding: 8px 10px;  
            z-index: 10;
            border-radius: 5px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            box-shadow: 2px 2px 2px 0px rgba(10, 82, 34, 0.62);
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
        }

        

        /* Efek muncul tooltip saat hover */
        .menu a:hover span {
            opacity: 1;
            visibility: visible;
            transform: translateY(-50%) translateX(20px);
        }

        /* Tambahkan segitiga kecil pada tooltip */
        .menu a span::before {
            content: "";
            position: absolute;
            left: -10px;
            top: 50%;
            transform: translateY(-50%);
            border-width: 5px;
            border-style: solid;
            border-color: transparent rgba(12, 101, 36, 0.82) transparent transparent;
        }





/* ------------------------------------------------------- */
        .sidebar .logout {
            /* margin-top: 250px; */
            position: absolute;
            bottom: 80px;
            display: flex;
            align-items: center;
            padding: 15px;
            color: white;
            text-decoration: none;
            transition: all 0.1s ease-in-out;
        }

        a.logout:hover{
            background: rgba(237, 46, 36, 0.81);
            border-radius: 15px;
        }

        .logout .tooltip-logout{
            position: absolute;
            left: 120%;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(237, 46, 36, 0.81);
            color: white;
            padding: 8px 10px;  
            z-index: 10;
            border-radius: 5px;
            font-size: 14px;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease, transform 0.3s ease;
        }

        a.logout:hover span{
            opacity: 1;
            visibility: visible;
            transform: translateY(-50%) translateX(20px);
        }

        a.logout span::before{
            content: "";
            position: absolute;
            left: -9px;
            top: 50%;
            transform: translateY(-50%);
            border-width: 5px;
            border-style: solid;
            border-color: transparent rgba(237, 46, 36, 0.81) transparent transparent;
        }

        .logo {
            cursor: pointer;
            padding: 2px;
            text-align: center;
            background: rgba(245, 255, 249, 0.87);
            border-radius: 20px;
            display: flex;
            top: 25px;
            justify-content: center;
            align-items: center;
            position: absolute;
            padding: 5px;
            z-index: 10;
            
            /* Tambahkan transform awal dan transition */
            transition: transform 1s ease-in-out;
        }

        .logo.animate {
            animation: logo-rotate2 2s ease-in-out forwards alternate;
        }

        @keyframes logo-rotate {
            from {border-radius: 20px; transform: rotate(0deg);}
            to   {border-radius: 50%; transform: rotate(360deg);}
        }

        @keyframes logo-rotate2 {
            0% {
                border-radius: 20px;
                transform: rotate(0deg) scale(1);
            }
            50% {
                border-radius: 50%;
                transform: rotate(360deg);
            }
            75% {
                transform: translate(60px, 0px);
            }
            100% {
                transform: translate(80px, 0px) rotate(0deg) scale(2.5);
            }
            80% { /* Mulai kembali ke posisi awal */
                transform: translate(60px, 0px);
            }
            90% {
                transform: rotate(-10deg) translate(30px, 0px);
            }
            100% {
                transform: rotate(0deg) translate(0, 0) scale(1);
            }
        }



        .logo img{
            padding: 5px 2px;
            z-index: 5;
        }

        /* End Sidebar CSS */


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
            background: rgba(143, 218, 179, 0.72);
            position: relative;
            border-radius: 10px;
            left: 115px;
            top: 0px;

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
        .status-merah { background:rgb(204, 69, 69); }  /* Belum dimulai */
        .status-hijau { background:rgb(16, 104, 45); } /* Ujian bisa di mulai */



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

            top: 0px;
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
</head>
<body>

    <nav>
        <ul>
            <li>
                <a href="#">
                    <span class="profil-usre">$Username</span><i class="fa-solid fa-user"></i>
                </a>
            </li>
        </ul>
    </nav>

    <div class="sidebar">

            <div class="logo">
                <img src="<?= base_url('assets/img/logo-ujianku.png')  ?>" alt="" height="40" width="50">
            </div>

            <div class="menu">

                <a href="#" class="active">
                    <i class="fas fa-home"></i>
                    <span class="tooltip-home">Home</span>
                </a>
                <a href="/siswa/kisi-kisi">
                    <i class="fa-solid fa-book-open"></i>
                    <span class="tooltip-kisi2">Kisi-kisi</span>
                </a>
                <a href="/siswa/jadwal-ujian">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="tooltip-jadwal">Jadwal Ujian</span>
                </a>
                <a href="/siswa/riwayat-ujian">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="tooltip-riwayat">Riwayat Ujian</span>

                </a>
            </div>

            <a href="#" class="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="tooltip-logout">Logout</span>
            </a>
    </div>  <!-- End Sidebar -->


    <div class="container">


        
        <div class="welcome-message">
            <h2>Selamat Datang $user</h2>
            <p>Wah $user sudah siap untuk ujian nih?  semoga berhasil ya Ujianya 😁👍 </p>
        </div> <!-- End welcome-mesasage-->




        <div class="fitur-lain">
            <a href="siswa/kisi-kisi" class="kisi-kisi"><i class="fa-solid fa-book-open"></i> Kisi-kisi</a>
            <a href="siswa/jadwal-ujian" class="jadwal-ujian"><i class="fa-solid fa-calendar"></i> Jadwal Ujian</a>
            <a href="siswa/riwayat-ujian" class="riwayat-ujian"><i class="fa-solid fa-clock-rotate-left"></i> Riwayat Ujian</a>
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
</body>
</html>
