<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h2 style="text-align: center;">Data Pemasukan Kas Tunai</h2>
<table border="1" width="100%" >
<thead>
                      <tr style="background-color:darkviolet; color:white">
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Uraian </th>
                        <th>Untuk Kas</th>
                        <th>Dari Akun</th>
                        <th>Jumlah </th>
                        <th>User </th>
                       
                        
                      </tr>
                    </thead>
                   <tbody>
                      <?php 
                       $id = 1;
                          if(is_array($data_pemasukan))
                          foreach($data_pemasukan as $pemasukan){ 
                                        ?>
                              <tr>
                          
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $pemasukan->kode_transaksi ?></td>
                          <td><?php echo $pemasukan->tanggal_transaksi ?></td>
                          <td><?php echo $pemasukan->uraian ?></td>
                          <td><?php echo $pemasukan->id_kas ?></td>
                          <td><?php echo $pemasukan->id_akun ?></td>
                          <td><?php echo $pemasukan->jumlah ?></td>
                          <td><?php echo $pemasukan->id_pengguna ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>