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
  <body>
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">HOME</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">TENTANG UNPAB</a>
        <a class="nav-link" href="#">PENDIDIKAN</a>
        <a class="nav-link" href="#">KEGIATAN</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
  </div>
</nav>
<!-- jumbotron  -->
<section class="jumbotron">
	<div class="container">
		<img src="<?= base_url('assets/image/logo-unpab.png'); ?>" alt="unpab" width="160">
		<h1 class= "fs-2" >UNIVERSITAS PANCABUDI</h1>
    <p class="lead">Mencetak Generasi Unggul Dan Religius.</p>
	</div>	
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L34.3,165.3C68.6,171,137,181,206,176C274.3,171,343,149,411,138.7C480,128,549,128,617,138.7C685.7,149,754,171,823,181.3C891.4,192,960,192,1029,176C1097.1,160,1166,128,1234,101.3C1302.9,75,1371,53,1406,42.7L1440,32L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>
<!-- akhir jumbotron -->

<!-- visi unpab -->
<section>
  <div class="container text-center">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Visi Universitas</h3>
        <h6 class="card-subtitle mb-2 text-muted">Membangun Desa, Membangun Indonesia.</h6>
        <p class="card-text">Desa merupakan garda terdepan dalam tolak ukur perkembangan Indonesia. Sehingga sudah selayaknya semangat dan energi pembangunan dikerahkan dari dan oleh pedesaan. Sebab dengan memulai dari desa, seluruh lapisan masyarakat akan dapat merasakan dampak dan kebaikan dari pembangunan. Kini sudah saatnya para insan terdidik bergerak aktif mengambil peran.</p>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,32L34.3,74.7C68.6,117,137,203,206,224C274.3,245,343,203,411,202.7C480,203,549,245,617,234.7C685.7,224,754,160,823,138.7C891.4,117,960,139,1029,170.7C1097.1,203,1166,245,1234,240C1302.9,235,1371,181,1406,154.7L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
</section>

<!-- akhir visi unpab -->

<!-- about -->
<section id="about" style="background-color: #e2edff;">
  <div class="container" >
    <div class="row">
      <div class="col text-center">
        <h2>Tentang Unpab</h2>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h4>Awal Mula Berdiri (1956)</h4>
        <p>Universitas Pembangunan Panca Budi semula berdiri dengan nama Akademi Metafisika, di bawah naungan Yayasan Akademi Metafisika. Didirikan pada tanggal 27 November 1956, oleh Prof. Dr. H. Kadirun Yahya, seorang veteran militer dan cendikiawan, ahli di bidang fisika dan kimia dan menguasai beberapa bahasa yaitu bahasa Inggris, Jerman dan Belanda, serta ahli di bidang ilmu filsafat spiritual.</p>
      </div>
    </div>
    <div class="row">
      <h4>Berganti Nama (1961)</h4>
      <p>Akademi Metafisika berubah menjadi Universitas Pembangunan Panca Budi dan tanggal 19 Desember 1961 ditetapkan sebagai tanggal berdirinya Universitas Pembangunan Panca Budi</p>
    </div>
    <div class="row">
      <h4>Mulai menggunakan Sistem E-Learning (2013)</h4>
      <p>Pembelajaran sistem daring UNPAB mulai beroperasi</p>
    </div>
    <div class="row">
      <h4>Peleburan 7 Fakultas Menjadi 4 Fakultas (2017)</h4>
      <p>Yakni Fakultas Agama Islam dan Humaniora, Fakultas Sains dan Teknologi, Fakultas Sosial Sains dan Program Pascasarjana.</p>
    </div>
    <div class="row">
      <h4>Dimulainya Program Berbasis Pengabdian Masyarakat (2020)</h4>
      <p>Program ini kemudian dikenal sebagai "Membangun Desa, Membangun Indonesia.</p>
    </div>
  </div>
</section>
<!-- akhir about -->




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