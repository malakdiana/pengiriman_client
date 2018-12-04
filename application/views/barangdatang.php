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
                                    <td><b>Nomor Resi</b></td>
                                    <td><b>Asal Pengiriman</b></td>
                                    <td><b>Tanggal</b></td>
                                    <td><b>Status</b></td>
                                    <td><b>Kurir</b></td>
                                    <td><b>Aksi</b></td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php foreach ($pengiriman as $key ) { ?>
                                    <tr>
                                        <td><?php echo $key->noResi ?></td>
                                        <td><?php echo $key->kota ?></td>
                                        <td><?php echo $key->tanggal ?></td>
                                        <td><?php echo $key->statuskirim ?></td>
                                        <td>
                                            <a href="javascript:void(0);" 
                                            onclick="showmodal('<?php echo $key->nama ?>','<?php echo $key->nik ?>','<?php echo $key->jenisKelamin?>','<?php echo $key->alamat ?>','<?php echo $key->telepon ?>')" 
                                                data-toggle="modal" 
                                                data-target="#myModalEdit"><button class="btn btn-secondary">Cek</button></a>
                                            
                                        </td>
                                        <td>
                                             <a href="javascript:void(0);" 
                                            onclick="showmodalkirim('<?php echo $key->noResi ?>','<?php echo $key->alamatPenerima ?>')" 
                                                data-toggle="modal" 
                                                data-target="#myModalKirim"><button class="btn btn-default">Lanjut Pengiriman</button></a>
                                            
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
                    <h4 class="modal-title">Detail</h4>
                </div>
 
                <div class="form-group">
                <label for="">Nama</label>
                <input type="text" class="form-control" id="pengirim" name="username" value="" placeholder="username" >
                </div>

                <div class="form-group">
                <label for="">NIK</label>
                <input type="text" class="form-control" name="alamatPengirim" id="alamatPengirim" value="" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text" class="form-control" name="nama" id="teleponPengirim" value="" placeholder="password" >
                </div>
                <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" id="penerima" name="penerima" value="" >
                </div>
                <div class="form-group">
                <label for="">Telepon</label>
                <input type="text" class="form-control" name="alamatPenerima" id="alamatPenerima" value="" >
                </div>
                
                
    </div>
    </div>
    </div>
</div>
 <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModalKirim" class="modal fade-in">
        <div class="modal-dialog">
            <div class="modal-content" style="padding: 20px">
                <div class="modal-header">
                    <h4 class="modal-title">Kirim Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <?php echo  form_open('Client/lanjutKirim'); ?>
                        <label for="">Nomor Resi</label>
                        <input type="text" class="form-control" id="noResi" name="noResi" value="" placeholder="noResi" readonly="">
                    </div>

                <div class="form-group">
                <label for="">Kurir</label>
                       <select name="kurir" id="" class="form-control">
                                  <?php foreach ($kurirr as $key) {
                            ?>
                                    <option value="<?php echo $key->idKurir?>"><?php echo $key->nama?></option>
                                    <?php   } ?>
                                </select>
               
                </div>
                <div class="form-group">
                        <label for="">Tujuan</label>
                       <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="">Tanggal</label> 
                            <input type="date" class="form-control" name="tanggal">  
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                        <?php echo form_close(); ?>
                    </div>

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
    function showmodal(pengirim,alamatPengirim,teleponPengirim,penerima,alamatPenerima){
        document.getElementById('pengirim').value =pengirim;
        document.getElementById('alamatPengirim').value=alamatPengirim;
        document.getElementById('teleponPengirim').value=teleponPengirim;
        document.getElementById('penerima').value=penerima;
        document.getElementById('alamatPenerima').value=alamatPenerima; 
    }
   
    function showmodalkirim(noResi,alamat){
        document.getElementById('noResi').value =noResi;
        document.getElementById('alamat').value =alamat;
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