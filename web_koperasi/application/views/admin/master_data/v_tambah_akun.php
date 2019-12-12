<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Tambah Data Jenis Akun
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/jenis_akun">Jenis Akun</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/jenis_akun/insert" method="post">
                    <input type="hidden" class="form-control" name="id">
                    
                    <div class="form-group">
                      <label for="jenis_akun"><b>Jenis Transaksi</b></label>
                      <input type="text" class="form-control" name="jenis_akun" id="jenis_akun" placeholder="Jenis Transaksi">
                    </div>
                    <div class="form-group">
                      <label for="akun"><b>Akun</b></label>
                        <select class="form-control" id="akun" name="akun">
                                  <option>Aktiva</option>
                                  <option>Passiva</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="pemasukan"><b>Pemasukan</b></label>
                        <select class="form-control" id="pemasukan" name="pemasukan">
                                  <option>Y</option>
                                  <option>N</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="pengeluaran"><b>Pengeluaran</b></label>
                        <select class="form-control" id="pengeluaran" name="pengeluaran">
                                <option>Y</option>
                                <option>N</option>
                      </select>
                      </div>
                       <div class="form-group">
                      <label for="aktif"><b>Aktif</b></label>
                        <select class="form-control" id="aktif" name="aktif">
                                  <option>Y</option>
                                  <option>N</option>
                      </select>
                      </div>
                       <div class="form-group">
                      <label for="laba_rugi"><b>Laba Rugi</b></label>
                      <input type="text" class="form-control" name="laba_rugi" id="rupiah" placeholder="Jumlah Laba Rugi">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/jenis_akun" class="btn btn-light">Cancel</a>
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