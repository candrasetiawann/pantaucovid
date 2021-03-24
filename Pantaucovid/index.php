<?php
//Data corona indonesia
error_reporting(0);
ini_set('display_errors', 0);
$dataIndonesia = file_get_contents('https://api.kawalcorona.com/indonesia');
$di = json_decode($dataIndonesia, true);
?>
<?php foreach ($di as $row): ?>
<?php
$diPositif = $row['positif'];
$diSembuh = $row['sembuh'];
$diMeninggal = $row['meninggal'];
?>
<?php endforeach; ?>
<?php
//Data corona Berdasarkan provinsi
$dataProvinsi = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
$dp = json_decode($dataProvinsi, true);
?>
<?php
//Data corona Berdasarkan Negara
$dataNegara = file_get_contents('https://api.kawalcorona.com/');
$dn = json_decode($dataNegara, true);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!--- META DATA --->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PantauCovid - Informasi tentang penyebaran virus corona</title>
  <meta name="keywords" content="Data Corona,Informasi Virus Corona">
  <!-- Primary Meta Tags -->
  <meta name="title" content="PantauCovid">
  <meta name="description" content="Informasi data terbaru tentang virus corona di seluruh dunia">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:title" content="PantauCovid">
  <meta property="og:description" content="Informasi data terbaru tentang virus corona di seluruh dunia">
  <meta property="og:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="">
  <meta property="twitter:title" content="PantauCovid">
  <meta property="twitter:description" content="Informasi data terbaru tentang virus corona di seluruh dunia">
  <meta property="twitter:image" content="https://metatags.io/assets/meta-tags-16a33a6a8531e519cc0936fbba0ad904e52d35f34a46c97a2c9f6f7dd7d336f2.png">

  <!-- bootstrap css--->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!--- kustom css-->
  <link rel="stylesheet" href="css/navbar-top-fixed.css" type="text/css" media="all" />
  <link rel="stylesheet" href="assets/css/index.css" type="text/css" media="all" />
  <!--- end--->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <!---font diatas judul_corona---->

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <!--font diatas deskripsi--->

  <link rel="stylesheet" href="css/navbar-font.css" type="text/css" media="all" />

  <!---aos library scroll--->
  <link rel="stylesheet" href="assets/css/aos.css" type="text/css" media="all" />

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
  <!--- css tabel--->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css " type="text/css" media="all" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css " type="text/css" media="all" />
  <link rel="shortcut icon" href="assets/icon.png" type="image/x-icon" />
</head>
<body>

  <!-- navbar --->
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-white">
    <a class="navbar-brand" href="#"><span class="navbar-span">PantauCovid</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse nav-transparent" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a data-easing="linear" class="nav-link" href="#"><span class="nav-span">Beranda</span> </a>
        </li>
        <li class="nav-item">
          <a data-easing="linear" class="nav-link" href="#page1"><span class="nav-span">Indonesia</span></a>
        </li>
        <li class="nav-item">
          <a data-easing="linear" class="nav-link" href="#page2"><span class="nav-span">Provinsi</span></a>
        </li>
        <li class="nav-item">
          <a data-easing="linear" class="nav-link" href="#page3"><span class="nav-span">Negara</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link klik_menu" id="about" href="about.php"><span class="nav-span">About</span></a>
        </li>
      </ul>
    </div>
  </nav>

  <!--hero section--->
  <section class="hero">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="judul_corona"><span class="coronavirus">Coronavirus</span> global & Indonesia</h2>
          <p class="deskripsi">
            Informasi mengenai kasus <span class="coronavirus">virus corona</span> atau <span class="coronavirus">COVID19</span> di seluruh dunia
          </p>
        </div>
        <div class="col">
          <div class="text-center">
            <img width="200" src="assets/img/covid/130-Covid-Virus.png" class="rounded" alt="...">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--indonesia-->
  <section class="indo">
    <div class="indopart">
      <h2 class="text-nesia">Indonesia</h2>
      <p id="page1" class="text-indo-deskripsi">
        Daftar kasus virus corona di indonesia
      </p>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div data-aos="fade-up" class="bg-danger1 box text-white">
            <div class="row">
              <div class="col-md-6">
                <h2 class="positif">Positif</h2>
                <p class="positif-deskripsi">
                  <?= $diPositif; ?>
                </p>
                <p class="orang">
                  ORANG
                </p>
              </div>
              <div class="col-md-4">
                <img class="" src="" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div data-aos="fade-up" class="bg-warning1 box text-white">
            <div class="row">
              <div class="col-md-6">
                <h2 class="sembuh">Sembuh</h2>
                <p class="sembuh-deskripsi">
                  <?= $diSembuh; ?>
                </p>
                <p class="orang">
                  ORANG
                </p>
              </div>
              <div class="col-md-4">
                <img class="" src="" alt="" />
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div data-aos="fade-up" class="bg-success1 box text-white">
            <div class="row">
              <div class="col-md-6">
                <h2 class="meninggal">Meninggal</h2>
                <p class="meninggal-deskripsi">
                  <?= $diMeninggal; ?>
                </p>
                <p class="orang">
                  ORANG
                </p>
              </div>
              <div class="col-md-4">
                <img class="" src="" alt="" />
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="provinsi">
    <div id="page2" class="container">
      <br>
      <br>
      <div class="card">
        <h5 class="card-header bg-transparent"><span class="data-prov">Data Kasus Virus Corona di Indonesia Berdasarkan Provinsi</span></h5>
        <div class="card-body">
          <div class="tabel-container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead class="t-fixed">
                <tr>
                  <th>No</th>
                  <th>Provinsi</th>
                  <th>Positif</th>
                  <th>Sembuh</th>
                  <th>Meninggal</th>
                </tr>
              </thead>
              <?php $i = 1; ?>
              <?php foreach ($dp as $row): ?>
              <tbody>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['attributes']['Provinsi']; ?></td>
                  <td><?= $row['attributes']['Kasus_Posi']; ?></td>
                  <td><?= $row['attributes']['Kasus_Semb']; ?></td>
                  <td><?= $row['attributes']['Kasus_Meni']; ?></td>
                </tr>
              </tbody>
              <?php $i ++; ?>
              <?php endforeach; ?>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Provinsi</th>
                  <th>Positif</th>
                  <th>Sembuh</th>
                  <th>Meninggal</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>

      <!---spasi--->
      <div id="page3" class="spasi"></div>

      <br>
      <br>
      <div class="card">
        <h5 class="card-header bg-transparent"><span class="data-prov">Data Kasus Virus Corona Berdasarkan Negara</span></h5>
        <div class="card-body">
          <div class="tabel-container">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead class="t-fixed">
                <tr>
                  <th>No</th>
                  <th>Negara</th>
                  <th>Positif</th>
                  <th>Sembuh</th>
                  <th>Meninggal</th>
                </tr>
              </thead>
              <?php $i = 1; ?>
              <?php foreach ($dn as $row): ?>
              <tbody>
                <tr>
                  <td><?= $i; ?></td>
                  <td><?= $row['attributes']['Country_Region']; ?></td>
                  <td><?= $row['attributes']['Confirmed']; ?></td>
                  <td><?= $row['attributes']['Recovered']; ?></td>
                  <td><?= $row['attributes']['Deaths']; ?></td>
                </tr>
              </tbody>
              <?php $i++; ?>
              <?php endforeach; ?>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Negara</th>
                  <th>Positif</th>
                  <th>Sembuh</th>
                  <th>Meninggal</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pesan-covid">
    <br>
    <h2 class="jangan-lupa text-center">Jangan lupa</h2>
    <img data-aos="fade-up" class="img-covid1" src="assets/img/covid/mask.png" alt="" />
    <img data-aos="fade-up" class="img-covid2" src="assets/img/covid/work.png" alt="" />
    <img data-aos="fade-up" class="img-covid3" src="assets/img/covid/cuci.png" alt="" />
    <img data-aos="fade-up" class="img-covid4" src="assets/img/covid/hand.png" alt="" />
  </section>

  <footer class="footer">
    <h1 class="logo-footer">PantauCovid</h1>
    <br><br>
    <div class="made-text">
      <p class="made">
        Made with &#9829; by <span class="by">Candra Setiawan</span>
      </p>
    </div>
  </footer>

  <!---smooth scroll--->
  <script src="assets/js/smooth-scroll.polyfills.js" type="text/javascript" charset="utf-8"></script>
  <script src="assets/js/scroll.js" type="text/javascript" charset="utf-8"></script>
  <!-- datatables--->
  <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
      $('#example').DataTable();
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript" charset="utf-8"></script>
  <!---aos js----->
  <script src="assets/js/aos.js" type="text/javascript" charset="utf-8"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+cc+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>