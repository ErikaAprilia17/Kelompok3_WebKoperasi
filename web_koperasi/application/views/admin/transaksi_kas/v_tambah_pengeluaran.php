<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
             Tambah Data Pengeluaran Tunai
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/transaksi_kas/pengeluaran">Data Pengeluaran</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/transaksi_kas/pengeluaran/insert" method="post">
                    <input type="hidden" class="form-control" name="id">
                   
                   <div class="form-group">
                      <label for="tanggal_transaksi"><b>Tanggal Transaksi</b></label>
                      <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="Tanggal Transaksi">
                    </div>
                    <div class="form-group">
                      <label for="uraian"><b>Uraian</b></label>
                      <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian" v>
                    </div>
                     <div class="form-group">
                      <label for="data_kas"><b>Dari Kas</b></label>
                        <select class="form-control" id="data_kas" name="id_kas">
                          <option value="">--Pilih--</option>
                        <?php foreach( $data_kas as $data_kas){ ?>
                          <option value="<?= $data_kas->id?>"><?= $data_kas->nama_kas ?></option>
                        <?php } ?>
                        </select>
                      </div>
                   <div class="form-group">
                      <label for="jenis_akun"><b>Untuk Akun</b></label>
                        <select class="form-control" id="jenis_akun" name="id_akun">
                          <option value="">--Pilih--</option>
                        <?php foreach( $jenis_akun as $data){ ?>
                          <option value="<?= $data->id?>"><?= $data->jenis_akun ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="jumlah"><b>Jumlah</b></label>
                      <input type="text" class="form-control" name="jumlah" id="rupiah" placeholder="jumlah" >
                    </div>
                     <div class="form-group">
                      <label for="data_pengguna"><b>User</b></label>
                        <select class="form-control" id="data_pengguna" name="id_pengguna">
                          <option value="">--Pilih--</option>
                        <?php foreach( $data_pengguna as $data){ ?>
                          <option value="<?= $data->id?>"><?= $data->username ?></option>
                        <?php } ?>
                        </select>
                      </div>
                     <button type="submit" class="btn btn-gradient-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i>Submit</button>
                    <a href="<?php echo base_url()?>admin/transaksi_kas/pengeluaran" class="btn btn-gradient-danger btn-icon-text"><i class="mdi mdi-close-circle btn-icon-prepend"></i>Cancel</a>
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
 
            