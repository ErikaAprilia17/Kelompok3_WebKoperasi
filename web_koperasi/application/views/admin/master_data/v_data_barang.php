<?php if($this->session->flashdata('success_tambah')){ ?>
  <script> 
                Swal.fire(
                  'Success . . . !',
                  'Data Berhasil Disimpan',
                  'Thank You'
                )
            </script>  
              <?php } ?> 
<?php if($this->session->flashdata('success_hapus')){ ?>
    <script> 
      Swal.fire(
                'Success....!',
                'Data Berhasil di Hapus',
                'Thank You',
              )
      </script>
<?php } ?>
<div class="content-wrapper">
          <div class="page-header">
            <h3>Master Data
            <small class="text-muted"> Data Barang</small></h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <i class="mdi mdi-clock menu icon"></i><div id="clock"></div>
                <script type="text/javascript">        
                    function tampilkanwaktu(){        
                    var waktu = new Date();            
                    var sh = waktu.getHours() + "";    
                    var sm = waktu.getMinutes() + "";   
                    var ss = waktu.getSeconds() + "";  
                    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
                    }
                </script><i class="mdi mdi-calendar menu icon"></i>
               
                        <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
                        <span id="clock"></span> 
              
                      <?php
                      $hari = date('l');
                      if ($hari=="Sunday") {
                       echo "Minggu";
                      }elseif ($hari=="Monday") {
                       echo "Senin";
                      }elseif ($hari=="Tuesday") {
                       echo "Selasa";
                      }elseif ($hari=="Wednesday") {
                       echo "Rabu";
                      }elseif ($hari=="Thursday") {
                       echo("Kamis");
                      }elseif ($hari=="Friday") {
                       echo "Jum'at";
                      }elseif ($hari=="Saturday") {
                       echo "Sabtu";
                      }
                      ?>,
                
                      <?php
                      $tgl =date('d');
                      echo $tgl;
                      $bulan =date('F');
                      if ($bulan=="January") {
                       echo " Januari ";
                      }elseif ($bulan=="February") {
                       echo " Februari ";
                      }elseif ($bulan=="March") {
                       echo " Maret ";
                      }elseif ($bulan=="April") {
                       echo " April ";
                      }elseif ($bulan=="May") {
                       echo " Mei ";
                      }elseif ($bulan=="June") {
                       echo " Juni ";
                      }elseif ($bulan=="July") {
                       echo " Juli ";
                      }elseif ($bulan=="August") {
                       echo " Agustus ";
                      }elseif ($bulan=="September") {
                       echo " September ";
                      }elseif ($bulan=="October") {
                       echo " Oktober ";
                      }elseif ($bulan=="November") {
                       echo " November ";
                      }elseif ($bulan=="December") {
                       echo " Desember ";
                      }
                      $tahun=date('Y');
                      echo $tahun;
                      ?>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="box">
                  <div class="box-header">
                     <p><a href="<?php echo base_url()?>admin/master_data/data_barang/tambah" class="btn btn-inverse-primary btn-rounded btn-md"><i class="mdi mdi-plus-circle-outline menu icon "></i>
                     Tambah Barang</a>
                    <a href="<?php echo base_url()?>admin/master_data/data_barang/cetak" class="btn btn-inverse-info btn-md"><i class="mdi mdi-printer btn-icon-append"></i>
                    Cetak</a>
                    <a href="<?php echo base_url()?>admin/master_data/data_barang/export" class="btn btn-inverse-success btn-md"><i class="mdi mdi-file-excel btn-icon-append"></i>
                    Export</a>  
                  </p>
                     </div> 
                      </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Type</th>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Jumlah Barang</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                           $id = 1;
                          foreach($data_barang as $data_barang){ 
                                        ?>
                              <tr>
                           <td><?php echo $id++ ?></td>
                          <td><?php echo $data_barang->nama_barang ?></td>
                          <td><?php echo $data_barang->type ?></td>
                          <td><?php echo $data_barang->merk ?></td>
                          <td><?php echo $data_barang->harga ?></td>
                          <td><?php echo $data_barang->jumlah_barang ?></td>
                          <td><?php echo $data_barang->ket ?></td>
                        
                              <td><i class="mdi mdi-pencil-box-outline menu-icon"><?php echo anchor('admin/master_data/data_barang/edit/'.$data_barang->id,'Edit'); ?> </td></i>
                              <td>
                              <i class="mdi mdi-delete menu-icon"><?php echo anchor('admin/master_data/data_barang/hapus/'.$data_barang->id,'Hapus');?></i></td>
                            
                            </tr>

                                                   <?php } ?>
                    </tbody>                               
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>