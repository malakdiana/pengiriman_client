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
                    <div class="col-12">
                            
                        <div class="card">
                            <div class="card-body">
                                
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                    <td><b>NIK</b></td>
                                    <td><b>Nama Kurir</b></td>
                                    <td><b>Jenis Kelamin</b></td>
                                    <td><b>Alamat</b></td>
                                    <td><b>Telepon</b></td>
                                    <td><b>Aksi</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kurir as $key ) { ?>
                                    <tr>
                                        <td><?php echo $key->nik ?></td>
                                        <td><?php echo $key->nama ?></td>
                                        <td><?php echo $key->jenisKelamin ?></td>
                                        <td><?php echo $key->alamat ?></td>
                                        <td><?php echo $key->telepon ?></td>
                                     
                                        <td>
                                           
                                            
                                            <a href="javascript:void(0);" 
                                            onclick="showmodal('<?php echo $key->idKurir?>','<?php echo $key->nik ?>','<?php echo $key->nama ?>','<?php echo $key->alamat ?>','<?php echo $key->telepon?>')"  data-toggle="modal" 
                                                data-target="#myModalEdit"><button class="btn btn-default"><i class="mdi mdi-table-edit" title="edit kurir"></i></button></a>
                                            <a href="<?php echo site_url()?>/Client/delete/<?php echo $key->idKurir ?>"><button class="btn btn-danger"><i class="mdi mdi-delete" title="hapus kurir"></i></button></a>
                                        </td>
                                    </tr>
                                  
                                    <?php } ?>
                            </tbody>
                                           
                                       
                                    </table>
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


   

        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalEdit" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 20px">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Kurir</h4>
                </div>
          <div class="modal-body">
               <?php echo  form_open('Client/editKurir'); ?>
                           <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">NIK Kurir</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="nik" id="nik" placeholder="" required autofocus>
                                    <input type="text" class="form-control" name="idKurir" id="idKurir" placeholder=""  hidden="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Nama Kurir</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="" required autofocus>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="col-lg-5 col-sm-5 control-label">Jenis Kelamin</label>
                                <div class="col-lg-10">
                                    <select name="jenisKelamin" id="jenisKelamin" class="form-control">
                                        <option value="L">Laki-Laki</option>
                                        <option value="P">Perempuan</option>
                                
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                 <label class="col-lg-5 col-sm-5 control-label">Alamat</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" required autofocus>
                                </div>
                            </div>
                             <div class="form-group">
                                 <label class="col-lg-5 col-sm-5 control-label">Telepon</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="" required autofocus>
                                </div>
                            </div>
                            <div class="form-group">   
                                    <button class="btn btn-primary" type="submit" name="submit">Simpan</button>
                            </div>
                            
                        
                            </div>
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
    function showmodal(idKurir,nik,nama,alamat,telepon){
        document.getElementById('idKurir').value=idKurir;
        document.getElementById('nik').value =nik;
        document.getElementById('nama').value=nama;
        document.getElementById('alamat').value=alamat;
        document.getElementById('telepon').value=telepon;
    
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