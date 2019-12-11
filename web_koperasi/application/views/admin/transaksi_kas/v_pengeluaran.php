<?php if($this->session->flashdata('success_tambah')){ ?>
  <script> 
                Swal.fire(
                  'Success . . . !',
                  'Data Berhasil Disimpan',
                  'Thank You',
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
            <small class="text-muted"> Pengeluaran Kas Tunai</small></h3>
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
                  <div class="navbar-form navbar-right">
                  <form action="<?php echo site_url('admin/transaksi_kas/pengeluaran/search');?>" method = "post" style="text-align: right; ">
                  <input type="text" name="keyword" class="from-control" placeholder="[Kode Transaksi]" style="text-align: center;" >
                    <button type="submit" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-magnify btn-icon-append "></i>
                    Search</button>
                    </div>
                     <p><a href="<?php echo base_url()?>admin/transaksi_kas/pengeluaran/tambah" class="btn btn-inverse-primary btn-rounded btn-sm"><i class="mdi mdi-plus-circle-outline menu icon "></i>
                     Tambah Pengeluaran</a>
                    <a href="<?php echo base_url()?>admin/transaksi_kas/pengeluaran/cetak" class="btn btn-inverse-info btn-sm"><i class="mdi mdi-printer btn-icon-append"></i>
                    Cetak</a>
                    <a href="<?php echo base_url()?>admin/transaksi_kas/pengeluaran/export" class="btn btn-inverse-success btn-sm"><i class="mdi mdi-file-excel btn-icon-append"></i>
                    Export</a> </p>
                     </div> 
                      </div>
               <h4 style="text-align: center;">Data Transaksi Pengeluaran Kas Tunai</h4>
                    <div class="form-group"></div>
																									
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Uraian </th>
                        <th>Dari Kas</th>
                        <th>Untuk Akun</th>
                        <th>Jumlah </th>
                        <th>User </th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                           $id = 1;
                          if(is_array($data_pengeluaran))
                          foreach($data_pengeluaran as $pengeluaran){ 
                                        ?>
                              <tr>
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $pengeluaran->kode_transaksi ?></td>
                          <td><?php echo $pengeluaran->tanggal_transaksi ?></td>
                          <td><?php echo $pengeluaran->uraian ?></td>
                          <td><?php echo $pengeluaran->nama_kas ?></td>
                          <td><?php echo $pengeluaran->jenis_akun ?></td>
                          <td><?php echo $pengeluaran->jumlah ?></td>
                          <td><?php echo $pengeluaran->username ?></td>
                           <td>
                             <i class="mdi mdi-lead-pencil menu-icon"><?php echo anchor('admin/transaksi_kas/pengeluaran/edit/'.$pengeluaran->id,'Edit'); ?> </td>
                              <td>
                              <i class="mdi mdi-delete menu-icon"><?php echo anchor('admin/transaksi_kas/pengeluaran/hapus/'.$pengeluaran->id,'Hapus'); 
                             
                                    ?>
                            </i></td>
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


