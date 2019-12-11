<div class="content-wrapper">
   <div class="page-header">
          				<h3 class="page-title">
              			Edit Setoran Tunai
            			</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/simpanan/setoran_tunai">Setoran Tunai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Setoran Tunai</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/simpanan/setoran_tunai/update" method="post">

                    <input type="hidden" class="form-control" name="id" value="<?= $setoran->id?>">
                    <div class="form-group">
                      <label for="tgl_transaksi"><b>Tanggal Transaksi</b></label>
                      <input type="date" class="form-control" name="tgl_transaksi" id="tgl_transaksi" placeholder="tgl_transaksi" value="<?= $setoran->tgl_transaksi?>">
                    </div>
                <p><b>Identitas Penyetor </b></p>
                      <div class="form-group">
                      <label for="nama_penyetor">Nama Penyetor</label>
                      <input type="text" class="form-control" name="nama_penyetor" id="nama_penyetor" placeholder="nama_penyetor" value="<?= $setoran->nama_penyetor?>" >
                    </div>
                         <div class="form-group">
                      <label for="no_identitas">No.Identitas</label>
                      <input type="text" class="form-control" name="no_identitas" id="no_identitas" placeholder="no_identitas" value="<?= $setoran->no_identitas?>" >
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <textarea class="form-control" rows="5" cols="50" name="alamat"><?= $setoran->alamat?></textarea>
                   </div>
                   <p><b>Identitas Penerima</b></p>
                    <div class="form-group">
                      <label for="nama_anggota"><b>Nama Anggota</b></label>
                      <select name="id_anggota" id="nama_anggota" class="form-control" value="<?= $setoran->id_anggota?>">
                      <?php foreach($id_anggota as $data){ ?>
                          <option value="<?= $data->id_anggota ?>" <?= ($setoran->id_anggota == $data->id_anggota)?'selected':'' ?>><?= $data->nama_anggota ?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="departemen">Departemen</label>
                        <select class="form-control" id="departemen" name="id_departemen" >
                        <?php foreach($departemen as $dept){ ?>
                          <option value="<?=$dept->id?>" <?= ($setoran->id_departemen == $dept->id)?'selected':'' ?>><?= $dept->departemen?></option>
                        <?php } ?>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="jenis_simpanan">Jenis Simpanan</label>
                        <select name="id_jenis_simpanan" id="jenis_simpanan" class="form-control" >
                           <option value="">-Pilih-</option>
                        <?php foreach($id_jenis_simpanan as $data){ ?>
                          <option value="<?=$data->id?>" <?= ($setoran->id_jenis_simpanan == $data->id)?'selected':'' ?>><?= $data->jenis_simpanan?></option>
                        <?php } ?>
                      </select>
                    </div>
                       <div class="form-group">
                      <label> Jumlah Simpanan</label>
                      <input  class="form-control" name="jumlah" id="jumlah"  value="<?= $setoran->jumlah ?>" readonly / >
                    </div>
                    <div class="form-group">
                      <label for="use"><b>User</b></label>
                      <select class="form-control" id="user" name="user" value="<?= $setoran->user?>">
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
            </div>
              <script type="text/javascript">
		
              $(document).ready(function(){
                $( "#id_jenis_simpanan" ).trigger('change');
              });

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
	</script>
