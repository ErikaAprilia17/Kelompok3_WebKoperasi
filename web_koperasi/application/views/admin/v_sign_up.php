<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" >
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js" ></script>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>

<body>

<form action="<?php echo base_url()?>sign_up/register" method="POST" style="border:1px solid #ccc" enctype="multipart/form-data">
  <div class="container">
    <center><h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p></center>
            <?php if($this->session->flashdata('success')){ ?>
              <div class="alert alert-success">
              <strong>Success!</strong> <?php echo $this->session->flashdata('success')?> </div> 
              <script> 
                var BASE_URL ="<?php echo base_url()?>";
                setTimeout(function(){ window.location.href = BASE_URL+'login/login_admin'}, 1000);
            </script>  
              <?php } ?>       

    <hr>
     <label for="username" class="pt-5" ><b>Username</b></label>
    <input type="text" placeholder="Enter username" name="username"  required>

     
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
       
    <label for="nama"><b>Nama Lengkap</b></label>
    <input type="text" placeholder="Enter Nama Lengkap" name="nama" required>

    <label for="ttl"><b>Tempat/Tanggal Lahir</b></label>
    <input type="text" placeholder="Enter Tempat/Tanggal Lahir" name="ttl" required>
<br>
    <label for="pekerjaan"><b>Pekerjaan</b></label>
    <input type="text" placeholder="Enter pekerjaan " name="pekerjaan" required>
<br>
<div class="from-group">
   <label for="jk" class="control-label col-sm-6"><b>Jenis Kelamin</b>
       <center><select class="from-control" name="jenis_kelamin" id='jk' required></center> 
              <option value="laki-laki">Laki-Laki</option>  
                <option value="perempuan">Perempuan</option>   
         </select>
    </label>
</div>
<br>
<div class="from-group">
   <label for="status " class="control-label col-sm-6"><b>Status</b>
       <center><select class="from-control" name="status" id='status' required></center> 
                <option value="Belum Menikah">Belum Menikah</option>  
                <option value="Sudah Menikah">Sudah Menikah</option>  
                <option value="Cerai Hidup">Cerai Hidup</option>  
                <option value="cerai Mati">Cerai Mati</option>  
         </select>
    </label>
</div>

<br>
<div class="from-group">
   <label for="agama" class="control-label col-sm-6"><b>Agama</b>
       <center><select class="from-control" name="agama" id='agama' required></center> 
                <option value="Islam">Islam</option>  
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>  
                <option value="Protestan">Protestan</option> 
                <option value="Budha">Budha</option>  
                <option value="Lainnya">Lainnya</option>      
         </select>
    </label>
</div>
<br>
    <label for="alamat"><b>Alamat</b></label>
    <input type="text" placeholder="Enter Alamat" name="alamat" required> 

    <label for="kota"><b>Kota</b></label>
    <input type="text" placeholder="Enter kota" name="kota" required> 

    <label for="no_tlpon"><b>No Telpon/Hp</b></label>
    <input type="text" placeholder="Enter No.Telpon/Hp" name="no_tlpon" required> 

    <div class="from-group">
   <label for="user" class="control-label col-sm-6"><b>Sebagai</b>
       <center><select class="from-control" name="user" id='user' required></center> 
                <option value="Admin/Operator">Admin/operator</option>  
                <option value="Member">Member</option>
                     
         </select>
    </label>
</div>
<br>
     
    <div class="container">
    <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <h2 class="left">Photo</h2>
                <div class="form-group">
                <input type="file" class="form-control" name="Photo_id">
                    <br>
                    

                </div>  
        </div>
        <div class="col-sm-4">
        </div>      
    </div>  
</div>    
  <br>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="container">
             <center><button type="submit" class="btn btn-primary mt-5">Register</button> 

            <a href="<?php echo base_url()?>login/login_admin" class="btn btn-secondary mt-5 ">Cancel</a></center>
   </div>
</form>

</body>