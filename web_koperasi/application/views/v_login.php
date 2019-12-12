<!DOCTYPE html>
<html>
<head>
	<title>Koperasi Indonesia</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/login/style.css">
</head>
<body>
 
	<h1>Koperasi Simpan Pinjam</h1>
 
	<div class="kotak_login">
		<!-- <img src="/file/a.jpg" alt="" /> -->
		<p class="tulisan_login">Silahkan login</p>
		 <div style="color: red;margin-bottom: 15px;">
		    <?php
		    // Cek apakah terdapat session nama message
		    if($this->session->flashdata('message')){ // Jika ada
		      echo $this->session->flashdata('message'); // Tampilkan pesannya
		    }
		    ?>
		  </div>
 
		<form action="<?= base_url('login') ?>" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" name="submit" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<a class="link" href="https://www.malasngoding.com">kembali</a>
			</center>
		</form>
		
	</div>
 
 
</body>
</html>