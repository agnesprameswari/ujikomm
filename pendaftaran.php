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
    <?php
    
    include_once("connection.php");

    //mendeteksi jenis beasiswa yang di pilih dari halaman pilihan beasiswa
    if (isset($_GET['jenis_beasiswa'])) {
      $jenis_beasiswa = $_GET['jenis_beasiswa'];
    } else{
      $jenis_beasiswa = "akademik";
    }

    //function yang di gunakan untuk menentukan jenis beasiswa
   function SetBeasiswa($actual_beasiswa,$reference_beasiswa){
    $result = "";
    if($actual_beasiswa == $reference_beasiswa){
      $result = "selected";
    }
    return $result;
  }

  

    ?>


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
  <h4>Form Pendaftar</h4>
<form action="add_pendaftar.php" method="post" enctype="multipart/form-data">
<div class="form-group row">
  <label for="nama" class="col-sm-2 col-form-label">Masukan Nama</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputnama" name="nama" placeholder="Nama" required required pattern="^[^ ,.]+$">
  </div>
</div>

<div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label">Masukan Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" id="inputemail" name="email" placeholder="Email" required>
  </div>
</div>

<div class="form-group row">
  <label for="hp" class="col-sm-2 col-form-label">Nomor HP</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="hp" name="hp" placeholder="Nomor HP"required min="0">
  </div>
</div>

<div class="form-group row">
  <label for="semester" class="col-sm-2 col-form-label">Semester saat ini</label>
  <div class="col-sm-10">
    <select class="form-control" id="semester" name="semester" required>
      <?php
        for($i=1; $i<=8; $i++)
        {
      ?>
        <option value="<?php echo $i?>"><?php echo $i?></option>
        <?php
        }
        ?>
    </select>
  </div>
</div>

<div class="form-group row">
  <label for="ipk" class="col-sm-2 col-form-label">IPK terakhir</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputipk" name="ipk"required readonly>
  </div>
</div>


<div class="form-group row">
    <label for="beasiswa" class="col-sm-2 col-form-label">Pilihan Beasiswa</label>
    <div class="col-sm-10">
      <select class="form-control" id="beasiswa" name="beasiswa" required >
        <option value="akademik" <?php echo SetBeasiswa("akademik", $jenis_beasiswa)?>>Akademik</option>
        <option value="nonakademik"<?php echo SetBeasiswa("nonakademik", $jenis_beasiswa)?>>Non Akademik</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label" for="upload_file" >Choose File</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" id="customfile" name="berkas" required>
    </div>
  </div>


  <input class="btn btn-secondary btn-lg" type="submit" id="tomboldaftar" value="Daftar">
  <a class="btn btn-warning btn-lg" href="pendaftaran.php?link_page=2">Batal</a>

</form>
</div>



<!-- Modal -->
<div class="modal fade" id="warning" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">warning</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Email salah format</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


</div>
</div>


<script src="jquery.js"></script>
<script src="myjs.js"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>