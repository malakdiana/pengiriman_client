<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Maji Express</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/') ?>css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">MaJi Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('<?php echo base_url('assets/') ?>images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('<?php echo base_url('assets/') ?>images/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('<?php echo base_url('assets/') ?>images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->

    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                 <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="false"><span></span> Lacak Kiriman</a>
                 <a class="nav-link p-3" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true"><span></span> Tarif Kiriman</a>
                
               
                
              </div>
            </div>
              
            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php echo form_open('Home/cekResi'); ?>
                <div class="block-17">
                  <form action="" method="post" class="d-block d-lg-flex">

                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search one-third" style="width: 100%"><input type="text" class="form-control" placeholder="Nomor Resi" name="noResi"></div>
                    </div><br>
                    <div align="center">
                    <input type="submit" class="btn btn-warning" value="Tracking">  
                    </div>
                    <?php echo form_close();?>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                <div class="block-17">
                <?php echo form_open('Home/cekHarga'); ?>
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="col-lg-4"><select name="asal" id="" class="form-control">
                                  <?php   foreach ($cabang as $key) {
                            ?>
                                    <option value="<?php echo $key->idCabang?>"><?php echo $key->kota?></option>
                                    <?php   } ?>
                                </select>

                      </div>
<div class="col-lg-4">
<select name="tujuan" id="" class="form-control">
                                  <?php   foreach ($cabang as $key) {
                            ?>
                                    <option value="<?php echo $key->idCabang?>"><?php echo $key->kota?></option>
                                    <?php   } ?>
                                </select></div>
<div class="col-lg-4"><input type="number" class="form-control" placeholder="Berat (kg)" name="berat"></div>
                      
                    </div>
                    <br><div align="center">
                    <input type="submit" class="btn btn-warning" value="Cek Tarif"></div>
                    <?php echo form_close(); ?> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section-2">
      <div class="container-fluid d-flex">
        <div class="section-2-blocks-wrapper row no-gutters">
          <div class="img col-sm-12 col-lg-6" style="background-image: url('<?php echo base_url('assets/') ?>images/tour-1.jpg');">
            <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
          </div>
          <div class="text col-lg-6 ftco-animate">
            <div class="text-inner align-self-start">
  
              <p>Trucking Via Darat<br>
              Cargo Via Laut & Udara<br>
              Kiriman Mobil & Motro<br>
              Pindahan Barang (Moving)<br>
              PErgudangan(Warehouse)<br>
              Export & Import</p>

              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(<?php echo base_url('assets/') ?>images/promo-1.jpg);"></a>
            <div class="text text-center">
              <h2>Pengiriman YES</h2>
              <h3 class="price"><span>estimasi</span>1-2 hari</h3>
            </div>
          </div>
          <div class="col-lg-4 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(<?php echo base_url('assets/') ?>images/promo-2.jpg);"></a>
            <div class="text text-center">
              <h2>Pengiriman REG</h2>
              <h3 class="price"><span>estimasi</span>2-3 hari</h3>
            </div>
          </div>
          <div class="col-lg-4 promo ftco-animate">
            <a href="#" class="promo-img mb-4" style="background-image: url(<?php echo base_url('assets/') ?>images/promo-3.jpg);"></a>
            <div class="text text-center">
              <h2>Pengiriman OKE</h2>
              <h3 class="price"><span>estimasi</span>3-4 hari</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    </section>


   
    

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Voyage Fellow Tourist</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Book Now</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Flight</a></li>
                <li><a href="#" class="py-2 d-block">Hotels</a></li>
                <li><a href="#" class="py-2 d-block">Tour</a></li>
                <li><a href="#" class="py-2 d-block">Car Rent</a></li>
                <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Mountains</a></li>
                <li><a href="#" class="py-2 d-block">Cruises</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Top Deals</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Luxe Hotel</a></li>
                <li><a href="#" class="py-2 d-block">Venice Tours</a></li>
                <li><a href="#" class="py-2 d-block">Deluxe Hotels</a></li>
                <li><a href="#" class="py-2 d-block">Boracay Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Beach &amp; Resorts</a></li>
                <li><a href="#" class="py-2 d-block">Fuente Villa</a></li>
                <li><a href="#" class="py-2 d-block">Japan Tours</a></li>
                <li><a href="#" class="py-2 d-block">Philippines Tours</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">198 West 21th Street, Suite 721 New York NY 10016</a></li>
                <li><a href="#" class="py-2 d-block">+ 1235 2355 98</a></li>
                <li><a href="#" class="py-2 d-block">info@yoursite.com</a></li>
                <li><a href="#" class="py-2 d-block">email@email.com</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

         
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url('assets/') ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/popper.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/aos.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url('assets/') ?>js/google-map.js"></script>
  <script src="<?php echo base_url('assets/') ?>js/main.js"></script>
    
  </body>
</html>