<?php
  // Database Connect
  require "dbConnect.php";
  require "cases_info.php";
?>
<?php
  // Take All Id in data_province
  $prov = $con->prepare("SELECT * FROM data_province ORDER BY no");
  $prov->execute();

  $province = [];
  $province_name = [];
  $i = 0;
  while($record_prov = $prov->fetch(PDO::FETCH_ASSOC)){
    $province[$i] = $record_prov['id_province'];
    $province_name[$i] = $record_prov['province'];
    $i++;
  }

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
    <link rel="stylesheet" href="assets/css/swiper.css"> 
    <link rel="stylesheet" href="assets/css/aos.css"> 

    <link rel="icon" type="image/png" href="assets/image/icon.png">

    <title>Coronavirus | Let's avoid them</title>

    <style>
      .swiper-container {
      width: 100%;
      height: 100%;
      padding-top: 50px;
      }
      .swiper-slide {
        text-align: center;
        padding: 10px;
        font-size: 18px;
        background: rgb(255, 255, 255);
        border: 1px solid black;
        height: 300px;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
      }
      .title-page-rs {
        margin-top: 130px;
      }
    </style>

  </head>
  <body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav text-right">
          <a class="nav-item nav-link" href="#penjelasan-covid">Apa itu Corona?</a>
          <a class="nav-item nav-link" href="#gejala">Gejala</a>
          <a class="nav-item nav-link" href="#cegah">Pencegahan</a>
          <a class="nav-item nav-link" href="#rs-darurat">Rumah Sakit Darurat</a>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Navbar Andro -->
    <nav class="navbar-andro navbar-expand-lg navbar-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkupAndro" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse-andro" id="navbarNavAltMarkupAndro">
        <div class="navbar-nav-andro text-left">
          <a class="nav-item nav-link-andro text-dark" href="#penjelasan-covid">Apa itu Corona?</a>
          <a class="nav-item nav-link-andro text-dark" href="#gejala">Gejala</a>
          <a class="nav-item nav-link-andro text-dark" href="#cegah">Pencegahan</a>
          <a class="nav-item nav-link-andro text-dark" href="#rs-darurat">Rumah Sakit Darurat</a>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar Andro -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container-fluid container-display text-white">
          <h1 class="display-4">Coronavirus</h1>
          <p class="lead mt-4">Virus yang kini sedang mengancam dunia</p>
          <p class="sub-lead">Coronavirus adalah kumpulan virus yang bisa menginfeksi sistem pernapasan. Pada banyak kasus, virus ini hanya menyebabkan infeksi pernapasan ringan, seperti flu. Namun, virus ini juga bisa menyebabkan infeksi pernapasan berat, seperti infeksi paru-paru (pneumonia).</p>
          <a href="https://news.google.com/covid19/map?hl=id&gl=ID&ceid=ID%3Aid" target="_blank" type="button" class="btn btn-sm btn-outline-light mt-2"><i class="fas fa-globe"></i> &nbsp;Info Covid-19 Dunia</a>
        </div>
        <div class="overlay"></div>
        <div class="waves svg svg-z-index-6">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L40,288C80,288,160,288,240,277.3C320,267,400,245,480,208C560,171,640,117,720,112C800,107,880,149,960,176C1040,203,1120,213,1200,181.3C1280,149,1360,75,1400,37.3L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
        </div>

        <div class="btn-down">
            <div class="icon-btn-down">
                <a href="#penjelasan-covid"><i class="fas fa-angle-double-down"></i></a>
            </div>
        </div>
    </div>
    <!-- Akhir Jumbotron -->

    <!-- Penjelasan Covid -->
    <div class="container">
      <div class="penjelasan-covid page" id="penjelasan-covid" data-aos="fade-left" data-aos-duration="1000">
        <div class="penjelasan">
          <h2 class="title-page">Apa Itu Coronavirus?</h2>
          <p class="mt-3 explain-page">Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS). Coronavirus jenis baru yang ditemukan menyebabkan penyakit COVID-19. COVID-19 adalah penyakit menular yang disebabkan oleh jenis coronavirus yang baru ditemukan. Ini merupakan virus baru dan penyakit yang sebelumnya tidak dikenal sebelum terjadi wabah di Wuhan, Tiongkok, bulan Desember 2019.</p>
          <a href="https://www.who.int/indonesia/news/novel-coronavirus/qa-for-public" target="_blank" class="btn btn-sm btn-dark btn-more">Cari tahu lebih banyak</a>
        </div>
      </div>
    </div>
    <!-- Akhir Penjelasan Covid -->

    <!-- Gejala Covid -->
      <div class="gejala-page" id="gejala">
        <div class="penjelasan-gejala">
          <div class="penjelasan-gejalanya" data-aos="fade-left" data-aos-duration="1000">
            <h2 class="title-page">Apa saja gejala Coronavirus?</h2>
            <p class="mt-3 explain-page">Virus Corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada jenis virus corona yang menyerang, dan seberapa serius infeksi yang terjadi. Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering dan sakit tenggorokan. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat.</p>
          </div>
          <div class="macam-gejala">
            <div class="container">
              <div class="row">
                <div class="col-lg col-sm-12 col-md-12" data-aos="fade-up" data-aos-duration="1000">
                  <div class="gejala shadow">
                    <div class="pic-sym">
                      <img src="assets/image/symtomps/high fever.png" class="sym">
                    </div>
                    <div class="name-sym mt-3">
                      <p>Demam Tinggi</p>
                    </div>
                    <div class="explain-sym">
                      <p>Tidak ada patokan berapa angka suhu demam yang dialami. Karena, setiap orang bisa memiliki suhu  demam yang berbeda dari suhu tubuh normal pada umumnya.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg col-sm-12 col-md-12" data-aos="fade-up" data-aos-duration="1000">
                  <div class="gejala shadow">
                    <div class="pic-sym">
                      <img src="assets/image/symtomps/cough.png" class="sym">
                    </div>
                    <div class="name-sym mt-3">
                      <p>Batuk Kering</p>
                    </div>
                    <div class="explain-sym">
                      <p>Batuk karena gejala Covid-19 sangat menganggu. Bukan rasa geli yang terasa, tetapi seolah berasal dari sesuatu yang jauh di dalam dada.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg col-sm-12 col-md-12" data-aos="fade-up" data-aos-duration="1000">
                  <div class="gejala shadow">
                    <div class="pic-sym">
                      <img src="assets/image/symtomps/flu.png" class="sym">
                    </div>
                    <div class="name-sym mt-3">
                      <p>Pilek</p>
                    </div>
                    <div class="explain-sym">
                      <p>Pilek merupakan salah satu gejala dari terinfeksinya Covid-19. Namun tidak selalu yang menderita pilek itu terinfeksi Corona. Jadi, jangan panik.</p>
                    </div>
                  </div>
                </div>
                <div class="col-lg col-sm-12 col-md-12" data-aos="fade-up" data-aos-duration="1000">
                  <div class="gejala shadow">
                    <div class="pic-sym">
                      <img src="assets/image/symtomps/sore throath.png" class="sym">
                    </div>
                    <div class="name-sym mt-3">
                      <p>Sakit Tenggorokan</p>
                    </div>
                    <div class="explain-sym">
                      <p>Seseorang dengan riwayat penyakit kronis perlu waspada jika mengalami sakit tenggorokan. Karena mereka rentan terinfeksi virus Corona.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="black-area svg">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#000" fill-opacity="1" d="M0,32L0,96L1440,96L1440,320L0,320L0,320Z"></path>
          </svg>
        </div>
      </div>
    <!-- Akhir Gejala Covid -->

    <!-- Pencegahan -->
    <div class="pencegahan page page-black text-center" id="cegah">
      <div class="container">
        <div class="row">
          <div class="col-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="wrapper">
              <div class="explain-prevent"></div>
              <div class="pic-prevent">
                <img src="assets/image/prevent/distancing.png" class="prevent-pic" width="100">
              </div>
              <div class="name-sym mt-3">
                <p>Social Distancing</p>
              </div>
              <div class="explain-sym">
                <p>Menerapkan social distancing atau menjaga jarak adalah hal penting untuk dilakukan dalam upaya mencegah penularan virus Corona.</p>
              </div>
            </div>
          </div>
          <div class="col-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="wrapper">
              <div class="pic-prevent">
                <img src="assets/image/prevent/crowded_places.png" class="prevent-pic" width="80">
              </div>
              <div class="name-sym mt-3">
                <p>Hindari Tempat Ramai</p>
              </div>
              <div class="explain-sym">
                <p>Menjauhi tempat dengan banyak orang adalah hal yang perlu dilakukan dalam rangka penerapan social distancing.</p>
              </div>
            </div>
          </div>
          <div class="col-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="wrapper">
              <div class="pic-prevent">
                <img src="assets/image/prevent/stay_at_home.png" class="prevent-pic" width="70">
              </div>
              <div class="name-sym mt-3">
                <p>Diam di Rumah</p>
              </div>
              <div class="explain-sym">
                <p>Kini, berdiam di rumah dan tidak pergi ke luar adalah hal terbaik yang dapat dilakukan oleh siapa saja agar terhindar dari virus.</p>
              </div>
            </div>
          </div>
          <div class="col-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="wrapper">
              <div class="pic-prevent">
                <img src="assets/image/prevent/wash_hands.png" class="prevent-pic" width="100">
              </div>
              <div class="name-sym mt-3">
                <p>Cuci Tangan</p>
              </div>
              <div class="explain-sym">
                <p>Mencuci tangan dengan sabun dan air mnegalir adalah upaya untuk membersihkan diri dari virus yang mungkin menempel di tangan.</p>
              </div>
            </div>
          </div>
          <div class="col-lg" data-aos="fade-down" data-aos-duration="1000">
            <div class="wrapper">
              <div class="pic-prevent">
                <img src="assets/image/prevent/clean.png" class="prevent-pic" height="70">
              </div>
              <div class="name-sym mt-3">
                <p>Jaga Kebersihan</p>
              </div>
              <div class="explain-sym">
                <p>Menjaga kebersihan barang-barang di sekitar adalah hal yang tepat dilakukan agar terhindar dari virus yang memempel di barang.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <h2 class="title-page text-white mt-4 text-center">Langkah Pencegahan</h2>
          </div>
        </div>
      </div>
      <div class="miring svg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,288L1440,192L1440,320L0,320Z"></path></svg>
      </div>
    </div>
    <!-- Akhir Pencegahan -->

    <!-- Rumah Sakit Darurat -->
    <div class="page rs-darurat" id="rs-darurat">
      <div class="container rs-darurat-con">
        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="title-page title-page-rs text-dark text-center">Rumah Sakit Darurat Covid-19</h2>
          </div>
          <div class="col-12">
            <div class="swiper-container">
              <div class="swiper-wrapper">

                <?php
                  for($a=0; $a<count($province); $a++):
                    $hospital = $con->prepare("SELECT * FROM data_hospital WHERE id_province='$province[$a]' LIMIT 2");
                    $hospital->execute();  

                    $hosp = [];
                    $b = 0;
                    while($list_hosp = $hospital->fetch(PDO::FETCH_ASSOC)){
                      $hosp[$b] = $list_hosp['hospital_name'];
                      $addr[$b] = $list_hosp['address_telp'];
                      $b++;
                    }
                ?>

                <div class="swiper-slide">
                  <div class="header" style="width: 100%;">
                    <div class="row" style="width: 100%;">
                      <div class="col-3" style="width: 100%;">
                        <h4 class="icon-hospital ml-3"><i class="fas fa-hospital"></i></h4>
                      </div>
                      <div class="col-9 text-left" style="width: 100%;">
                        <h4 class="provinsi"><?php echo $province_name[$a]; ?></h4>
                      </div>
                    </div>
                  </div>
                  <div class="body text-justify">
                    <div class="row">
                      <div class="col-12">

                        <?php
                          for($h=0; $h<count($hosp); $h++):
                        ?>

                        <div class="list-rs">
                          <h6 class="nama-rs"><?php echo $hosp[$h]; ?></h6>
                          <p class="alamat"><?php echo $addr[$h]; ?></p>
                        </div>

                        <?php endfor; ?>

                      </div>
                    </div>
                    <div class="row">
                      <div class="button-more-rs mb-2">
                        <a href="emergency-hospital.php?province_id=<?php echo $province[$a]; ?>" type="button" class="btn btn-info btn-sm text-white">See More</a>
                      </div>
                    </div>
                  </div>
                </div>

                <?php endfor; ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Rumah Sakit Darurat -->

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
            <a href="admin-login.php">Admin</a>
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

    <!-- Modal FaQ -->
    <div class="modal fade" id="faq" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Frequently Asked Question</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <div class="faq">
                <div class="pertanyaan">
                  Apa itu Corona?
                </div>
                <div class="jawaban">  
                  Coronavirus adalah suatu kelompok virus yang dapat menyebabkan penyakit pada hewan atau manusia. Beberapa jenis coronavirus diketahui menyebabkan infeksi saluran nafas pada manusia mulai dari batuk pilek hingga yang lebih serius seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS).
                </div>
              </div>
              <div class="faq">
                <div class="pertanyaan pertanyaan-next">
                  Bagaimana gejala jika terinfeksi Corona?
                </div>
                <div class="jawaban">  
                  Virus Corona bisa menimbulkan beragam gejala pada pengidapnya. Gejala yang muncul ini bergantung pada jenis virus corona yang menyerang, dan seberapa serius infeksi yang terjadi. Gejala awal infeksi virus Corona atau COVID-19 bisa menyerupai gejala flu, yaitu demam, pilek, batuk kering dan sakit tenggorokan. Setelah itu, gejala dapat hilang dan sembuh atau malah memberat.
                </div>
              </div>
              <div class="faq">
                <div class="pertanyaan pertanyaan-next">
                  Bagaimana upaya pencegahan terjangkit virus Corona?
                </div>
                <div class="jawaban">  
                  Berbagai upaya dapat dilakukan agar tidak terinfeksi virus Corona. upaya tersebut yaitu dengan menerapkan social distancing, hindari tempat ramai, selalu memakai masker, kurangi interaksi dengan orang lain, hindari kontak dengan orang sakit dan diam di rumah.
                </div>
              </div>
              <div class="faq">
                <div class="pertanyaan pertanyaan-next">
                  Bagaimana kasus positif Corona di Indonesia?
                </div>
                <div class="jawaban">  
                  Kasus Corona di Indonesia bisa dibilang cukup tinggi. Per harinya rata-rata terdapat 250-300 kasus baru positif Corona.
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal FaQ -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- More JS -->
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/navbar.js"></script>
    <script src="assets/js/swiper.js"></script>
    <script src="assets/js/aos.js"></script>
    <script>
      AOS.init();
    </script>
    
    <!-- Configuration Swiper Carousel -->
    <script>
      var swiper = new Swiper('.swiper-container', {
        slidesPerView: 4,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        breakpoints: {
          400: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          700: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
        }
      });
    </script>

  </body>
</html>