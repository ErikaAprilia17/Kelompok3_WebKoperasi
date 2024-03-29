<?php
							 $sess = $this->session->userdata('admin');
							?>
<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="nav-profile-image">
               <!--  <img src="<?= base_url('file/').$sess->foto ?>" alt="profile"> -->
                <span class="login-status online"></span> <!--change to offline or busy as needed-->              
              </div>
              <div class="nav-profile-text d-flex flex-column">
               <!--  <span class="font-weight-bold mb-2"><?= $sess->nama ?></span> -->
                <span class="text-secondary text-small">Admin</span>
              </div>
              <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>admin/dashboard">
              <span class="menu-title">Dashboard</span>
              <i class="mdi mdi-home menu-icon"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master_data" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Master Data</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-crosshairs-gps menu-icon"></i>
            </a>
            <div class="collapse" id="master_data">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/jenis_simpanan">Jenis Simpanan</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/jenis_akun">Jenis Akun</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/data_kas">Data Kas</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/lama_angsuran">Lama Angsuran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/data_barang">Data Barang</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/data_anggota">Data Anggota</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/master_data/data_pengguna">Data Pengguna</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#transaksi_kas" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Transaksi Kas</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-cart menu-icon"></i>
            </a>
            <div class="collapse" id="transaksi_kas">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/transaksi_kas/pemasukan">Pemasukan</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/transaksi_kas/pengeluaran">Pengeluaran</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/transaksi_kas/transfer">Transfer</a></li>
              </ul>
              </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#simpanan" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-title">Simpanan</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-cash-multiple menu-icon"></i>
            </a>
            <div class="collapse" id="simpanan">

              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/simpanan/setoran_tunai">Setoran Tunai</a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/simpanan/penarikan_tunai">Penarikan Tunai </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#setting" aria-expanded="false" aria-controls="general-pages">
              <span class="menu-title">Setting</span>
              <i class="menu-arrow"></i>
              <i class="mdi mdi-settings menu-icon"></i>
            </a>
            <div class="collapse" id="setting">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/setting/identitas_koperasi"> Identitas Koperasi </a></li>
                <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>admin/setting/suku_bunga"> Suku Bunga </a></li>
              </ul>
              </div>
          </li>
        </ul>
      </nav>