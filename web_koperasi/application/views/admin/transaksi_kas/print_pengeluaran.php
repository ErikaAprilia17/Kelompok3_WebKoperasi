<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Pengeluran Kas Tunai</h1>

<table border="1" width="100%">
<thead>
                      <tr style="background-color:darkviolet; color:white">
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Uraian </th>
                        <th>Dari Kas</th>
                        <th>Untuk Akun</th>
                        <th>Jumlah </th>
                        <th>User </th>
                       
                      </tr>
                    </thead>
                   <tbody>
                      <?php 
                      $id = 1;
                          if(is_array($data_pengeluaran))
                          foreach($data_pengeluaran as $pengeluaran){ 
                           
                                        ?>
                              <tr>
                          
                         <td><?php echo $id++ ?></td>
                          <td><?php echo $pengeluaran->kode_transaksi ?></td>
                          <td><?php echo $pengeluaran->tanggal_transaksi ?></td>
                          <td><?php echo $pengeluaran->uraian ?></td>
                          <td><?php echo $pengeluaran->id_kas ?></td>
                          <td><?php echo $pengeluaran->id_akun ?></td>
                          <td><?php echo $pengeluaran->jumlah ?></td>
                          <td><?php echo $pengeluaran->id_pengguna ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>