<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Data Barang
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/data_barang">edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Barang</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/data_barang/update" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $data_barang->id?>">
                    <div class="form-group">
                      <label for="nama_barang"><b>Nama Barang</b></label>
                      <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="<?= $data_barang->nama_barang?>">
                    </div>
                    <div class="form-group">
                      <label for="type"><b>Type</b></label>
                      <input type="text" class="form-control" name="type" id="type" placeholder="Type" value="<?= $data_barang->type?>">
                    </div>
                    <div class="form-group">
                      <label for="merk"><b>Merk</b></label>
                      <input type="text" class="form-control" name="merk" id="merk" placeholder="Merk" value="<?= $data_barang->merk?>">
                    </div>
                    <div class="form-group">
                      <label for="harga"><b>Harga</b></label>
                      <input type="text" class="form-control" name="harga" id="rupiah" placeholder="Harga Satuan" value="<?= $data_barang->harga?>">
                    </div>
                    <div class="form-group">
                      <label for="jumlah_barang"><b>Jumlah Barang</b></label>
                      <input type="text" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Jumlah Barang" value="<?= $data_barang->jumlah_barang?>">
                    </div>
                    <div class="form-group">
                      <label for="ket"><b>Keterangan</b></label>
                      <input type="text" class="form-control" name="ket" id="ket" placeholder="Keterangan" value="<?= $data_barang->ket?>">
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/data_barang" class="btn btn-light">Cancel</a>
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
            