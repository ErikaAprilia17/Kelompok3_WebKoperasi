<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Data Penarikan Tunai
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/simpanan/penarikan_tunai">Data Penarikan Tunai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/simpanan/penarikan_tunai/update" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $data_penarikan->id?>">
                    <div class="form-group">
                      <label for="kode_transaksi"><b>Kode Transaksi</b></label>
                      <input type="text" class="form-control" name="kode_transaksi" id="kode_transaksi" placeholder="Kode Transaksi" value="<?= $data_penarikan->kode_transaksi?>" readonly="readonly">
                    </div>
                    <div class="form-group">
                      <label for="tanggal_transaksi"><b>Tanggal Transaksi</b></label>
                      <input type="date" class="form-control" name="tanggal_transaksi" id="tanggal_transaksi" value="<?= $data_penarikan->tanggal_transaksi?>">
                    </div>
                    <div class="form-group">
                      <label for="id_anggota"><b>ID Anggota</b></label>
                      <input type="text" class="form-control" name="id_anggota" id="id_anggota" placeholder="ID Anggota" value="<?= $data_penarikan->id_anggota?>">
                    </div>
                     
                   <div class="form-group">
                      <label for="nama_Anggota"><b>Nama Anggota</b></label>
                        <select class="form-control" id="nama_anggota" name="id_anggota" value="<?= $penarikan_tunai->id_anggota?>">
                        <?php foreach($id_anggota as $data_anggota){ ?>
                          <option value="<?=$data_anggota->id_anggota?>" <?= ($data_penarikan->id_anggota == $data_anggota->id_anggota)?'selected':'' ?>><?= $data_anggota->nama_anggota?></option>
                        <?php } ?>
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="departemen"><b>Departemen</b></label>
                        <select class="form-control" id="departemen" name="id_departemen" value="<?= $penarikan_tunai->id_departemen?>">>
                        <?php foreach($id_departemen as $departemen){ ?>
                        	 <option value="<?=$departemen->id?>" <?= ($data_penarikan->id_departemen == $departemen->id)?'selected':'' ?>><?= $departemen->departemen?></option>
                        <?php } ?>
                        </select>
                      </div>

                    <div class="form-group">
                      <label for="jenis_penarikan"><b>Jenis Penarikan</b></label>
                        <select class="form-control" id="jenis_penarikan" name="id_jenis_simpanan" value="<?= $penarikan_tunai->id_jenis_simpanan?>">>
                        <?php
                            foreach ($id_jenis_simpanan as $jenis_simpanan) { ?>
                            <option value="<?=$jenis_simpanan->id?>" <?= ($data_penarikan->id_jenis_simpanan == $jenis_simpanan->id)?'selected':'' ?>><?= $jenis_simpanan->jenis_simpanan?></option>
                        <?php } ?>
                        </select>
                      </div>	
                     

                    <div class="form-group">
                      <label for="jumlah"><b>Jumlah </b></label>
                      <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="jumlah Penarikan" value="<?= $data_penarikan->jumlah?>">
                    </div>

                    <div class="form-group">
                      <label for="data_pengguna"><b>User</b></label>
                        <select name="id_pengguna" id="data_pengguna" class="form-control" value="<?= $penarikan_tunai->id_pengguna?>">
                         <?php foreach($id_pengguna as $data_pengguna){ ?>
                             <option value="<?=$data_pengguna->id?>" <?= ($data_penarikan->id_pengguna == $data_pengguna->id)?'selected':'' ?>><?= $data_pengguna->username?></option>
                        <?php } ?>
                      </select>
                      </div>

                    <button type="submit" class="btn btn-gradient-primary btn-icon-text"><i class="mdi mdi-file-check btn-icon-prepend">Submit</button></i>

                    <a href="<?php echo base_url()?>admin/simpanan/penarikan_tunai" class="btn btn-gradient-danger btn-icon-text"><i class="mdi mdi-close-circle btn-icon-prepend">Cancel</a></i>

                  </form>
                </div>
              </div>
            </div>