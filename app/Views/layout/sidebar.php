
<div class="sidebar">

            <div class="logo">
                <img src="<?= base_url('assets/img/logo-ujianku.png')  ?>" alt="" height="40" width="50">
            </div>

            <div class="menu">

                <a href="<?= base_url('siswa/dashboard'); ?>" 
                class="<?= ($active_page == 'dashboard') ? 'active' : '' ?>">  

                    <i class="fas fa-home"></i>
                    <span class="tooltip-home">Home</span>
                </a>

                <a href="<?= base_url('siswa/kisi-kisi'); ?>" 
                class="<?= ($active_page == 'kisi-kisi') ? 'active' : '' ?>">

                    <i class="fa-solid fa-book-open"></i>
                    <span class="tooltip-kisi2">Kisi-kisi</span>
                </a>
                
                <a href="<?= base_url('siswa/jadwal-ujian'); ?>"
                class="<?= ($active_page == 'jadwal-ujian') ? 'active' : '' ?>">

                    <i class="fa-solid fa-calendar"></i>
                    <span class="tooltip-jadwal">Jadwal Ujian</span>
                </a>

                <a href="<?= base_url('siswa/riwayat-ujian'); ?>"
                class="<?= ($active_page == 'riwayat-ujian') ? 'active' : '' ?>">

                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="tooltip-riwayat">Riwayat Ujian</span>

                </a>
            </div>

            <a href="#" class="logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span class="tooltip-logout">Logout</span>
            </a>
            
    </div>  <!-- End Sidebar -->