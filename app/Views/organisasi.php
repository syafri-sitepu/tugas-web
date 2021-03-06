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
  <body id="home">
    <section class="organisasi">
    <?= $this->include('component/navbar');?>
    <div class="container">
      <div class="text-center">
        <h2>Akativitas Sivitas Akademika</h2>
      </div>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="<?= base_url('assets/image/webinar-1.jpeg'); ?>" alt="unpab" width=>
            <div class="card-body">
              <h5 class="card-title">Urgensi Pembentukan Satgas Pencegahan Pelecehan Seksual di Limgkungan UNPAB</h5>
              <p class="card-text">Narasumber : Dr. Marzuki Sinambela, M.T </p>
              <p class="card-text">Tanggal : 4 Desember 2021 </p>
              <p class="card-text">Jam : 09.00 WIB - Selesai </p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?= base_url('assets/image/webinar-2.jpeg'); ?>" alt="unpab" width=>
            <div class="card-body">
              <h5 class="card-title">Meningkakan Kreatifitas, Inovasi, dan Potensi Mahasiswa Melalui PKM Pasca Pandemi</h5>
              <p class="card-text">Narasumber : Ibnu Ubaidillah (kak ubai)</p>
              <p class="card-text">Tanggal : 22 Desember 2021 </p>
              <p class="card-text">Jam : 13.00 WIB - Selesai </p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?= base_url('assets/image/webinar-3.jpeg'); ?>" alt="unpab" width=>
            <div class="card-body">
              <h5 class="card-title">Hidroponik, Solusi Lahan Pertanian Perkotaan</h5>
              <p class="card-text">Narasumber : T. Henny Harumi, S.Kom., M.Kom</p>
              <p class="card-text">Tanggal : 16 November 2021 </p>
              <p class="card-text">Jam : 14.00 WIB - Selesai </p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="<?= base_url('assets/image/webinar-4.jpeg'); ?>" alt="unpab" width=>
            <div class="card-body">
              <h5 class="card-title">Edukasi Teknologi Informasi Sebagai Solusi Untuk Mitigasi Bencana</h5>
              <p class="card-text">Narasumber : Dr. Marzuki Sinambela, M.T </p>
              <p class="card-text">Tanggal : 31 Agustus 2021 </p>
              <p class="card-text">Jam : 12.00 WIB - Selesai </p>
              
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-3">
            <img src="<?= base_url('assets/image/webinar-5.jpeg'); ?>" alt="unpab" width=>
            <div class="card-body">
              <h5 class="card-title">Membangun Kreativitas Mahasiswa Melalui PKM di Masa Pandemi</h5>
              <p class="card-text">Narasumber : Mei Ryan Sandi, S.P </p>
              <p class="card-text">Tanggal : 13 November 2021 </p>
              <p class="card-text">Jam : 10.00 WIB - Selesai </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
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