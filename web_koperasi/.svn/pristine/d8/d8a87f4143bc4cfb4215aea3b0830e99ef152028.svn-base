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
           <ol class="breadcrumb" style="font-size: 25px">
                <li class="breadcrumb-item" href="#" >Master Data</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
                </ol> 
          </div>
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Jenis Kas</h4>

                  <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/data_kas/insert" method="post">
                    <table class="table table-striped">
                      <br>

                     <div class="form-group">
                      <label for="nama_kas">Nama Kas* </label>
                      <input type="text" class="form-control" id="nama_kas" placeholder="Name" name="nama_kas">
                    </div>
                   
                    <br>
                     <div class="form-group">
                          <label for="aktif"><b>Aktif</b></label>
                              <select class="form-control" id="aktif" name="aktif">
                                  <option>Y</option>
                                  <option>N</option>
                        </select>
                      </div>
                      <br>

                          <label for="simpanan"><b>Simpanan</b></label>
                           <select class="form-control" id="simpanan" name="simpanan">
                                 <option>Y</option>
                                 <option>N</option>
                        </select>
                      </div>
                              <br>
                          <label for="penarikan"><b>Penarikan</b></label>
                              <select class="form-control" id="penarikan" name="penarikan">
                                  <option>Y</option>
                                  <option>N</option>
                        </select>
                      </div>
                              <br>
                            <label for="pinjaman"><b>Pinjaman</b></label>
                               <select class="form-control" id="pinjaman" name="pinjaman">
                                    <option>Y</option>
                                    <option>N</option>
                        </select>
                      </div>
                              <br>
                            <label for="angsuran"><b>Angsuran</b></label>
                              <select class="form-control" id="angsuran" name="angsuran">
                                      <option>Y</option>
                                      <option>N</option>
                        </select>
                      </div>
                              <br>
                            <label for="pemasukan_kas"><b>Pemasukan Kas</b></label>
                              <select class="form-control" id="pemasukan_kas" name="pemasukan_kas">
                                        <option>Y</option>
                                        <option>N</option>
                        </select>
                      </div>
                              <br>
                            <label for="pengeluaran_kas"><b>Pengeluaran Kas</b></label>
                                <select class="form-control" id="pengeluaran_kas" name="pengeluaran_kas">
                                          <option>Y</option>
                                          <option>N</option>
                        </select>
                      </div>
                              <br>
                            <label for="transfer_kas"><b>Transfer Kas</b></label>
                                <select class="form-control" id="transfer_kas" name="transfer_kas">
                                         <option>Y</option>
                                         <option>N</option>
                        </select>
                      </div>

                          <br>
                              <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/data_kas" class="btn btn-light">Cancel</a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </table>
      </form>