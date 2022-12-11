<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>PROJEK UAS SIGT</title>
  <!-- Menyisipkan library Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
 <link rel="stylesheet" href="assets/css/style-peta.css">

  <script type="text/javascript">
    function init() {
      var info_window = new google.maps.InfoWindow();

      // menentukan level zoom
      var zoom = 13;

      // menentikan latitude dan longitude
      var pos = new google.maps.LatLng(0.45966, 101.410347);

      // menentukan opsi peta
      var options = {
        center: pos,
        zoom: zoom,
        mapTypeId: google.maps.MapTypeId.HYBRID,
      };

      // membuat peta
      var map = new google.maps.Map(document.getElementById('googleMap'), options);

      info_window = new google.maps.InfoWindow({
        content: 'loading...',
      });

      // menampung lokasi dalam 1 array
      var lokasi = [
        ['Kost Putri 4 bersaudara', 0.4778591953872022, 101.37374725109986],
        ['Alfa Kos', 0.47503928206457596, 101.37257067595861],
        ['Kost Putri Kamboja Unri', 0.4817393791441927, 101.37472506639598],
        ['Kost Putri ARNI', 0.46906772605703195, 101.37199008307414],
        ['Kost Panamp Raya', 0.4724688694280787, 101.3846599958255],
        ['Kost Syariah Panam', 0.47274482234524356, 101.38778684708456],
        ['Kost Putri Muslimah', 0.46369206968047244, 101.38339878062907],
        ['Kost Panam ALKahfi Pekanbaru', 0.46224873610399314, 101.3835224989752],
        ['OYO 91642 Fhazel Residence Syariah', 0.4628673076727357, 101.38579066865418],
        ['De,Kost  Panam', 0.46336216488889387, 101.39086312084535],
        ['Zifer Kost Panam', 0.46534159340750775, 101.39828622161292],
        ['Kost Pria', 0.4594252944398629, 101.37564520069807],
        ['Kost Nasya 1', 0.45762290777985504, 101.38470033854267],
        ['Kost Putri Rumah Panam', 0.4744022522659213, 101.39770368770841],
        ['Kost Putri Jingga Kampar', 0.4692359207731749, 101.36302153224024],
        ['Kost Putri Mandala', 0.46142689430991674, 101.36971288025222],
        ['Kost Putra Rizki', 0.4586156755514466, 101.35314814051115],
      ];

      // meloop lokasi
      for (var i = 0; i < lokasi.length; i++) {
        var lat_lng = new google.maps.LatLng(lokasi[i][1], lokasi[i][2]);

        // membuat marker
        var marker = new google.maps.Marker({
          position: lat_lng,
          map: map,
          title: lokasi[i][0],
          animation: google.maps.Animation.BOUNCE,
        });

        // menambahkan event ketita marker di klik
        google.maps.event.addListener(marker, 'click', function() {
          info_window.setContent('<b>' + this.title + '</b>');
          info_window.open(map, this);
        });
      }

    }

    google.maps.event.addDomListener(window, 'load', init);
  </script>

  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="assets/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container px-4">
      <a class="navbar-brand" href="#page-top">CARI KOST PANAM ID</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#peta">Lokasi Kost</a></li>
          <li class="nav-item"><a class="nav-link" href="#info">Info Kost</a></li>
          <li class="nav-item"><a class="nav-link" href="#pesan">Pesan</a></li>
          <li class="nav-item"><a class="nav-link" href="#pesan">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header-->
  <header class="bg-primary bg-gradient text-white">
    <div class="container px-4 text-center">
      <h1 class="fw-bolder">Selamat Datang!</h1>
      <p class="lead">Aplikasi Pencarian Kost di Wilayah Panam</p>
      <a class="btn btn-lg btn-light" href="#peta">Start scrolling!</a>
    </div>
  </header>
  <!-- About section-->
  <section id="peta">
    <div class="container px-4">
      <div class="card">
        <div class="card-header bg-dark">
          <h3 style="text-align:center;color:white">Lokasi Kost Wilayah Panam</h3>
        </div>
        <div class="card-body" id="googleMap">

        </div>
      </div>
    </div>
  </section>

  <!-- Services section-->
  <section class="bg-light" id="info">
    <div class="container px-4">
      <div class="card">
        <div class="card-header bg-dark">
          <h3 style="text-align:center;color:white">Informasi Kost Wilayah Panam</h3>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kost</th>
                <th scope="col">Harga</th>
                <th scope="col">Nama Penyewa</th>
                <th scope="col">Lihat Peta</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                include("assets/database/koneksi.php");
                $no = 1;
                $cari = mysqli_query($conn, "SELECT * FROM lokasi");

                while ($dapat = mysqli_fetch_array($cari)) {
                  echo "
                      <tr>
                       <td>$no</td>
                       <td>$dapat[nama_kost]</td>
                       <td>$dapat[harga]</td>
                       <td>$dapat[nama_penyewa]</td>
                       <td>
                       <a href='tampil_map.php?idlokasi=$dapat[idlokasi]#peta'>Lihat Map</a>
                     </td>
                      </tr>
                    ";
                  $no++;
                }

                ?>
            </tbody>
          </table>
      </div>
    </div>
    </div>
  </section>

  <!-- Contact section-->
  <section id="pesan">
    <div class="container px-4">
      <div class="card" id="card-body">
        <div class="card-header bg-dark">
          <h3 style="text-align:center;color:white">Daftar Kost</h3>
        </div>
        <br><br>
        <div class="row">
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr1.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Alfa Kost</h5>
               <p class="card-text">Gg. Putri, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp.500.000/ <span>bulan</span></p></b> 
               <br>
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
      
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr2.jpg"alt="" class="img">
                </div>
                <h5 class="card-title">Kost Putri 4 Bersaudara Panam</h5>
               <p class="card-text">Jalan Mawar, Gg. Putri Panam No.2, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp.650.000/ <span>bulan</span></p></b> 
               <br>
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
         
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr3.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Putri Kamboja</h5>
               <p class="card-text">Jl. Kamboja Jl. Bangau Sakti, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp.400.000/ <span>bulan</span></p></b> 
               <br>
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body ">
                <div class="image">
                <img src="assets/img/gbr4.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Panam Alkahfi</h5>
               <p class="card-text">JL Mukhsinin no 24 B, Panam, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp.500.000/ <span>bulan</span></p></b> 
               <br>
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr5.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Zifer Kost Panam</h5>
               <p class="card-text">Jl. HR. Soebrantas No.11, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28293 </p>
               <b><p class="card-text">Rp.800.000/ <span>bulan</span></p></b> 
               <br>
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
        
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr6.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Nasya 1</h5>
               <p class="card-text">jl. Tuah karya, Perumahan Royal Permata Hijau Blok 8P, Panam, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28299</p>
               <b><p class="card-text">Rp.500.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr8.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Putri Jingga Kampar</h5>
               <p class="card-text">Jl. Buluh Cina panam, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp.500.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr7.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Putri Mandala</h5>
               <p class="card-text">Jl. Tuah Karya, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp.500.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr10.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Putra Panam Raya</h5>
               <p class="card-text">Jl. Binakrida UNRI No.Kelurahan, Simpang Baru, Kec. Tampan, Kota Pekanbaru, Riau 28292</p>
               <b><p class="card-text">Rp.800.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr11.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kost Pria</h5>
               <p class="card-text">F95G+C65, Tuah Karya, Tampan, Pekanbaru City, Riau 28293</p>
               <b><p class="card-text">Rp.500.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>

          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/gbr12.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">De'Kost Panam</h5>
               <p class="card-text">Di belakang Rs. Awal Bros Panam, Jl. HR. Subrantas, perumahan Bumi Rezki Permai (BRP, Tuah Karya, Kec. Tampan, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp1.000.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          
          <div class="col-sm-4" id="coll">
            <div class="card bg-light" id="card-body">
              <div class="card-body">
                <div class="image">
                <img src="assets/img/13.jpg"alt="" class="img">
                </div>
                <br>
                <h5 class="card-title">Kos Putra Rizki</h5>
               <p class="card-text">Perumahan Villa Pesona Panam Blok J11, Jalan HR. Soebrantas Panam, Simpang Baru, Tampan, Rimba Panjang, Kec. Tambang, Kota Pekanbaru, Riau 28293</p>
               <b><p class="card-text">Rp500.000/ <span>bulan</span></p></b> 
                <a href="pesan.php" class="btn btn-primary">Pesan Sekarang</a>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>


  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container px-4">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
    </div>
  </footer>
  <script src="js/scripts.js"></script>
<script src="js/cari-map.js"></script>

</body>

</html>