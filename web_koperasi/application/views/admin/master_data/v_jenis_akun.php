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
            <small class="text-muted"> Jenis Akun Transaksi</small></h3>
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
                     <p><a href="<?php echo base_url()?>admin/master_data/jenis_akun/tambah" class="btn btn-inverse-primary btn-rounded btn-md"><i class="mdi mdi-plus-circle-outline menu icon "></i>
                     Tambah Jenis Akun</a>
                    <a href="<?php echo base_url()?>admin/master_data/jenis_akun/cetak" class="btn btn-inverse-info btn-md"><i class="mdi mdi-printer btn-icon-append"></i>
                    Cetak</a>
                    <a href="<?php echo base_url()?>admin/master_data/jenis_akun/export" class="btn btn-inverse-success btn-md"><i class="mdi mdi-file-excel btn-icon-append"></i>
                    Export</a>  
                  </p>
                     </div> 
                      </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Kode Aktiva </th>
                        <th>Jenis Transaksi</th>
                        <th>Akun </th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Aktif </th>
                        <th>Laba Rugi </th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                           $id = 1;
                          foreach($data_akun as $jenis_akun){ 
                                        ?>
                              <tr>
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $jenis_akun->kode_aktiva ?></td>
                          <td><?php echo $jenis_akun->jenis_akun ?></td>
                          <td><?php echo $jenis_akun->akun ?></td>
                          <td><?php echo $jenis_akun->pemasukan ?></td>
                          <td><?php echo $jenis_akun->pengeluaran ?></td>
                          <td><?php echo $jenis_akun->aktif ?></td>
                          <td><?php echo $jenis_akun->laba_rugi ?></td>
          
                              <td><i class="mdi mdi-pencil-box-outline menu-icon"><?php echo anchor('admin/master_data/jenis_akun/edit/'.$jenis_akun->id,'Edit'); ?> </td>
                              <td>
                              <i class="mdi mdi-delete menu-icon"><?php echo anchor('admin/master_data/jenis_akun/hapus/'.$jenis_akun->id,'Hapus'); 
                             
                                    ?>
                            </i></td>
                            </tr>

                                                   <?php } ?>
                    </tbody>                               
                  </table>
                
	<div class="pDiv">
		<div class="pDiv2">
			<div class="pGroup">
				<div class="pSearch pButton quickSearchButton" id="quickSearchButton" title="Cari">
					<span></span>
				</div>
			</div>
			<div class="btnseparator">
			</div>
			<div class="pGroup">
				<select name="per_page" id="per_page" class="per_page">
											<option value="10">10&nbsp;&nbsp;</option>
											<option value="25" selected="selected">25&nbsp;&nbsp;</option>
											<option value="50">50&nbsp;&nbsp;</option>
											<option value="100">100&nbsp;&nbsp;</option>
									</select>
				<input type="hidden" name="order_by[0]" id="hidden-sorting" class="hidden-sorting" value="LPAD(kd_aktiva, 1, 0) ASC, LPAD(kd_aktiva, 5, 1)">
				<input type="hidden" name="order_by[1]" id="hidden-ordering" class="hidden-ordering" value="ASC">
			</div>
			<div class="btnseparator">
			</div>
			<div class="pGroup">
				<div class="pFirst pButton first-button">
					<span></span>
				</div>
				<div class="pPrev pButton prev-button">
					<span></span>
				</div>
			</div>
			<div class="btnseparator">
			</div>
			<div class="pGroup">
				<span class="pcontrol">Halaman <input name="page" type="text" value="1" size="4" id="crud_page" class="crud_page">
				dari				<span id="last-page-number" class="last-page-number">4</span></span>
			</div>
			<div class="btnseparator">
			</div>
			<div class="pGroup">
				<div class="pNext pButton next-button">
					<span></span>
				</div>
				<div class="pLast pButton last-button">
					<span></span>
				</div>
			</div>
			<div class="btnseparator">
			</div>
			<div class="pGroup">
				<div class="pReload pButton ajax_refresh_and_loading" id="ajax_refresh_and_loading">
					<span></span>
				</div>
			</div>
			<div class="btnseparator">
			</div>
			<div class="pGroup">
				<span class="pPageStat">
																				Halaman <span id="page-starts-from" class="page-starts-from">1</span> - <span id="page-ends-to" class="page-ends-to">10</span> dari <span id="total_items" class="total_items">39</span> total				</span>
			</div>
		</div>
		<div style="clear: both;">
		</div>
	</div>
	</form>
                </div>
              </div>
            </div>
          </div>
        </div>

