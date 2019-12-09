        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Profile
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/editprofile">edit</a></li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/editprofile/update/" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $data->id?>">
                    <div class="form-group">
                      <label for="nama"><b>Nama Lengkap</b></label>
                      <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="<?= $data->nama?>">
                    </div>
                    <div class="form-group">
                       <label for="email"><b>Alamat Email</b></label>
                      <input type="email" class="form-control" name="email" id="email" placeholder="email" value="<?= $data->email?>">
                    </div>
                    <div class="form-group">
                       <label for="tempatlahir"><b>Tempat Lahir</b></label>
                      <select  name="tempatlahir" id="id_tempatlahir" class="form-control"  onchange='changeValue(this.value)' required> 
                      <option value="">-Pilih-</option> 
                        <?php foreach($tempatlahir as $tmpl){ ?>
                          <option value="<?= $tmpl->id ?>" <?= $data->id_tempatlahir==$tmpl->id?'selected':'' ?>><?= $tmpl->nama ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="tgl_lahir"><b>Tanggal Lahir</b></label>
                      <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" placeholder="tgl_lahir" value="<?= $data->tgl_lahir?>">
                    </div>
                    <div class="form-group">
                       <label for="jk"><b>Jenis Kelamin</b></label>
                      <select type="jk" class="form-control" name="jk" id="jk" placeholder="jk" value="<?= $data->jk?>">
                        <option>--Pilih Jenis Kelamin--</option>
                          <option>Laki-Laki</option>
                          <option>Perempuan</option>
                        </select>
                      </div>
                    <div class="form-group">
                       <label for="no_tlpon"><b>No Telfun </b></label>
                      <input type="text" class="form-control" name="no_tlpon" id="no_tlpon" placeholder="no_tlpon" value="<?= $data->no_tlpon?>">
                    </div>
                    <div class="form-group">
                       <label for="status"><b>Status</b></label>
                      <select  name="status" id="id_status" class="form-control"  onchange='changeValue(this.value)' required> 
                      <option value="">-Pilih-</option> 
                        <?php foreach($status as $sts){ ?>
                          <option value="<?= $sts->id ?>" <?= $data->id_status==$sts->id?'selected':'' ?>><?= $sts->status ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    <div class="form-group">
                      <label for="col-form-label">Alamat</label>
                      <input type="text" class="form-control" value="<?= $data->alamat ?>" />
                    </div>
                    <div class="form-group">
                       <label for="kota"><b>Kota</b></label>
                      <select  name="kota" id="id_kota" class="form-control"  onchange='changeValue(this.value)' required> 
                      <option value="">-Pilih-</option> 
                        <?php foreach($kota as $kt){ ?>
                          <option value="<?= $kt->id ?>" <?= $data->id_kota==$kt->id?'selected':'' ?>><?= $kt->nama ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                       <label for="agama"><b>Agama</b></label>
                      <select name="agama"  id="id_agama" class="form-control"  onchange='changeValue(this.value)' required>
                        <option value="">-Pilih-</option>
                        <?php foreach($agama as $ag){ ?>
                          <option value="<?= $ag->id ?>" <?= $data->id_agama==$ag->id?'selected':'' ?>><?= $ag->agama ?></option>
                        <?php } ?>
                        </select>
                      </div>
                    <div class="form-group">
                       <label for="pekerjaan"><b>Pekerjaan</b></label>
                      <select name="pekerjaan"  id="id_pekerjaan" class="form-control"  onchange='changeValue(this.value)' required>
                        <option value="">-Pilih-</option>
                        <?php foreach($pekerjaan as $pkr){ ?>
                          <option value="<?= $pkr->id ?>" <?= $data->id_pekerjaan==$pkr->id?'selected':'' ?>><?= $pkr->pekerjaan ?></option>
                        <?php } ?>
                        </select>
                    </div>
                    <!-- <div class="form-group">
                      <label>File upload</label>
                      <input type="file" class="form-control" name="Photo_id" >
                      <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-gradient-primary mr-2">Simpan</button>
                    <a href="<?php echo base_url()?>admin/editprofile" class="btn btn-light">Kembali</a>
                  </form>
                </div>
              </div>
            </div>