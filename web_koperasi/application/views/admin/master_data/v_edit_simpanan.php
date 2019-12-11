<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Jenis Simpanan
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/jenis_simpanan">Jenis Simpanan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ubah jenis simpanan</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/jenis_simpanan/update" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $data_simpanan->id?>">
                    <div class="form-group">
                      <label for="jumlah"><b>Jumlah</b></label>
                      <input type="text" class="form-control" name="jumlah" id="rupiah" placeholder="jumlah" value="<?= $data_simpanan->jumlah?>">
                    </div>
                    <div class="form-group">
                      <label for="tampil"><b>Tampil</b></label>
                        <select class="form-control" id="tampil" name="tampil">
                        <?php
                            if($data_simpanan->Tampil == 'Yes'){
                        ?>
                          <option selected="">Yes</option>
                          <option>No</option>
                        <?php }else{ ?>
                            <option>Yes</option>
                            <option selected="">No</option>
                            <?php } ?>
                        </select>

                      </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/jenis_simpanan" class="btn btn-light">Cancel</a>
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
          