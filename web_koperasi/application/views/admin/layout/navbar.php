<?php
							 $sess = $this->session->userdata('admin');
							?>
<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex" style="display:inline">
      <a class="navbar-brand brand-logo" href="<?php echo base_url() ?>admin/dashboard">Aplikasi Koperasi</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <div class="search-field d-none d-md-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                  <i class="input-group-text border-0 mdi mdi-magnify"></i>                
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search projects">
            </div>
          </form>
        </div>

        <ul class="navbar-nav navbar-nav-right ">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle padding-top-10" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <div class="nav-profile-img">
               <!--  <img class="mt-10" src="<?= base_url('file/').$sess->foto ?>" alt="image"> -->
                <span class="availability-status online"></span>             
              </div>
              
              <div class="nav-profile-text">
               <!--  <p class="mb-1 text-black"><?= $sess->nama ?></p> -->
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="#">
               <!--  <i class="mdi mdi-account-edit mr-2 text-success"></i>
                Change Profile -->
              </a>
              <div class="dropdown-divider"></div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
               <!--  <i class="mdi mdi-logout mr-2 text-primary"></i>
                Signout -->
              </a>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block full-screen-link">
            <a class="nav-link">
              <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="settingDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-settings-box"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="settingDropdown">
              <h6 class="p-3 mb-0">Setting</h6>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url() ?>admin/editprofile" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-account-edit "></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Edit Profile</h6>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo base_url() ?>login/logout" class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-logout"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center"></div>
                <h6 class="preview-subject font-weight-normal mb-1">SingOut</h6>
                  </div>  
              </a>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>