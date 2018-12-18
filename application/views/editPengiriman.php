 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Edit Pengiriman Cabang <?php  echo $this->session->userdata('logged_in')['kota'] ?></h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    
                    <div class="col-6">
                            
                        <div class="card">
                            <div class="card-body">
                            <?php echo  form_open('Client/editPengiriman'); ?>

                            <div class="form-group">
                                

                              <?php foreach ($pengiriman as $key ) {
                              ?>
                                <label class="col-lg-5 col-sm-5 control-label">Nama Penerima</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="penerima" placeholder="" required autofocus value="<?php echo $key->penerima?>">
                                    <input type="text" class="form-control" name="noResi" placeholder="" value="<?php echo $key->noResi?>" hidden="">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Alamat Penerima</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="alamatPenerima" placeholder="" required autofocus value="<?php echo $key->alamatPenerima?>">
                                </div>
                            </div>
                           
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Kota</label>
                                <div class="col-lg-10">
                                <select name="tujuan" id="" class="form-control">
                                  <?php   foreach ($kota as $keyy) {
                                    if($key->keterangan == "Luar Cabang"){
                                        if($keyy->idCabang != $this->session->userdata('logged_in')['idCabang']){?> 
                                    <option value="<?php echo $keyy->idCabang?>" selected=""><?php echo $keyy->kota?></option>
                                    <?php   }else{?>

                                  <option value="<?php echo $keyy->idCabang?>" ><?php echo $keyy->kota?></option>
                                     <?php   }} else{
                                       if($keyy->idCabang == $this->session->userdata('logged_in')['idCabang']){?> 
                                    <option value="<?php echo $keyy->idCabang?>" selected=""><?php echo $keyy->kota?></option>
                                    <?php   }else{?>

                                  <option value="<?php echo $keyy->idCabang?>" ><?php echo $keyy->kota?></option>
                                  <?php }}} ?>
                                </select>
                               
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Telepon Penerima</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="teleponPenerima" placeholder="" value="<?php echo $key->teleponPenerima?>" required autofocus>
                                </div>
                            </div>
                            
                            </div></div></div>
                         <div class="col-6">
                            
                        <div class="card">
                            <div class="card-body">
                               <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Nama Pengirim</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" value="<?php echo $key->pengirim?>" name="pengirim" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Alamat Pengirim</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="alamatPengirim" placeholder="" value="<?php echo $key->alamatPengirim?>" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Telepon Pengirim</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="teleponPengirim" placeholder="" required autofocus value="<?php echo $key->teleponPengirim?>">
                                </div>
                            </div>
                            </div></div></div></div>
                            <div class="row">
                            <div class="col-12">
                            
                        <div class="card">
                            <div class="card-body">
                          
                                <div class="form-group">
                                <label for="col-lg-5 col-sm-5 control-label">Jenis Barang</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="jenisBarang" value="<?php echo $key->jenisBarang?>" placeholder="" required autofocus >
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Berat</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="berat" value="<?php echo $key->berat?>" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Jenis Pengiriman</label>
                                <div class="col-lg-10">
                                    <select name="jenis" id="" class="form-control">
                                    <?php if($key->jenis == "REG"){ ?>
                                       <option value="REG" selected="">REG</option>
                                        <option value="OKE">OKE</option>
                                        <option value="YES">YES</option>
                                    <?php }else if($key->jenis == "OKE") {?>
                                    <option value="REG" >REG</option>
                                        <option value="OKE" selected="">OKE</option>
                                        <option value="YES">YES</option>
                                        <?php }else{ ?>
                                        <option value="REG" >REG</option>
                                        <option value="OKE" >OKE</option>
                                        <option value="YES" selected="">YES</option>
                                        <?php } ?>
                    
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">   
                                    <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
                            </div>
                               <?php }?>
                          
                             <?php echo form_close(); ?>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>



    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url()?>/assets/admin/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo base_url()?>/assets/admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="../../dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/excanvas.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="<?php echo base_url()?>/assets/admin/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>

    
    <script src="<?php echo base_url()?>/assets/admin/dist/js/pages/chart/chart-page-init.js"></script>
       <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery-2.2.4.min.js"></script>
        <script src="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.js"></script>      
        <link rel="stylesheet" href="<?php echo base_url();?>assets/datatables/jquery.dataTables.min.css">
<script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
</body>

</html>