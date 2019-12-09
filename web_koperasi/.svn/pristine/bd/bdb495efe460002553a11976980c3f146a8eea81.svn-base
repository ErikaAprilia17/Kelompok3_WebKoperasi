<?php if($this->session->flashdata('success')){ ?>
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
            <h3>Transaksi
            <small class="text-muted"> Setoran Tunai</small></h3>
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
                <!-- /*Menampilkan Waktu*/ -->
                        <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
                        <span id="clock"></span> 
               <!--  /*Menampilakan Hari*/ --> 
                      <?php
                      $hari = date('l');
                      /*$new = date('l, F d, Y', strtotime($Today));*/
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
                 <!-- /*Menampilkan Tanggal*/ -->
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
                     <a href="<?php echo base_url()?>admin/simpanan/setoran_tunai/tambah" class="btn btn-gradient-primary btn-rounded btn-fw"><i class="mdi mdi-plus-circle-outline menu icon ">Tambah Data</i>
                     
                </a>
              </div> 
                </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Anggota</th>
                        <th>Departemen</th>
                        <th>Jenis Simpanan</th>
                        <th>Jumlah </th>
                        <th>User </th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                           $id = 1;
                          foreach($data_setoran as $setoran_tunai){ 
                                        ?>
                              <tr>
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $setoran_tunai->kode_transaksi ?></td>
                         <td><?php echo $setoran_tunai->tgl_transaksi ?></td>
                          <td><?php echo $setoran_tunai->nama_anggota ?></td>
                          <td><?php echo $setoran_tunai->departemen ?></td>
                          <td><?php echo $setoran_tunai->jenis_simpanan ?></td>
                          <td><?php echo $setoran_tunai->jumlah ?></td>
                          <td><?php echo $setoran_tunai->user ?></td>
          
                              <td><i class="mdi mdi-pencil-box-outline menu-icon"><?php echo anchor('admin/simpanan/setoran_tunai/edit/'.$setoran_tunai->id,'Edit'); ?> </td>
                              <td>
                              <i class="mdi mdi-delete menu-icon"><?php echo anchor('admin/simpanan/setoran_tunai/hapus/'.$setoran_tunai->id,'Hapus'); 
                             
                                    ?>
                            </i></td>
                            </tr>

                                                   <?php } ?>
                    </tbody>                               
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

