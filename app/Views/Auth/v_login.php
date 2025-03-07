<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UjianKu &nbsp | &nbsp Login</title>
</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

   body {
        background-image: url('assets/img/Background2.png');
        background-size: 100% 100%; /* Paksa gambar mengisi seluruh layar */
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh; /* Buat body mengisi tinggi penuh layar */
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav {
        top: 0px;
        left: 0px;
    }

    nav ul li {
        display: flex;
        gap: 10px;

    }



    .des-logo{
        opacity: 1;
        font-family: 'Poppins';
        margin-top: 15px;
        font-weight: 600;
        background: ;
        padding-left: 15px;
        color: rgb(33, 147, 75);
        border-left: 2px solid rgba(1, 1, 1, 0.21);
    }

    .des-logo-purple{
        color: rgb(118, 48, 188);
        
    }

    /* ---------- End nav --------------------- */


    .siswa-belajar{
        position: absolute;
        right: 100px;
        margin-top: 50px;
        animation: floating 3s ease-in-out infinite; /* Durasi 3s, smooth, dan infinite */
    }

    .siswa-belajar img{
        max-height: 1000px;
        max-width: 1000px;
        transition: opacity 1s ease-in-out;
        opacity: 1;
    }


    @keyframes floating {

    0% { transform: translateY(0); }
    50% { transform: translateY(10px); } /* Naik 10px */
    100% { transform: translateY(0); } /* Kembali ke posisi awal */

    }


    /* form input */



    .container{
        height: 300px;
        width: 300px;
        position: absolute;
        margin-top: 120px;
        left: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-family: 'Poppins';

    }

    .container h2{
        color: rgba(1, 1, 1, 0.46);
        position: relative; 
        margin-bottom: 40px;
        display: flex;
        margin-left: 60px;
    }

    .container .text-green{
        color: rgba(29, 177, 78, 0.88);
        
    }

    .input-group {
        position: relative;
        margin-bottom: 20px;
        display: inline-block;
    }

    .input-group input {
        width: 125%;
        padding: 15px;
        padding-right: 30px;
        border: 2px solid #ccc;
        border-radius: 15px;
        font-size: 16px;
        outline: none;
        transition: 0.3s;
        background: transparent;
        color: rgb(31, 139, 63);
    }

    .input-group input:focus{
        /* outline: 2px solid rgb(33, 181, 112);  */
        border-color: rgb(33, 181, 112); /* Opsional: ganti warna border juga */
        box-shadow: 0 0 5px rgba(33, 181, 112, 0.5); /* Efek glow */
    }

    .input-group i {
        position: absolute;
        right: 10px;
        cursor: pointer;
        color: gray;
    }

    .input-group label {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: white;
        padding: 0 5px;
        color: #aaa;
        font-size: 16px;
        transition: 0.3s;
        pointer-events: none;
    }

    .input-group input:focus + label,
    .input-group input:not(:placeholder-shown) + label {
        top: 0;
        left: 10px;
        font-size: 12px;
        color: rgb(33, 181, 112); /* Ubah warna label saat input fokus */

    }


    .btn-submit{
        background: rgb(33, 181, 112);
        width: 117%;
        color: white;
        font-size: 1em;
        border: none;
        margin-top: 10px;
        padding: 17px 20px;
        border-radius: 15px;
        cursor: pointer;
        font-weight: bold;
        transition: all .3s ease-in-out;
    }
    
    .btn-submit:hover{
        background: rgb(23, 167, 99);
        box-shadow: 0px 0px 10px 1px rgb(78, 142, 105) inset;
        
    }

    .tooltip {
        display: none;
        position: absolute;
        transform: translate(340px, -50px) scale(0.8);
        background-color: rgba(185, 58, 58, 0.9);
        color: white;
        padding: 10px;
        border-radius: 10px;
        font-size: 12px;
        opacity: 0;
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .tooltip::after {
        content: "";
        display: block;
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-right: 10px solid rgba(185, 58, 58, 0.9);
        position: absolute;
        top: 50%;
        left: -9px;
        transform: translateY(-50%);
        z-index: 2;
    }

    /* Saat tooltip muncul */
    .tooltip.show {
        display: block;
        opacity: 1;
        transform: translate(335px, -38px) scale(1);
    }



</style>

<body>

    <nav>
        <ul>
            <li>
                <a href="#"><img src="<?= base_url('assets/img/logo-ujianku.png') ?>" alt="logo" height="80" width="100"></a>
                <span class="des-logo">Platform Ujian Online</br> yang <span class="des-logo-purple">Mudah dan Cepat! </span> </span>
            </li>
        </ul>
    </nav>


    <div class="container">

        <h2>Login to&nbsp<span class="text-green">Dashboard</span></h2>

        <form action="" id="loginForm">

            <div class="input-group" >
                <input type="text" id="username" name="username" placeholder=" " autocomplete="off" >
                <label for="username">Username</label>
                <span class="tooltip" id="tooltip-username">Username harap diisi!</span>
            </div>
            
            <div class="input-group">
                <input type="password" id="password" name="password" placeholder=" " autocomplete="off" >
                <label for="password">Password</label>
                <i class="fa fa-eye" id="togglePassword"></i>
                <span class="tooltip" id="tooltip-password">Password harap diisi!</span>
            </div>

            <button type="submit" class="btn-submit">Login</button>
            
        </form>

    </div>




    <div class="siswa-belajar">
         <img src="<?=  base_url('assets/img/siswa-belajar2.png') ?>" alt="siswa-belajar" id="floatingImage">   
    </div>





    <script>

        // Script untuk membuat image slider

        const images = ["assets/img/siswa-belajar2.png", "assets/img/siswa-belajar.png", "assets/img/guru1.png", "assets/img/guru-mengajar.png"];

        let index = 0;

        const imgElement = document.getElementById("floatingImage");

        setInterval(() => {
            // Fade out dulu    
            imgElement.style.opacity = "0.1"; // Biar ga langsung hilang total

            setTimeout(() => {
                index = (index + 1) % images.length; // Ganti index gambar
                imgElement.src = images[index]; // Ubah gambar
                imgElement.style.opacity = "1"; // Fade in lagi
            }, 500); // Delay 1 detik sebelum fade in gambar baru
        }, 5000);


        // Script untuk custom alert tooltip jika input kosong

        document.getElementById("loginForm").addEventListener("submit", function(event) {
            let username = document.getElementById("username");
            let password = document.getElementById("password");
            let tooltipUsername = document.getElementById("tooltip-username");
            let tooltipPassword = document.getElementById("tooltip-password");

            let isValid = true;

            if (!username.value) {
                showTooltip(tooltipUsername);
                isValid = false;
            }

            if (!password.value) {
                showTooltip(tooltipPassword);
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Cegah submit jika ada input kosong
            }
        });

        function showTooltip(tooltip) {
            tooltip.style.display = "block";
            setTimeout(() => {
                tooltip.classList.add("show");
            }, 10); // Delay kecil supaya efek transition bisa jalan

            setTimeout(() => {
                tooltip.classList.remove("show");
                setTimeout(() => {
                    tooltip.style.display = "none";
                }, 500); // Delay sebelum di-hide agar efek hilangnya smooth
            }, 3000);
        }



        // Script untuk enter next input 


        document.addEventListener("DOMContentLoaded", function() {

            let inputs = document.querySelectorAll(".input-group input"); // Ambil semua input
            let submitButton = document.querySelector("button[type='submit']"); // Ambil tombol submit

            inputs.forEach((input, index) => {
                input.addEventListener("keydown", function(event) {
                    
                    if (event.key === "Enter") {
                        event.preventDefault(); // Hindari submit form default
                        let nextInput = inputs[index + 1]; // Ambil input berikutnya
                        
                        if (nextInput) {
                            nextInput.focus(); // Fokus ke input berikutnya
                        } else {
                            submitButton.click(); // Jika input terakhir, klik tombol submit
                        }
                    }
                });
            });
        });


        
    </script>
</body>
</html>