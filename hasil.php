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

  $result = mysqli_query($conn, "SELECT * FROM pendaftar");
 
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

  <h3>List Pendaftar</h3>

  <div class="table-responsive">

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Hp</th>
                <th>Semester</th>
                <th>IPK</th>
                <th>Beasiswa</th>
                <th>Berkas</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
    while($user_data = mysqli_fetch_array($result))
    {
  ?>
        <tbody>
            <tr>
                <td><?php echo $user_data['id'];?></td>
                <td><?php echo $user_data['nama'];?></td>
                <td><?php echo $user_data['email'];?></td>
                <td><?php echo $user_data['hp'];?></td>
                <td><?php echo $user_data['semester'];?></td>
                <td><?php echo $user_data['ipk'];?></td>
                <td><?php echo $user_data['beasiswa'];?></td>
                <td>
                <?php
                $file_path = 'upload/' . $user_data['berkas'];
                if (file_exists($file_path)) {
                  ?>
                  <a href="<?php echo $file_path; ?>" target="_blank">
                    Lihat Berkas
                  </a>
                  <?php
                } else {
                  echo 'Tidak ada berkas';
                }
                ?>
              </td>
                <td><?php echo $user_data['status'];?></td>
            </tr>
            <?php
    }
    ?>
        </tbody>
    </table>

     </div>

    </div>
    
  </div>

  

  </div>  
  </div>
</div>
</div>
</div><!--akhir dari container-->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>