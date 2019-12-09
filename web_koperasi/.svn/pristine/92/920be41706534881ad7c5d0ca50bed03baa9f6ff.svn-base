
<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=Data Penarikan Tunai.xls");

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
		<h1>Data Transaksi Penarikan Tunai</h1>
	</center>
 
	<table border="1">
		<tr>
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Anggota </th>
                        <th>Departemen</th>
                       	<th>Jenis Penarikan</th>
                        <th>Jumlah </th>
                        <th>User </th>
                       
                </tr>
               			 <?php 
								// koneksi database
								$koneksi = mysqli_connect("server-pc:3308","root","","web_koperasi");
						 
								// menampilkan Pengeluaran
								$data = mysqli_query($koneksi,"select * from penarikan_tunai");
								$id = 1;
								while($d = mysqli_fetch_array($data)){
								?>
                  
                      <tr>
							<td><?php echo $id++; ?></td>
							<td><?php echo $d['kode_transaksi']; ?></td>
							<td><?php echo $d['tanggal_transaksi']; ?></td>
							<td><?php echo $d['id_anggota']; ?></td>
							<td><?php echo $d['id_departemen'] ?></td>
                          	<td><?php echo $d['id_jenis_simpanan'] ?></td>
                          	<td><?php echo $d['jumlah'] ?></td>
                          	<td><?php echo $d['user'] ?></td>
                          	

						</tr>
		<?php 
		}
		?>
	
	</table>
</body>
</html>



                         