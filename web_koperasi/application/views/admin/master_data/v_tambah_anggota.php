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
              Tambah Data Anggota
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/data_anggota">Data Anggota</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Data Anggota</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
            <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/data_anggota/insert" method="post" enctype="multipart/form-data">
            	
                 
                  <div class="form-group">
                      <label for="nama_anggota"><b>Nama Anggota</b></label>
                      <input type="text" class="form-control" name="nama_anggota" id="nama_anggota" placeholder="nama_anggota" name="nama_anggota"> </div>

                   <div class="form-group">
                      <label for="jenis_kelamin"><b>Jenis Kelamin</b></label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option>--Pilih Jenis Kelamin--</option>
                                  <option>Perempuan</option>
                                  <option>Laki-Laki</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="tempat_lahir"><b>Tempat Lahir</b></label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat_lahir" id="tempat_lahir">
                   </div>
                   <div class="form-group">
                      <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
                      <input type="date" class="form-control" name="tanggal_lahir" placeholder="tanggal_lahir" id="tanggal_lahir">
                   </div>
                    <div class="form-group">
                      <label for="status"><b>Status</b></label>
                        <select class="form-control" id="status" name="status">
                        <?php foreach($status as $status){ ?>
                        	<option><?= $status->status ?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="departement"><b>Departement</b></label>
                        <select class="form-control" id="departement" name="departement">
                        <?php foreach($departemen as $dep){ ?>
                        	<option><?= $dep->departemen ?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="pekerjaan"><b>Pekerjaan</b></label>
                        <select class="form-control" id="pekerjaan" name="pekerjaan">
                        <?php foreach( $pekerjaan as $pekerjaan){ ?>
                        	<option><?= $pekerjaan->pekerjaan ?></option>
                        <?php } ?>
                        </select>
                      </div>
                      <div class="form-group">
                      <label for="agama"><b>Agama</b></label>
                        <select class="form-control" id="agama" name="agama">
                        <?php foreach( $agama as $agama){ ?>
                        	<option><?= $agama->agama ?></option>
                        <?php } ?>
                        </select>
                      </div>

                   <div class="form-group">
                      <label for="alamat"><b>Alamat</b></label>
                      <textarea class="form-control" rows="5" cols="50" name="alamat"></textarea>
                   </div>

                   <div class="form-group">
                      <label for="kota"><b>Kota</b></label>
                      <input type="text" class="form-control" name="kota" id="kota" placeholder="kota" name="kota"> 
                   </div>
                   <div class="form-group">
                      <label for="no_telpon"><b>No. Telpon</b></label>
                      <input type="text" class="form-control" name="no_telpon" id="no_telpon" placeholder="no_telpon" name="no_telpon"> 
                   </div>
                   <div class="form-group">
                      <label for="tgl_registrasi"><b>Tgl_Registrasi</b></label>
                      <input type="date" class="form-control" name="tgl_registrasi" id="tgl_registrasi" placeholder="tgl_registrasi" name="tgl_registrasi"> 
                   </div>
                   <div class="form-group">
                      <label for="jabatan"><b>Jabatan</b></label>
                        <select class="form-control" id="jabatan" name="jabatan">
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
                      <label for="username"><b>Username</b></label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="username" name="username"> 
                  </div>
                    <div class="form-group">
                      <label for="password"><b>Password</b></label>
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" name="password"> 
                   </div>
                  <div class="form-group">
                      <label for="aktif_keanggotaan"><b>Aktif Keanggotaan</b></label>
                        <select class="form-control" id="aktif_keanggotaan" name="aktif_keanggotaan">
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
								                <input type="file" class="form-control" name="photo">
								                 
                   </div>
                 </div>
               </div>
             </div>
           
                   <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <a href="<?php echo base_url()?>admin/master_data/data_anggota" class="btn btn-light">Cancel</a>
</form>

                </div>
              </div>
            </div>
          </div>
        </div>

       

