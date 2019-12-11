 <?php if($this->session->flashdata('success_tambah')){ ?>
  <script> 
                Swal.fire(
                  'Insert!',
                  'Your file has been Insert.',
                  'success'
                )
            </script>  
              <?php } ?> 

 <?php if($this->session->flashdata('success_hapus')){ ?>
  <script> 
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
            </script>  
              <?php } ?>

 <?php if($this->session->flashdata('success_edit')){ ?>
  <script> 
                Swal.fire(
                  'Edit!',
                  'Your file has been Insert.',
                  'success'
                )
            </script>  
              <?php } ?>  

 
<div class="content-wrapper">
          <div class="page-header">
            <h3>Master Data 
            <small class="text-muted"> Data Anggota</small></h3>
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
                     <a href="<?php echo base_url()?>admin/master_data/data_anggota/tambah" class="btn btn-gradient-primary btn-rounded btn-fw"><i class="mdi mdi-plus-circle-outline menu icon ">Tambah Data Anggota</i>                    
                		</a>
              </div> 
                </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>ID Anggota</th>
                        <th>Username </th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin </th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Jabatan </th>
                        <th>Departemen </th>
                        <th>Tanggal Registrasi</th>
                        <th>Aktif Keanggotaan</th>
                        <th>Pilihan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                          foreach($data_anggota as $key => $data_anggota){ 
                          	// $no = 1;
                                        ?>
                              <tr>
                          <td><img src="<?php echo base_url().'file/'.$data_anggota->photo?>"></td>
                          <td><?php echo ++$key ?></td>
                          <td><?php echo $data_anggota->username ?></td>
                          <td><?php echo $data_anggota->nama_anggota ?></td>
                          <td><?php echo $data_anggota->jenis_kelamin ?></td>
                          <td><?php echo $data_anggota->alamat ?></td>
                          <td><?php echo $data_anggota->kota ?></td>
                          <td><?php echo $data_anggota->jabatan ?></td>
                          <td><?php echo $data_anggota->departemen ?></td>
                          <td><?php echo $data_anggota->tgl_registrasi ?></td>
                          <td><?php echo $data_anggota->aktif_keanggotaan ?></td>
                          

                              <td>
                              	<?php echo anchor('admin/master_data/data_anggota/edit/'.$data_anggota->id_anggota,'Edit'); ?> 
                            </td>	
                            <td>
                            	<?php echo anchor('admin/master_data/data_anggota/hapus/'.$data_anggota->id_anggota,'Hapus'); ?>
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
<script type="text/javascript">
          function hapus(id){
            Swal.fire({
           title: 'Are you sure?',
           text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).
         then((result) => {
            if (result.value) {
              window.location.href = BASE_URL+'admin/master_data/data_anggota/hapus/'+id;
            }
          })
          }
        </script>
       

