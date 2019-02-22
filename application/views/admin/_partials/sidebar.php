    <ul class="sidebar navbar-nav">
      <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Master</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <a class="dropdown-item" href="<?php echo base_url().'admin/suplier'?>">Customer</a>
		    <a class="dropdown-item" href="<?php echo base_url().'admin/suplier'?>">Suplier</a>
          <a class="dropdown-item" href="<?php echo base_url().'admin/kategori'?>">category</a>
          <a class="dropdown-item" href="<?php echo base_url().'admin/barang'?>">Product</a>
		<a class="dropdown-item" href="<?php echo base_url().'admin/pengguna'?>">User</a>
          <div class="dropdown-divider"></div>
          
          <a class="dropdown-item" href="404.html">COA</a>
          <a class="dropdown-item" href="blank.html">Bank</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url().'admin/penjualan'?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Penjualan</span></a>
     
        <a class="nav-link" href="<?php echo base_url().'admin/pembelian'?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Pembelian</span></a>
		  
		   <a class="nav-link" href="<?php echo base_url().'admin/pembelian'?>">
          <i class="fas fa-fw fa-table"></i>
          <span>Laporan</span></a>
      </li>
    </ul>