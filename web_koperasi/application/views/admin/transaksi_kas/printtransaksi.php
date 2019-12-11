<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Transaksi Kas </h1>

<table border="1" width="100%">
<thead>
                      <tr style="background-color:darkviolet; color:white">
                        <th>ID</th>
                        <th>Tanggal Transaksi</th>
                        <th>Jenis Transaksi</th>
                        <th>Keterangan </th>
                        <th>Dari Kas</th>
                        <th>Untuk Akun</th>
                        <th>Debet</th>
                        <th>Kredit</th>
                        
                      </tr>
                    </thead>
                   <tbody>
                      <?php 
                      $id = 1;
                          if(is_array($data_transaksi))
                          foreach($data_transaksi as $transaksi){ 
                           
                                        ?>
                              <tr>
                          
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $transaksi->kode_transaksi ?></td>
                          <td><?php echo $transaksi->tanggal_transaksi ?></td>
                          <td><?php echo $transaksi->uraian ?></td>
                          <td><?php echo $transaksi->dari_kas ?></td>
                          <td><?php echo $transaksi->untuk_akun ?></td>
                          <td><?php echo $transaksi->jumlah ?></td>
                          

                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>