<div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Tambah Data Pengguna
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/data_pengguna">Master Data</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/data_pengguna/insert" method="post">
                    <input type="hidden" class="form-control" name="id">
                    <div class="form-group">
                      <label for="username"><b>Username</b></label>
                      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>

                    <br>
                     <div class="form-group">
                          <label for="level"><b>Level</b></label>
                              <select class="form-control" id="level" name="level">
                                  <option>--Pilih Level--</option>
                                  <option>Admin</option>
                                  <option>Operator</option>
                                  <option>Pinjaman</option>
                        </select>
                      </div>
                      <br>

                          <label for="aktif"><b>Aktif</b></label>
                           <select class="form-control" id="aktif" name="aktif">
                                  <option>--Pilih--</option>
                                 <option>Aktif</option>
                                 <option>Pasif</option>
                        </select>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/data_pengguna" class="btn btn-light">Cancel</a>
                  </form>
              </div>
            </div>
                </div>
              </div>
            </div>
            