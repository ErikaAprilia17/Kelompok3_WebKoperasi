<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Data Pemasukan Tunai
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/transaksi_kas/pemasukan">Data Pemasukan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/transaksi_kas/pemasukan/update" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $data_pemasukan->id?>">
                    <div class="form-group">
                      <label for="kode_transaksi"><b>Kode Transaksi</b></label>
                      <input type="text" class="form-control" name="kode_transaksi" id="kode_transaksi" placeholder="Kode Transaksi" value="<?= $data_pemasukan->kode_transaksi?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label for="tanggal_transaksi"><b>Tanggal Transaksi</b></label>
                      <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi"  value="<?= $data_pemasukan->tanggal_transaksi?>">
                    </div>
                    <div class="form-group">
                      <label for="uraian"><b>Uraian</b></label>
                      <input type="text" class="form-control" name="uraian" id="uraian" placeholder="Uraian" value="<?= $data_pemasukan->uraian?>">
                    </div>
                    <div class="form-group">
                      <label for="data_kas">Untuk Kas</label>
                        <select name="id_kas" id="data_kas" class="form-control" value="<?= $pemasukan->id_kas?>">
                        <?php foreach($id_kas as $data_kas){ ?>
                          <option value="<?=$data_kas->id?>" <?= ($data_pemasukan->id_kas == $data_kas->id)?'selected':'' ?>><?= $data_kas->nama_kas?></option>
                        <?php } ?>
                      </select>
                      </div>
                     <div class="form-group">
                      <label for="jenis_akun"><b>Dari Akun</b></label>
                        <select name="id_akun" id="jenis_akun" class="form-control" value="<?= $pemasukan->id_akun?>">
                        <?php foreach($id_akun as $jenis_akun){ ?>
                           <option value="<?=$jenis_akun->id?>" <?= ($data_pemasukan->id_akun == $jenis_akun->id)?'selected':'' ?>><?= $jenis_akun->jenis_akun?></option>
                        <?php } ?>
                      </select>
                      </div>
                    <div class="form-group">
                      <label for="jumlah"><b>Jumlah</b></label>
                      <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah" value="<?= $data_pemasukan->jumlah?>">
                    </div>
                     <div class="form-group">
                      <label for="data_pengguna"><b>User</b></label>
                        <select name="id_pengguna" id="data_pengguna" class="form-control" value="<?= $pemasukan->id_pengguna?>">
                         <?php foreach($id_pengguna as $data_pengguna){ ?>
                             <option value="<?=$data_pengguna->id?>" <?= ($data_pemasukan->id_pengguna == $data_pengguna->id)?'selected':'' ?>><?= $data_pengguna->username?></option>
                        <?php } ?>
                      </select>
                      </div>
                    <button type="submit" class="btn btn-gradient-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend"></i>Submit</button>
                    <a href="<?php echo base_url()?>admin/transaksi_kas/pemasukan" class="btn btn-gradient-danger btn-icon-text"><i class="mdi mdi-close-circle btn-icon-prepend"></i>Cancel</a>
                  </form>
              </div>
            </div>
                </div>
              </div>
            </div>
               