<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	  <!-- my css -->
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet"/>

    <title>Universitas Pancabudi</title>
  </head>
    <!-- jumbotron -->
  <body id="home">
    <?= $this->include('component/navbar');?>
    <section class="fasilitas ">    
        <div class="jumbotron">
            <div class="container pb-3">
                <img src="<?= base_url('assets/image/logo-unpab.png'); ?>" alt="unpab" width="160">
                <h1 class= "fs-2" >Fasilitas Kampus Sebagai Sarana Dukung.</h1>
                <p>Berbagai fasilitas kampus di Universitas Pembangunann Panca Budi yang bisa kamu manfaatkan sebagai mahasiswa untuk mendapatkan pengalaman belajar yang terbaik selama menempuh studi di kampus tamadun mandiri.</p>
            </div>
       </div>
    </section>
    <!-- akhir jumbotron -->

    <!-- fasilitas -->
    <section class="" style="background-color: #e2edff">
        <div class="container pt-3">
            <div class="row">
                <div class="col">
                    <h3>Perpustakaan</h3>
                    <p>Perpustakaan UNPAB telah meraih Akreditas A.</p>
                </div>
                <div class="col">
                    <h3>Laboratorium Yang Lengkap</h3>
                    <p>Laboratorium Komputer, Laboratorium Elektro, Laboratorium Studi Arsitektur, dll.</p>
                </div>
                <div class="col">
                    <h3>SISTEM PEMBELAJARAN BERBASIS ONLINE</h3>
                    <p>Sistem Pembelajaran Berbasis Online</p>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <h3>KANTIN KAMPUS</h3>
                    <p>Beranda Cafe, Laziz Centro merupakan fasilitas kantin yang nyaman dan asri.</p>
                </div>
                <div class="col">
                    <h3>MINI MARKET</h3>
                    <p>PadiMART, merupakan minimarket yang berada ditengah-tengah kampus sebagai fasilitas layanan belanja untuk mahasiswa.</p>
                </div>
                <div class="col">
                    <h3>FASILITAS IBADAH</h3>
                    <p>Masjid Darul Amin dan Musholah Az-Zuhdi merupakan tempat untuk beribadah yang nyaman dan asri untuk Civitas Akademika UNPAB.</p>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <h3>RUANG KELAS</h3>
                    <p>Ruang kelas dilengkapi AC dan Proyektor.</p>
                </div>
                <div class="col">
                    <h3>FREE WIFI</h3>
                    <p>Fasilitas akses internet tersedia di seluruh area kampus.</p>
                </div>
                <div class="col">
                    <h3>ATM CENTER, KANTOR KAS BANK</h3>
                    <p>Adanya pusat ATM dan Kantor Kas Bank (BSI dan BRI), merupakan fasilitas yang disetiakan untuk Mahasiswa menabung maupun membayar biaya kuliah.</p>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <h3>SMOKING AREA</h3>
                    <p>Tidak semua area kampus bebas untuk merokok, maka terdapat beberapa area khusus untuk tempat merokok. Jangan lupa tempatnya ya!!!</p>
                </div>
                <div class="col">
                    <h3>PARKIR YANG LUAS</h3>
                    <p>Bagi mahasiswa yang membawa kendaraan, terdapat area parkir yang luas.</p>
                </div>
                <div class="col">
                    <h3>FASILITAS OLAHRAGA DAN SENI</h3>
                    <p>Lapangan Bola, Lapangan Gate Ball, Lapangan Voli, Lapangan Badminton, Ampi Teater, Saung Seni merupakan fasilitas yang di sediakan bagi seluruh civitas akademika dalam berolahraga dan kesenian.</p>
                </div>
                
            </div>
        </div>
    </section>
    <!-- akhir fasilitas -->

    <!-- footer -->
    <footer class="text-info bg-dark pt-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <h4>UNIVERSITAS PEMBANGUNAN PANCA BUDI</h4>
            <p>Universitas Pembangunan Panca Budi adalah Perguruan Tinggi tertua di Kota Medan yang memiliki spirit Tamadun Mandiri, yaitu spirit yang menggabungkan nilai-nilai tradisional dan modern.</p>
          </div>
          <div class="col">
            <h4>LAYANAN DIGITAL</h4>
            <p>Penerimaan Mahasiswa Baru</p>
            <p>Portal Mahasiswa</p>
            <p>Portal Dosen</p>
            <p>E-Learning</p>
          </div>
          <div class="col">
            <h4>Pendidikan</h4>
            <p>Program Pasca Sarjana</p>
            <p>Fakultas Agama & Humaniora</p>
            <p>Fakultas Sosial Sains</p>
            <p>Fakultas Sains & Teknologi</p>
          </div>
          <div class="col-md-4">
            <h4>KONTAK</h4>
            <p>Jl. Jend. Gatot Subroto KM 4.5 Sei Sikambing. Medan. Indonesia</p>
            <p>Medan ~ Sumatera Utara ~ Indonesia</p>
            <p>Telp. 061 845 5571</p>
            <p>Email. Unpab@Pancabudi.Ac.Id</p>
          </div>
        </div>
      </div>
    </p></footer>
    <!-- akhir footer -->




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>