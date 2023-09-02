<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="mycss.css">

    <title>Hello, world!</title>
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar navbar-dark bg-dark"> 
     <a class="navbar-brand" href="index.php">Pendaftaran Beasiswa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
    <a class="nav-item nav-link active" href="index.php">Jenis Beasiswa <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link active" href="pendaftaran.php">Pendaftar <span class="sr-only">(current)</span></a>
    <a class="nav-item nav-link active" href="hasil.php">Hasil <span class="sr-only">(current)</span></a>
    </div>
  </div>
</nav>

  <div class="container">

    <h4>Jenis Beasiswa</h4>
    <p>Beasiswa adalah bentuk dukungan finansial, materi, atau non-finansial yang diberikan kepada individu dengan tujuan 
      membantu mereka dalam mengejar pendidikan atau pelatihan di tingkat yang lebih tinggi. 
      Beasiswa dapat berasal dari berbagai sumber, termasuk lembaga pendidikan, pemerintah, 
      yayasan swasta, perusahaan, atau organisasi nirlaba.</p>

      <ol>
        <li>
          <h5>Beasiswa Akademik</h5>
        <p>Beasiswa akademik adalah bentuk dukungan finansial atau materi yang diberikan kepada individu,
           biasanya mahasiswa, untuk membantu mereka dalam mengejar pendidikan tinggi atau akademik. 
           Tujuan dari beasiswa akademik adalah untuk mendorong prestasi akademik yang tinggi dan memberikan kesempatan 
           kepada individu yang memiliki potensi untuk berkontribusi dalam bidang akademik atau profesional tertentu.
          </p>
          <p>Adapun persyaratan yang di butuhkan adalah </p>
          <ul>
            <li><p>Prestasi Akademik yang Baik</p></li>
            <li><p>Motivasi dan Tujuan</p></li>
            <li><p>Bukti Kebutuhan Finansial</p></li>
          </ul>
          <p>Beasiswa ini bisa mencakup biaya kuliah, biaya buku, biaya hidup, atau komponen lain yang terkait dengan pendidikan.</p>
          <a class="btn btn-secondary btn-lg my-large-btn" href="pendaftaran.php?link_page=2&jenis_beasiswa=akademik">Daftar sekarang</a>
      </li>

      <li>
          <h5>Beasiswa Non Akademik</h5>
          <p>Beasiswa nonakademik adalah bentuk dukungan finansial atau materi yang diberikan kepada individu 
          berdasarkan faktor-faktor di luar prestasi akademik mereka. Beasiswa ini diberikan berdasarkan bakat khusus,
           minat, kepemimpinan, kontribusi sosial, atau karakteristik pribadi lainnya, yang tidak terkait langsung dengan pencapaian 
           akademik.
          </p>
          <p>Adapun persyaratan yang di butuhkan adalah</p>
          <ul>
            <li><p>Bakat atau Prestasi Khusus</p></li>
            <li><p>Portofolio atau Demonstrasi Kreatif</p></li>
            <li><p>Dokumen Pendukung Lainnya</p></li>
          </ul>
          <p>Setiap jenis beasiswa nonakademik memiliki kriteria dan persyaratan yang unik, 
            yang biasanya mencakup demonstrasi bakat khusus, bukti prestasi di bidang tertentu, wawancara, 
            dan portofolio kreatif, tergantung pada jenis beasiswa yang ditawarkan.
          </p>
          <a class="btn btn-secondary btn-lg my-large-btn" href="pendaftaran.php?link_page=2&jenis_beasiswa=nonakademik">Daftar sekarang</a>
        </li>
      </ol>
    </div>
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>