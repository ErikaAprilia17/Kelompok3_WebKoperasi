
<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Data Pemasukan.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<!DOCTYPE html>
<html>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 

 
	<center>
		<h1>Data Transaksi Pemasukan Kas Tunai</h1>
	</center>
 
	<table border="1">
		<tr>
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Uraian </th>
                        <th>Untuk Kas</th>
                        <th>Dari Akun</th>
                        <th>Jumlah </th>
                        <th>User </th>
                       
                       
                </tr>
               			 <?php 
								// koneksi database
								$koneksi = mysqli_connect("server-pc:3308","root","","web_koperasi");
						 
								// menampilkan Pengeluaran
								$data = mysqli_query($koneksi,"select * from pemasukan");
								$id = 1;
								while($d = mysqli_fetch_array($data)){
								?>
                  
                      <tr>
							<td><?php echo $id++; ?></td>
							<td><?php echo $d['kode_transaksi']; ?></td>
							<td><?php echo $d['tanggal_transaksi']; ?></td>
							<td><?php echo $d['uraian']; ?></td>
							<td><?php echo $d['id_kas'] ?></td>
                          	<td><?php echo $d['id_akun'] ?></td>
                          	<td><?php echo $d['jumlah'] ?></td>
                          	<td><?php echo $d['id_pengguna'] ?></td>
                          	

						</tr>
		<?php 
		}
		?>
	
	</table>
</body>
</html>
