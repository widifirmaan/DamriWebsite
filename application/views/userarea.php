<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DAMRI - One Stop Ticket Booking</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?php echo base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">

  <link href="<?php echo base_url(); ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css" />
  <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>css/style.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
         

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    
    <div class="container d-flex align-items-center justify-content-between">
    <div class="logo">
        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>img/logodamri.png" alt="" class="img-fluid"></a>
      </div>
      <nav id="navbar" class="navbar">

        <ul>
          <li><a class="nav-link scrollto active" href="#">Promo</a></li>
          <li class="dropdown"><a href="#"><span>Beli Tiket Bus</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Malam</a></li>
              <li><a href="#">Siang</a></li>
              <li><a href="#">Luxury</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#">FAQ</a></li>
          <li><a class="nav-link scrollto" href="<?php echo base_url(); ?>user">User Area</a></li>
          <li><a class="nav-link scrollto" href="#services">Tentang Kami</a></li>
                <?php 
                if(empty($this->session->userdata('is_login')))
                {
              echo('<li data-toggle="modal" data-target="#mylogin"><a class="getstarted scrollto" href="#">Masuk/Daftar
                  </a>');
            } else{
                echo(' <li><a class="getstarted scrollto" href="http://widifirmaan.web.id/damriproject/index.php/login/logout">Keluar</a></li>');
                 }?>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

<div class="container">
  <!-- End Header -->
<?php 
    if($this->session->flashdata('error') !='')
    {
      echo '<center><a data-toggle="modal" data-target="#mylogin" class="btn-get-started scrollto">';
      echo '';
      echo $this->session->flashdata('error');
      echo '. Coba Lagi</a><br/></center>';
    }

    if($this->session->flashdata('success_register') !='')
    {
      echo '<center>';
      echo '<a data-toggle="modal" data-target="#mylogin" class="btn-get-started scrollto">';
      echo $this->session->flashdata('success_register');
      echo '. Klik Untuk Login</a><br/>';
      echo '</center>';
    }
    ?>
    
  <div class="row">
    <div class="col-lg-4 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">MEMBER AREA</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">Scroll kebawah untuk melihat pesanan anda</h2>
      <div data-aos="fade-up" data-aos-delay="800">
      </div>
    </div>
    <div class="col-lg-7 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">

      <div class="booking-form">
        <div class="booking-bg"></div>
        <form method="post" action="<?php echo base_url(); ?>index.php/pesanan/save">
          <div class="form-header">
            <h2>Selamat Datang <?php 
            if(empty($this->session->userdata('logged_in')))
            {
          echo('Tamu');
        }
            echo $this->session->userdata('nama'); ?>!</h2>
          </div>
          <input type="text" name="username" id="username" value="<?php echo $this->session->userdata('username'); ?>" hidden>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <span class="form-label">Tanggal</span>
                <input class="form-control" type="date" name="tanggal" id="tanggal" required>
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
                <span class="form-label">Dari</span>
                <select class="form-control" name="asal" id="asal" required>
                  <option>Jogja</option>
                  <option>Jakarta</option>
                  <option>Bali</option>
                </select>
                <span class="select-arrow"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <span class="form-label">Ke</span>
                <select class="form-control" name="tujuan" id="tujuan" required>
                  <option>Jogja</option>
                  <option>Jakarta</option>
                  <option>Bali</option>
                </select>
                <span class="select-arrow"></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <span class="form-label">Jenis Bus</span>
                <select class="form-control" name="jenis" id="jenis" required>
                  <option>Malam</option>
                  <option>Siang</option>
                  <option>Luxury</option>
                </select>
                <span class="select-arrow"></span>
              </div>
            </div>
          </div>			
          <div class="form-group">
            <span class="form-label">Jumlah Tiket</span>
            <input class="form-control" type="tel" placeholder="Jumlah Tiket" name="jumtik" id="jumtik" required>
          </div>
          <div class="form-btn">
          <?php 
            if(empty($this->session->userdata('is_login')))
            {
                echo '<button class="submit-btn" data-toggle="modal" data-target="#mylogin">Pesan</button>';
            }
            else{
                if($this->session->flashdata('pesan_success') !='')
                {
                     echo '<center>';
                     echo '<a href="http://widifirmaan.web.id/damriproject/index.php/user">Pesanan Selesai, Klik disini untuk melihat pesanan anda</a>';
                     echo '</center>';
                } 
                    else{
                         echo '<button class="submit-btn" type="submit">Pesan</button>';
                            }
             }
            ?>
          </div>
        </form>
        
      </div>
  </div>
    </div>
  </div>
</div>

</section><!-- End Hero -->
<!-- Modal daftar -->
<div id="mydaftar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">

 <div class="booking-form">
          <div class="booking-bg"></div>
						<form method="post" action="<?php echo base_url(); ?>register/proses">
							<div class="form-header">
								<h2>Daftar</h2>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input input type="email" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Email Address...">
							</div>
              <div class="form-group">
								<span class="form-label">Password</span>
								<input class="form-control" input type="password" name="password" id="password" placeholder="Password...">
							</div>
              <div class="form-group">
              <span class="form-label">Nama Lengkap</span>
              <input type="text" class="form-control"	name="nama" id="nama" placeholder="Nama Lengkap...">
                                        </div>
							<div class="form-btn">
								<input type="submit" value="Register" class="submit-btn"/>
							</div>
              <div class="text-center">
              <li data-toggle="modal" data-target="#mylogin" data-dismiss="modal"><a class="getstarted scrollto" href="#">Sudah Punya Akun? Masuk Sekarang</a>
      </li>
            </div>
						</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end modal daftar -->

<!-- Modal login -->

<div id="mylogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
     
          <div class="booking-form">
          <div class="booking-bg"></div>
						<form method="post" action="<?php echo base_url(); ?>login/proses">
							<div class="form-header">
								<h2>Masuk ke Akun <?php 
                echo $this->session->userdata('nama'); ?>!</h2>
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input input type="email" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter Email Address...">
							</div>
              <div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" input type="password" name="password" id="password" placeholder="Password">
							</div>
							<div class="form-btn">
								<input type="submit" value="Login" class="submit-btn"/>
							</div>
              <div class="text-center">
              <li data-toggle="modal" data-target="#mydaftar" data-dismiss="modal"><a class="getstarted scrollto" href="#"> Belum Punya Akun? Daftar Sekarang</a>
      </li>            </div>
						</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal Login -->
    <!-- ======= Services Section ======= -->
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2> <?php 
                if(empty($this->session->userdata('nama')))
                {
              echo'Silahkan masuk terlebih dahulu!';
            } else{
                echo 'Daftar Pemesan Tiket';
                }?></h2>
<br/>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Asal</th>
                    <th>Tujuan</th>
                    <th>Tanggal</th>
                    <th>Jumlah Tiket</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($user as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['asal'] ?></td>
                        <td><?= $u['tujuan'] ?></td>
                        <td><?= $u['tanggal'] ?></td>
                        <td><?= $u['jumtik'] ?></td>
                       
                        <td><a href="" class="btn btn-danger">Cetak Tiket</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        
        <?php  {
        $uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
        
        echo '';
        }
        else{
            echo '
    <div class="d-none" style="d-none">';
        }
    } ?>
        <?php 
                if(empty($this->session->userdata('nama')))
                {
            } else{
                echo 'Daftar Pengguna';
                }?></h2>
<br/>
          <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($admin1 as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= $u['password'] ?></td>
                        <td><a href="" class="btn btn-danger">Hapus</a>
                        <a href="" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
            <?php 
                if(empty($this->session->userdata('nama')))
                {
            } else{
                echo 'Daftar Asal';
                }?></h2>
<br/>
          <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>Asal</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($admin2 as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['asal'] ?></td>
                        <td><a href="" class="btn btn-danger">Hapus</a>
                        <a href="" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
            <?php 
                if(empty($this->session->userdata('nama')))
                {
            } else{
                echo 'Daftar Tujuan';
                }?></h2>
<br/>

          <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>id</th>
                    <th>Tujuan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($admin3 as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['tujuan'] ?></td>
                        <td><a href="" class="btn btn-danger">Hapus</a>
                        <a href="" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
            <?php 
                if(empty($this->session->userdata('nama')))
                {
            } else{
                echo 'Daftar Tanggal Terisi';
                }?></h2>
<br/>

          <table class="table table-dark">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($admin4 as $u) :
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['tanggal'] ?></td>
                        <td><a href="" class="btn btn-danger">Hapus</a>
                        <a href="" class="btn btn-danger">Edit</a>
                        </td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
<?php  {
        $uname = $this->session->userdata('username');
        $wongnjero= "SELECT tipe FROM pengguna WHERE username LIKE \"admin@admin.com\"";
        $sxx= "SELECT tipe FROM pengguna WHERE username LIKE \"$uname\"";
        if($sxx == $wongnjero)
        {
        
        echo '';
        }
        else{
            echo '</div>';
        }
    } ?>

        </div>
      </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; One Stop Ticket Booking <strong>DAMRI</strong> 2022
          </div>
          <div class="credits">
            Designed by <a href="https://widifirmaan.web.id/">W</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">Tentang Kami</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url(); ?>assets/js/main.js"></script>

</body>

</html>