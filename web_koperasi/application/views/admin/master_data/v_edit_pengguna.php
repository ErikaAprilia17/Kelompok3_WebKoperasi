<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Edit Data Pengguna
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/data_pengguna">edit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/data_pengguna/update/" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $pengguna->id?>">
                    <div class="form-group">
                      <label for="username"><b>Username</b></label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $pengguna->username?>">
                    </div>
                    <div class="form-group">
                      <label for="level"><b>Level</b></label>
                        <select class="form-control" id="level" name="level">
                      <?php
                            if($pengguna->level == 'Admin'){
                        ?>
                          <option selected="">Admin</option>
                          <option>Operator</option>
                          <option>Pinjaman</option>

                        <?php{else if ?>
                            <option>Admin</option>
                            <option selected="">Operator</option>
                            <option>Pinjaman</option>

                       <?php }else{ ?>
                            <option>Admin</option>
                            <option>Operator</option>
                            <option selected="">Pinjaman</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="aktif"><b>Aktif</b></label>
                        <select class="form-control" id="aktif" name="aktif">
                        <?php
                            if($pengguna->aktif == 'Aktif'){
                        ?>
                          <option selected="">Aktif</option>
                          <option>Passif</option>
                        <?php }else{ ?>
                            <option>Aktif</option>
                            <option selected="">Passif</option>
                            <?php } ?>
                        </select>
                      </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/data_pengguna" class="btn btn-light">Cancel</a>
                  </form>
              </div>
            </div>
                </div>
              </div>
            </div>
            