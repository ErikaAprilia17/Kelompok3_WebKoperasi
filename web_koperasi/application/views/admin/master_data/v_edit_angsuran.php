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
              Edit Jenis Angsuran
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>admin/master_data/lama_angsuran">Jenis Angsuran</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ubah Jenis Angsuran</li>
              </ol>
            </nav>
          </div>
          <div class="card">
            <div class="card-body">
                   <form class="forms-sample" action="<?php echo base_url()?>admin/master_data/lama_angsuran/update" method="post">
                    <input type="hidden" class="form-control" name="id" value="<?= $data_angsuran->id?>">
                    <div class="form-group">
                      <label for="lama_angsuran"><b>Lama Angsuran (Bulan)</b></label>
                      <input type="text" class="form-control" name="lama_angsuran" id="lama_angsuran" placeholder="lama_angsuran" value="<?= $data_angsuran->lama_angsuran?>">
                    </div>
                    <div class="form-group">
                      <label for="aktif"><b>Aktif</b></label>
                        <select class="form-control" id="aktif" name="aktif">
                        <?php
                            if($data_angsuran->aktif == 'Y'){
                        ?>
                          <option selected="">Y</option>
                          <option>N</option>
                          
                        <?php }else{ ?>
                            <option>Y</option>
                            <option selected="">N</option>
                            <?php } ?>
                        </select>

                      </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                    <a href="<?php echo base_url()?>admin/master_data/lama_angsuran" class="btn btn-light">Cancel</a>
                  </form>
              </div>
            </div>
                </div>
              </div>
            </div>
          