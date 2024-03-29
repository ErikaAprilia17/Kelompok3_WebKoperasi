<div class="content-wrapper">
   <div class="page-header">
			            <h3 class="page-title">
			              Tambah Setoran Tunai
			            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/simpanan/setoran_tunai">Setoran Tunai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah</li>

              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                  <form class="forms-sample" action="<?php echo base_url()?>admin/simpanan/setoran_tunai/insert" method="post">
                    <input type="hidden" class="form-control" name="id" >
                    <div class="form-group">
                      <label for="tgl_transaksi">Tanggal Transaksi</label>
                      <input type="date" class="form-control" name="tgl_transaksi" id="tgl_transaksi" placeholder="tgl_transaksi" >
                    </div>
                <p><b>Identitas Penyetor </b></p>
                			<div class="form-group">
                      <label for="nama_penyetor">Nama Penyetor</label>
                      <input type="text" class="form-control" name="nama_penyetor" id="nama_penyetor" placeholder="nama_penyetor" >
                         <div class="form-group">
                      <label for="no_identitas">No.Identitas</label>
                      <input type="text" class="form-control" name="no_identitas" id="no_identitas" placeholder="no_identitas" >
                    </div>	
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" rows="5" cols="50" name="alamat"></textarea>
                   </div>
                   <p><b>Identitas Penerima</b></p>
                   <div class="form-group">
                      <label for="nama_anggota">Nama Anggota</label>
                        <select class="form-control" id="nama_anggota" name="id_anggota">
                        <?php foreach($data_anggota as $nama){ ?>
                        	<option value="<?=$nama->id_anggota?>"><?= $nama->nama_anggota?></option>
                        <?php } ?>
                        </select>
                      </div>
                  <div class="form-group">
                      <label for="departemen">Departemen</label>
                        <select class="form-control" id="departemen" name="id_departemen">
                        <?php foreach($departemen as $dept){ ?>
                        	<option value="<?=$dept->id?>"><?= $dept->departemen?></option>
                        <?php } ?>
                        </select>
                      </div>
                   <div class="form-group">
                      <label for="jenis_simpanan">Jenis Simpanan</label>
                        <select name="jenis_simpanan" id="id_jenis_simpanan" class="form-control" >
                           <option value="">-Pilih-</option>
                        <?php foreach($jenis_simpanan as $data){ ?>
                        	<option value="<?=$data->id?>"><?= $data->jenis_simpanan?></option>
                        <?php } ?>
                      </select>
                    </div>
                       <div class="form-group">
                      <label> Jumlah Simpanan</label>
                      <input  class="form-control" name="jumlah" id="rupiah" readonly / >

                    </div>
                    <div class="form-group">
                      <label for="user">User</label>
                      <select class="form-control" id="user" name="user" >
                          <option>Admin</option>
                          <option>Member</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/simpanan/setoran_tunai" class="btn btn-light">Cancel</a>
                  </form>
              </div>
            </div>
                </div>
              </div>

              <script type="text/javascript">
                 $( "#id_jenis_simpanan" ).change(function() {
                var id = $(this).val();
                $.ajax({
                    dataType: "json",
                    url:BASE_URL+'admin/simpanan/setoran_tunai/get_jumlah/'+id,
                    success: function(res){
                      $("#rupiah").val(res.jumlah);
                    }
                  });
            });
		
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
            
