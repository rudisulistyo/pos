<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("admin/_partials/head.php") ?>
   
</head>

<body id="page-top">
 <?php $this->load->view("admin/_partials/navbar.php") ?>

    <!-- Navigation -->
   <?php 
        $this->load->view('admin/menu');
   ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#fcc;">Welcome to
                    <small>Point of Sale Apps</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->
	<div class="mainbody-section text-center">
     <?php $h=$this->session->userdata('akses'); ?>
     <?php $u=$this->session->userdata('user'); ?>

        <!-- Projects Row -->
        <div class="row">
         <?php if($h=='1'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan'?>" data-toggle="modal">
                           <i class="fa fa-shopping-bag"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Penjualan Eceran</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item green" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan_grosir'?>" data-toggle="modal">
                           <i class="fa fa-cubes"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Penjualan Grosir</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-orange" style="height:150px;">
                     <a href="<?php echo base_url().'admin/suplier'?>" data-toggle="modal">
                           <i class="fa fa-truck"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Suplier</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item color" style="height:150px;">
                     <a href="<?php echo base_url().'admin/kategori'?>" data-toggle="modal">
                           <i class="fa fa-sitemap"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Kategori</p>
                      </a>
                </div> 
            </div>
            <?php }?>
            <?php if($h=='2'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="#" data-toggle="modal">
                           <i class="fa fa-shopping-cart"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Penjualan Eceran</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item green" style="height:150px;">
                     <a href="#" data-toggle="modal">
                           <i class="fa fa-users"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Penjualan Grosir</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-orange" style="height:150px;">
                     <a href="#" data-toggle="modal">
                           <i class="fa fa-truck"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Suplier</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item color" style="height:150px;">
                     <a href="#" data-toggle="modal">
                           <i class="fa fa-sitemap"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Kategori</p>
                      </a>
                </div> 
            </div>
            <?php }?>
        </div>
        
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
        <?php if($h=='1'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item purple" style="height:150px;">
                     <a href="<?php echo base_url().'admin/barang'?>" data-toggle="modal">
                           <i class="fa fa-shopping-cart"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Barang</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item red" style="height:150px;">
                     <a href="<?php echo base_url().'admin/pengguna'?>" data-toggle="modal">
                           <i class="fa fa-users"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Pengguna</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="<?php echo base_url().'admin/laporan'?>" data-toggle="modal">
                           <i class="fa fa-bar-chart"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Laporan</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-red" style="height:150px;">
                     <a href="<?php echo base_url().'admin/pembelian'?>" data-toggle="modal">
                           <i class="fa fa-cubes"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Pembelian</p>
                      </a>
                </div> 
            </div>
            <?php }?>
            <?php if($h=='2'){ ?> 
            <div class="col-md-3 portfolio-item">
                <div class="menu-item purple" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan_grosir'?>" data-toggle="modal">
                           <i class="fa fa-cubes"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Penjualan Grosir</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item red" style="height:150px;">
                     <a href="<?php echo base_url().'admin/penjualan'?>" data-toggle="modal">
                           <i class="fa fa-shopping-bag"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Penjualan Eceran</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item blue" style="height:150px;">
                     <a href="#" data-toggle="modal">
                           <i class="fa fa-bar-chart"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Laporan</p>
                      </a>
                </div> 
            </div>
            <div class="col-md-3 portfolio-item">
                <div class="menu-item light-red" style="height:150px;">
                     <a href="#" data-toggle="modal">
                           <i class="fa fa-cubes"></i>
                            <p style="text-align:left;font-size:14px;padding-left:5px;">Pembelian</p>
                      </a>
                </div> 
            </div>
            <?php }?>
        </div>
        
		
        <!-- /.row -->
	
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>

</html>
