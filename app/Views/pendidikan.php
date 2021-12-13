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
    <?= $this->include('component/navbar');?>
    <section Class="pendidikan">
      <div class="container">
        <div class="text-center">
          <h2>PENDIDIKAN</h2>
        </div>
        <div class="pendidikan card mb-">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="<?= base_url('assets/image/fakultas.jpg'); ?>" alt="unpab" width="380">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Program Diploma dan Sarjana.</h3>
                <p class="card-text">Program diploma dan sarjana adalah gelar pertama yang bisa kamu raih di universitas ini bagi kamu yang sedang mencari peluang untuk melanjutkan belajar di tingkat pendidikan tinggi. Kamu akan dapat memilih 12 program sarjana dan 2 program diploma pada bidang studi yang berbeda di universitas. Klik pada salah satu tautan yang tersedia di bawah ini untuk menemukan informasi detail tentang profil dari setiap program pendidikan.</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <h4>Fakultas Agama Islam dan Humaniora</h4>
              <p>Ilmu Filsafat</p>
              <p>Pendidikan Agama Islam</p>
              <p>pendidikan Islam Anak Usia Dini</p>
            </div>
            <div class="col">
              <h4>Fakultas Sosial Sains</h4>
              <p>Akuntansi</p>
              <p>Ekonomi Pembangunan</p>
              <p>Ilmu Hukum</p>
              <p>Manajemen</p>
              <p>Perpajakan</p>
            </div>
            <div class="col order-1">
              <h4>Fakultas Sains & Teknologi</h4>
              <p>Agroteknologi</p>
              <p>Peternakan</p>
              <p>Sistem Komputer</p>
              <p>Teknik Elektro</p>
              <p>Teknik Komputer</p>
              <p>Teknologi Informasi</p>
            </div>
          </div>
          <div class="row ">
            <div class="col-md-4">
              <img src="<?= base_url('assets/image/ruangan.jpg'); ?>" alt="unpab" width="380">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h3 class="card-title">Program Pascasarjana</h3>
                <p class="card-text">Universitas Pembangunan Panca Budi menawarkan pilihan program pendidikan pasca sarjana tingkat magister (S2).</p>
                <div class="col">
                  <h4>Fakultas Sains & Teknologi</h4>
                  <p>Magister Ilmu Hukum</p>
                  <p>Magister Manajemen</p>
                  <p>Magister Ekonomi</p>
                  <p>Magister Hukum Kesehatan</p>
                  <p>Magister Perencanaan Wilayah dan Kota</p>
                  <p>Magister Akuntansi</p>
                </div>
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