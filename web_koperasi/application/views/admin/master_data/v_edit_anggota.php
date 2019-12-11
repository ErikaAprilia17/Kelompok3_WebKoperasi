<?php if($this->session->flashdata('success')){ ?>
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
            <h3 class="page-title">
              Edit Data Anggota
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/data_anggota">Data Anggota</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Data Anggota</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
           <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/data_anggota/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?= $data_anggota->id_anggota?>" />

                    <div class="form-group">
                      <label for="username"><b>Username</b></label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="username" value="<?= $data_anggota->username?>"/>
                    </div>
                  <div class="form-group">
                      <label for="nama_anggota"><b>Nama Anggota</b></label>
                      <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="nama_anggota" name="nama_anggota"  value="<?= $data_anggota->nama_anggota?>"/> </div>

                   <div class="form-group">
                      <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin"  value="<?= $data_anggota->jenis_kelamin?>"/>
                        <?php
                            if($data_anggota->jenis_kelamin == 'Perempuan'){
                        ?>
                          <option selected="">Perempuan</option>
                          <option>Laki-laki</option>
                        <?php }else{ ?>
                            <option>Perempuan</option>
                            <option selected="">Laki-laki</option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="tempat_lahir"><b>Tempat Lahir</b></label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir" id="tempat_lahir" value="<?= $data_anggota->tempat_lahir?>">
                   </div>
                   <div class="form-group">
                      <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
                      <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir" id="tanggal_lahir"  value="<?= $data_anggota->tanggal_lahir?>">
                   </div>

                    <div class="form-group">
                      <label for="status"><b>Status</b></label>
                        <select class="form-control" id="status" name="status">
                        <?php foreach($status as $status) { ?>
                            <option <?php if ($data_anggota->status == $status->status) { echo "selected";} ?>>
                              <?= $status->status ?>
                                
                              </option>
                            

                           <?php } ?>
                            </select>
                      </div>
                      <div class="form-group">
                      <label for="departemen"><b>Departement</b></label>
                        <select class="form-control" id="departemen" name="departemen">
                        <?php foreach($departemen as $departemen){ ?>
                            <option <?php if ($data_anggota->departemen == $departemen->departemen) { echo "selected";} ?>>
                              <?= $departemen->departemen ?>
                            </option>
                       
                        
                         <?php } ?>
                         </select>
                      </div>
                      <div class="form-group">
                      <label for="pekerjaan"><b>Pekerjaan</b></label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan">
                        <?php foreach( $pekerjaan as $pekerjaan){ ?>
                            <option <?php if ($data_anggota->pekerjaan == $pekerjaan->pekerjaan) { echo "selected";} ?>>
                              <?= $pekerjaan->pekerjaan ?> 
                            </option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="agama"><b>Agama</b></label>
                        <select class="form-control" id="agama" name="agama">
                        <?php foreach( $agama as $agama){ ?>
                            <option <?php if ($data_anggota->agama== $agama->agama) { echo "selected";} ?>><?= $agama->agama ?> 
                          </option>

                        <?php } ?>
                        </select>
                      </div>

                   <div class="form-group">
                      <label for="alamat"><b>Alamat</b></label>
                      <textarea class="form-control" rows="5" cols="50" name="alamat"  id="alamat" value="<?= $data_anggota->alamat ?>"></textarea>
                   </div>

                   <div class="form-group">
                      <label for="kota"><b>Kota</b></label>
                      <input type="text" class="form-control" name="kota" id="kota" placeholder="kota" name="kota"  value="<?= $data_anggota->kota?>"> 
                   </div>
                   <div class="form-group">
                      <label for="no_telpon"><b>No. Telpon</b></label>
                      <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="no_telpon" name="no_telpon"  value="<?= $data_anggota->no_telpon?>"> 
                   </div>
                   <div class="form-group">
                      <label for="tgl_registrasi"><b>Tgl_Registrasi</b></label>
                      <input type="date" class="form-control" name="tgl_registrasi" id="tgl_registrasi" placeholder="tgl_registrasi" name="tgl_registrasi"  value="<?= $data_anggota->tgl_registrasi?>"> 
                   </div>
                   <div class="form-group">
                      <label for="jabatan"><b>Jabatan</b></label>
                        <select class="form-control" id="jabatan" name="jabatan" value="<?= $data_anggota->jabatan?>">
                        <?php
                            if($data_anggota->jabatan == 'Pengurus'){
                        ?>
                          <option selected="">Pengurus</option>
                          <option>Anggota</option>
                        <?php }else{ ?>
                            <option>Pengurus</option>
                            <option selected="">Anggota</option>
                            <?php } ?>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="password"><b>Password</b></label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" name="password" value="<?= $data_anggota->password?>"> 
                   </div>
                  <div class="form-group">
                      <label for="aktif_keanggotaan"><b>Aktif Keanggotaan</b></label>
                        <select class="form-control" id="aktif_keanggotaan" name="aktif_keanggotaan" value="<?= $data_anggota->aktif_keanggotaan ?>">
                        <?php
                            if($data_anggota->aktif_keanggotaan == 'Aktif'){
                        ?>
                          <option selected="">Aktif</option>
                          <option>Non Aktif</option>
                        <?php }else{ ?>
                            <option>Aktif</option>
                            <option selected="">Non Aktif</option>
                            <?php } ?>
                        </select>
                      </div>
                      <div class="container">
                          <div class="row">
                          <div class="col-sm-4"></div>
                          <div class="col-sm-4">
                           <h2 class="left">Photo</h2>
                          <div class="form-group">
                            <input type="file" class="form-control" name="photo" value="<?= $data_anggota->photo?>">
                                                 
                   </div>
                 </div>
               </div>
             </div>
           
                   <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
                            <a href="<?php echo base_url()?>admin/master_data/data_anggota" class="btn btn-light">Cancel</a>
</form>

                </div>
              </div>
            </div>
          </div>
        </div>

       

