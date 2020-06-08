<?php
  // Database Connect
  require "dbConnect.php";
  require "total.php";
  require "cases_info.php";
?>
<?php
  // Show All Related Data
  $id = $_GET['province_id'];

  // Province
  $prov = $con->prepare("SELECT province FROM data_province WHERE id_province=:prov");
  $prov->bindParam(':prov', $id);
  $prov->execute();

  $record_prov = $prov->fetch(PDO::FETCH_ASSOC);
  $province = $record_prov['province'];

  // List Hospital
  $list_h = $con->prepare("SELECT * FROM data_hospital WHERE id_province=:province");
  $list_h->bindParam(':province', $id);
  $list_h->execute();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- More CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="icon" type="image/png" href="assets/image/icon.png">

    <title>Rumah Sakit Darurat Covid-19 | Indonesia</title>
  </head>
  <body>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-rs jumbotron-fluid">
        <div class="container-fluid container-display container-display-rs text-white">
          <h1 class="display-4">Rumah Sakit</h1>
          <p class="lead mt-4">Layanan Darurat Covid-19 Indonesia</p>
          <p class="sub-lead">Tersebar di semua provinsi di Indonesia. Rumah sakit yang digunakan khusus untuk penanganan pasien yang terinfeksi virus corona.</p>
          <a type="button" class="btn btn-sm btn-outline-light mt-2"><i class="far fa-hospital"></i> &nbsp;<?php echo $j_hosp; ?> Rumah Sakit di Indonesia</a>
          <a type="button" class="btn btn-sm btn-outline-light btn-prov mt-2"><i class="fas fa-share"></i> &nbsp;<?php echo $j_prov; ?> Daerah/Provinsi</a>
          <p class="sub-lead mt-3">- <?php echo $province; ?></p>
        </div>
        <div class="overlay overlay-rs"></div>
        <div class="waves svg svg-z-index-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,64L30,85.3C60,107,120,149,180,170.7C240,192,300,192,360,208C420,224,480,256,540,261.3C600,267,660,245,720,240C780,235,840,245,900,213.3C960,181,1020,107,1080,96C1140,85,1200,139,1260,138.7C1320,139,1380,85,1410,58.7L1440,32L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
        </div>

        <div class="btn-down">
            <div class="icon-btn-down icon-btn-down-rs">
                <a href="#rs"><i class="fas fa-angle-double-down"></i></a>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Konten -->
    <div class="page rs" id="rs">
      <div class="container container-rs">
        <div class="row">
          <div class="col-lg-7 col-sm-12 text-center" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="title-page text-center mt-4 mb-5">Rumah Sakit Darurat Covid-19</h2>
          </div>
          <div class="col-lg-7 col-sm-12 rs-list">
            <div class="daerah" id="sumatera-utara">
              <h5><?php echo $province; ?></h5>
              <ol type="1">

              <?php
                while($list = $list_h->fetch(PDO::FETCH_ASSOC)):
              ?>

                <li>
                  <h6><?php echo $list['hospital_name']; ?></h6>
                  <p><?php echo $list['address_telp']; ?></p>
                </li>

              <?php endwhile; ?>

              </ol>
            </div>
          </div>
          <div class="col-lg-5 col-sm-12 gambar-dokter">
            <div class="dokter text-center">
              <img src="assets/image/doctors.png">
            </div>
          </div>
        </div>
      </div>
      <div class="svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000" fill-opacity="1" d="M0,288L34.3,288C68.6,288,137,288,206,272C274.3,256,343,224,411,218.7C480,213,549,235,617,229.3C685.7,224,754,192,823,197.3C891.4,203,960,245,1029,266.7C1097.1,288,1166,288,1234,240C1302.9,192,1371,96,1406,48L1440,0L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </div>
    </div>
    <!-- Akhir Konten -->

    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col col-12 col-lg-3">
            <h5>Corona Virus</h5>
            <p>Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia.</p>
          </div>
          <div class="col col-12 col-lg-3">
            <h5>Pencegahan</h5>
            <p>Penyebaran virus corona dapat dilkaukan dengan berbagai cara yang dilkaukan oleh semua orang.</p>
          </div>
          <div class="col col-12 col-lg-2">
            <h5>Menu</h5>
            <a href="#penjelasan-covid">Apa itu Corona?</a>
            <a href="#gejala">Gejala</a>
            <a href="#cegah">Pencegahan</a>
            <a href="#rs-darurat">Rumah sakit darurat</a>
            <a href="#" data-toggle="modal" data-target="#faq">FAQ</a>
          </div>
          <div class="col col-12 col-lg-4">
            <h5>Kasus di Indonesia</h5>
            <button type="button" class="btn btn-danger btn-sm"><?php echo $positive; ?> Kasus Positif Corona</button>
            <button type="button" class="btn btn-success btn-sm"><?php echo $healed; ?> Kasus Sembuh Corona</button>
            <button type="button" class="btn btn-secondary btn-sm"><?php echo $dead; ?> Kasus Meninggal Corona</button>
            <small>Last update <?php echo $format_date; ?> WIB</small>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Footer -->

    <!-- Floating Statistic Button -->
    <a href="#" type="button" class="btn btn-danger statistic-button"><i class="fas fa-chevron-up"></i></a>
    <!--  AkhirFloating Statistic Button -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- More JS -->
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
      AOS.init();
    </script>

  </body>
</html>