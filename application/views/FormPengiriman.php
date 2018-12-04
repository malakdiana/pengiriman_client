 <div class="page-wrapper">
  
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Tabel Pengiriman Cabang <?php  echo $this->session->userdata('logged_in')['kota'] ?></h4>
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

                            <div class="form-group">
                                <?php echo  form_open('Client/savePengiriman'); ?>
                           
                                <label class="col-lg-5 col-sm-5 control-label">Nama Penerima</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="penerima" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Alamat Penerima</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="alamatPenerima" placeholder="" required autofocus>
                                </div>
                            </div>
                           
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Kota</label>
                                <div class="col-lg-10">
                                <select name="tujuan" id="" class="form-control">
                                  <?php   foreach ($kota as $key) {
                            ?>
                                    <option value="<?php echo $key->idCabang?>"><?php echo $key->kota?></option>
                                    <?php   } ?>
                                </select>
                               
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Telepon Penerima</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="teleponPenerima" placeholder="" required autofocus>
                                </div>
                            </div>
                            
                            </div></div></div>
                         <div class="col-6">
                            
                        <div class="card">
                            <div class="card-body">
                               <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Nama Pengirim</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="pengirim" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Alamat Pengirim</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="alamatPengirim" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Telepon Pengirim</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="teleponPengirim" placeholder="" required autofocus>
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
                                <input type="text" class="form-control" name="jenisBarang" value="" placeholder="" required autofocus >
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Berat</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="berat" value="" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Jenis Pengiriman</label>
                                <div class="col-lg-10">
                                    <select name="jenis" id="" class="form-control">
                                        <option value="REG">REG</option>
                                        <option value="OKE">OKE</option>
                                        <option value="YES">YES</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">   
                                    <button class="btn btn-primary" type="submit" name="submit">Kirim</button>
                            </div>
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


    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                    <h4 class="modal-title">Tambah User</h4>
                </div>
                    <?php echo form_open_multipart('TabelAdmin2/addAdmin');?>
                
                    <div class="modal-body">
                           
                     <?php echo form_close(); ?>
                </div>
            </div>
        </div></div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 20px">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Data</h4>
                </div>
     <?php echo form_open_multipart('TabelAdmin/updateAdmin'); ?>
                <div class="form-group">
                <input type="text" name="idUserAdmin" id="idUserAdmin" hidden="">
                <input type="text" name="password2"  id="password2" hidden="">
                <label for="">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="" placeholder="username" >
                </div>

                <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="" >
                </div>
                <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="telepon" id="telepon" value="" >
                </div>
                <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email" value="">
                </div>
              
                <div class="form-group">
                <label for="col-lg-2 col-sm-2 control-label">Saldo</label>
                <input type="text" class="form-control" name="saldo" id="saldo" value="" placeholder="" >
                </div>
                <center><button type="submit" class="btn btn-primary">Submit</button></center>
                <?php echo form_close(); ?>
    </div>
    </div>
    </div>
</div>

    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
     <script src="<?php echo base_url()?>/assets/admin/libs/jquery/dist/jquery.min.js"></script>

  <script type="text/javascript">
    function showmodal(id,username,password,nama,alamat,telepon,email,saldo){
        document.getElementById('idUserAdmin').value = id;
        document.getElementById('username').value=username;
        document.getElementById('nama').value=nama;
        document.getElementById('password').value=password;
        document.getElementById('password2').value=password;
        document.getElementById('email').value=email;      
        document.getElementById('alamat').value=alamat;
        document.getElementById('telepon').value=telepon;
         document.getElementById('saldo').value=saldo;

        
    }
</script>
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