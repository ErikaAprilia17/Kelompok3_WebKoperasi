<?php if($this->session->flashdata('success_update')){ ?>
  <script> 
            Swal.fire(
                'Berhasil!',
                'Data Berhasil disimpan.',
                'success'
              )
</script>
<?php } ?> 
  <div class="content-wrapper">
          <div class="page-header">
          <h3>Setting
            <small class="text-muted"> Suku Bunga </small></h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <i class="mdi mdi-clock menu icon"></i><div id="clock"></div>
                <script type="text/javascript">        
                    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
                    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
                    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
                    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
                    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
                    }
                </script>
                
                <i class="mdi mdi-calendar menu icon"></i>
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
                  <h4 class="card-title">Biaya dan Administrasi</h4>
                  <table class="table table-striped">
 
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" action="<?php echo base_url()?>admin/setting/suku_bunga/update" method="post">
                    <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  
                 <div class="form-group">
                    <label for="tipe_pinjaman_bunga"><b>Tipe Pinjaman Bunga</b></label>
                      <select class="form-control" id="tipe_pinjaman_bunga" name="tipe_pinjaman_bunga">
                      		 <?php
                        if ($suku_bunga->tipe_pinjaman_bunga == 'A:: Persen Bunga dikalikan angsuran Bulan') {
                        			?>
                        		}
                        <option selected=""><b>A:: Persen Bunga dikalikan angsuran Bulan</b></option>
                       	<option><b>B:: Persen Bunga dikalikan total pinjaman</b></option>

                      			 <?php }else{ ?>
                        <option ><b>A:: Persen Bunga dikalikan angsuran Bulan</b></option>
                        <option selected=""><b>B:: Persen Bunga dikalikan total pinjaman</b></optio>   		<?php } ?>
                        </select>
                      </div>

                      <form class="forms-sample">
                    		<div class="form-group">
                      		<label for="suku_bunga_pinjaman"><b>Suku Bunga Pinjaman (%)</b></label>
                      			<input type="text" class="form-control" id="suku_bunga_pinjaman" name="suku_bunga_pinjaman" value="<?php echo $suku_bunga->suku_bunga_pinjaman ?>"/>
                    		</div>

                    <div class="form-group">
                      <label for="biaya_administrasi"><b>Biaya Administrasi (Rp)</b></label>
                      <input type="text" class="form-control" id="rupiah" name="biaya_administrasi" value="<?php echo $suku_bunga->biaya_administrasi ?>"/>
                    </div>

                    <div class="form-group">
                      <label for="biaya_denda"><b>Biaya Denda (Rp)</b></label>
                      <input type="text" class="form-control" id="rupiah" name="biaya_denda" value="<?php echo $suku_bunga->biaya_denda ?>"/>
                    </div>

                    <div class="form-group">
                      <label for="tempo_tanggal_pembayaran"><b>Tempo Tanggal Pembayaran</b></label>
                      <input type="text" class="form-control" id="tempo_tanggal_pembayaran" name="tempo_tanggal_pembayaran" value="<?php echo $suku_bunga->tempo_tanggal_pembayaran?>"/>
                    </div>
                    <div class="form-group">
                      <label for="dana_cadangan"><b>Dana Cadangan (%)</b></label>
                      <input type="text" class="form-control" id="dana_cadangan" name="dana_cadangan" value="<?php echo $suku_bunga->dana_cadangan ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="jasa_anggota"><b>Jasa Anggota (%)</b></label>
                      <input type="text" class="form-control" id="jasa_anggota" name="jasa_anggota" value="<?php echo $suku_bunga->jasa_anggota ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="dana_pengurus"><b>Dana Pengurus (%)</b></label>
                      <input type="text" class="form-control" id="dana_pengurus" name="dana_pengurus" value="<?php echo $suku_bunga->dana_pengurus ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="dana_karyawan"><b>Dana Karyawan (%)</b></label>
                      <input type="text" class="form-control" id="dana_karyawan" name="dana_karyawan"value="<?php echo $suku_bunga->dana_karyawan ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="dana_pendidikan"><b>Dana Pendidikan (%)</b></label>
                      <input type="text" class="form-control" id="dana_pendidikan" name="dana_pendidikan" value="<?php echo $suku_bunga->dana_pendidikan ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="dana_sosial"><b>Dana Sosial (%)</b></label>
                      <input type="text" class="form-control" id="dana_sosial" name="dana_sosial" value="<?php echo $suku_bunga->dana_sosial ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="jasa_usaha"><b>Jasa Usaha (%)</b></label>
                      <input type="text" class="form-control" id="jasa_usaha" name="jasa_usaha" value="<?php echo $suku_bunga->jasa_usaha ?>"/>
                    </div>
                    <div class="form-group">
                      <label for="jasa_modal_anggota"><b>Jasa Modal Anggota (%)</b></label>
                      <input type="text" class="form-control" id="jasa_modal_anggota" name="jasa_modal_anggota" value="<?php echo $suku_bunga->jasa_modal_anggota ?>"/>
                    </div><div class="form-group">
                      <label for="pajak_PPh"><b>Pajak PPh (%)</b></label>
                      <input type="text" class="form-control" id="pajak_PPh" name="pajak_PPh" value="<?php echo $suku_bunga->pajak_PPh ?>"/>
                    </div>
                    					<button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
                     </form> 
                       
                          

                       
                </div>
              </div>
            </div>
          </div>
        </div>

           <script type="text/javascript">
		
		var rupiah = document.getElementById('rupiah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, 'Rp. ');
		});
 
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
	</script>
