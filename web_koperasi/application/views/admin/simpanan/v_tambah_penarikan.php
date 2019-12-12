<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Tambah Data Penarikan Tunai
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/simpanan/penarikan_tunai">Data Penarikan Tunai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/simpanan/penarikan_tunai/insert" method="post" >
                   	
                    <input type="hidden" class="form-control" name="id" >
                  

                    <div class="form-group">
                      <label for="tanggal_transaksi">Tanggal Transaksi</label>
                      <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="Tanggal Transaksi" >
                    </div>
                    
                    <div class="form-group">
                      <label for="data_anggota">Nama Anggota</label>
                        <select class="form-control" id="data_anggota" name="id_anggota">
                          <option value="">--Pilih--</option>
                        <?php foreach($data_anggota as $nama){ ?>
                          <option value="<?=$nama->id_anggota?>"><?= $nama->nama_anggota?></option>
                        <?php } ?>
                        </select>
                      </div>

                      <div class="form-group">
                      <label for="departemen">Departemen</label>
                        <select class="form-control" id="departemen" name="id_departemen">
                          <option value="">--Pilih--</option>
                        <?php foreach($departemen as $departemen){ ?>
                        	<option value="<?=$departemen->id?>"><?= $departemen->departemen?></option>
                        <?php } ?>
                        </select>
                      </div>
                   
                    <div class="form-group">
                      <label for="jenis_simpanan">Jenis Penarikan</label>
                        <select class="form-control" id="jenis_simpanan" name="id_jenis_simpanan">
                         <option value="">--Pilih--</option>
                        <?php foreach($jenis_simpanan as $jenis_simpanan){ ?>
                        	<option value="<?=$jenis_simpanan->id?>"><?= $jenis_simpanan->jenis_simpanan?></option>
                        <?php } ?>
                   </select>
                 </div>
                    <div class="form-group">
                      <label for="jumlah">Jumlah</label>
                      <input type="text" class="form-control" name="jumlah" id="rupiah" placeholder="jumlah Penarikan" >
                    </div>
                    <div class="form-group">
                      <label for="data_pengguna"><b>User</b></label>
                        <select class="form-control" id="data_pengguna" name="id_pengguna">
                          <option value="">--Pilih--</option>
                        <?php foreach( $pengguna as $data){ ?>
                          <option value="<?= $data->id?>"><?= $data->username ?></option>
                        <?php } ?>
                        </select>
                      </div>

                  <p><b>Identitas Pengambil Kuasa</b></p>
                  
                    <div class="form-group">
                  	<label for="nama_kuasa">Nama Kuasa</label>
                  	<input type="text" class="form-control" name="nama_kuasa" id="nama_kuasa">
                  </div>
                  <div class="form-group">
                  	<label for="no_identitas">No. Identitas</label>
                  	<input type="text" class="form-control" name="no_identitas" id="no_identitas">
                  </div>
                  <div class="form-group">
                  	<label for="alamat">Alamat</label>
                  	<input type="text" class="form-control" name="alamat" id="alamat">
                  </div>

                    <button type="submit" class="btn btn-gradient-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i>Submit</button>
                    <a href="<?php echo base_url()?>admin/simpanan/penarikan_tunai" class="btn btn-gradient-danger btn-icon-text"><i class="mdi mdi-close-circle btn-icon-prepend"></i>Cancel</a>
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
            