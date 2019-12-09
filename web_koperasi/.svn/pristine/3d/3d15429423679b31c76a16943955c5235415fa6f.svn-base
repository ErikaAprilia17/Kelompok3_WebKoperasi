<?php if($this->session->flashdata('success_update')){ ?>
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
          <h3>Setting
            <small class="text-muted"> Profil</small></h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                 <i class="mdi mdi-clock menu icon"></i><div id="clock"></div>
                <script type="text/javascript">        
                    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
                    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
                    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
                    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
                    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
                    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
                    }
                </script>
                
                <i class="mdi mdi-calendar menu icon"></i>
                <!-- /*Menampilkan Waktu*/ -->

                        <body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">        
                        <span id="clock"></span> 
               <!--  /*Menampilakan Hari*/ --> 
                      <?php
                      $hari = date('l');
                      /*$new = date('l, F d, Y', strtotime($Today));*/
                      if ($hari=="Sunday") {
                       echo "Minggu";
                      }elseif ($hari=="Monday") {
                       echo "Senin";
                      }elseif ($hari=="Tuesday") {
                       echo "Selasa";
                      }elseif ($hari=="Wednesday") {
                       echo "Rabu";
                      }elseif ($hari=="Thursday") {
                       echo("Kamis");
                      }elseif ($hari=="Friday") {
                       echo "Jum'at";
                      }elseif ($hari=="Saturday") {
                       echo "Sabtu";
                      }
                      ?>,
                 <!-- /*Menampilkan Tanggal*/ -->
                      <?php
                      $tgl =date('d');
                      echo $tgl;
                      $bulan =date('F');
                      if ($bulan=="January") {
                       echo " Januari ";
                      }elseif ($bulan=="February") {
                       echo " Februari ";
                      }elseif ($bulan=="March") {
                       echo " Maret ";
                      }elseif ($bulan=="April") {
                       echo " April ";
                      }elseif ($bulan=="May") {
                       echo " Mei ";
                      }elseif ($bulan=="June") {
                       echo " Juni ";
                      }elseif ($bulan=="July") {
                       echo " Juli ";
                      }elseif ($bulan=="August") {
                       echo " Agustus ";
                      }elseif ($bulan=="September") {
                       echo " September ";
                      }elseif ($bulan=="October") {
                       echo " Oktober ";
                      }elseif ($bulan=="November") {
                       echo " November ";
                      }elseif ($bulan=="December") {
                       echo " Desember ";
                      }
                      $tahun=date('Y');
                      echo $tahun;
                      ?>
              </ol>
            </nav>
          </div>
          
          
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Update Data Koperasi</h4>
                  <table class="table table-striped">
 
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <form class="form-sample" action="<?php echo base_url()?>admin/setting/identitas_koperasi/update" method="post">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Nama Koperasi</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_koperasi" value="<?php echo $identitas->nama_koperasi ?>" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Nama Pimpinan</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_pimpinan" value="<?php echo $identitas->nama_pimpinan ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Alamat</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="alamat" value="<?php echo $identitas->alamat ?>"/>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>No.Telpon/Hp</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="no_tlpon" value="<?php echo $identitas->no_telpon ?>"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Kota</b></label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="kota" value="<?php echo $identitas->kota ?>"/>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Website</b></label>
                          <div class="col-sm-9">                           
                                <input type="text" class="form-control" name="website" value="<?php echo $identitas->website ?>"/>
                              </label>
                            </div>
                          </div>

                      </div>                
                       <div class="col-md-6">
                      	<div class="form-group row">
                          	<label class="col-sm-3 col-form-label"><b>Kabupaten</b></label>
                          		<div class="col-sm-9">
                            <input type="text" class="form-control" name="kabupaten" value="<?php echo $identitas->kabupaten ?>"/>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"><b>Email</b></label>
                          <div class="col-sm-9">                           
                                <input type="email" class="form-control" name="email" value="<?php echo $identitas->email ?>" />
                              </label>
                            </div>

                          </div>

                        </div>

                          <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>

                       </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->