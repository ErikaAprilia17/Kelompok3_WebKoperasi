
<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename= Data Barang.xls");

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
		<h1> Data Barang</h1>
	</center>
 
	<table border="1">
		<tr>
                       <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Type</th>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Jumlah Barang</th>
                        <th>Keterangan</th>
                       
                       
                </tr>
               			 <?php 
								// koneksi database
								$koneksi = mysqli_connect("server-pc:3308","root","","web_koperasi");
						 
								// menampilkan Pengeluaran
								$data = mysqli_query($koneksi,"select * from data_barang");
								$id = 1;
								while($d = mysqli_fetch_array($data)){
								?>
                  
                      <tr>
							<td><?php echo $id++; ?></td>
							<td><?php echo $d['nama_barang']; ?></td>
							<td><?php echo $d['type']; ?></td>
							<td><?php echo $d['merk']; ?></td>
							<td><?php echo $d['harga'] ?></td>
                          	<td><?php echo $d['jumlah_barang'] ?></td>
                          	<td><?php echo $d['ket'] ?></td>
                          	

						</tr>
		<?php 
		}
		?>
	
	</table>
</body>
</html>
