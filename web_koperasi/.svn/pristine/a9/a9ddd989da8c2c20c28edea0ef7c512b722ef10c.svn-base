<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Data Transaksi Transfer Kas</h1>

<table border="1" width="100%">
<thead>
                       <tr style="background-color:darkviolet; color:white">
                        <th>ID</th>
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Uraian </th>
                        <th>Jumlah </th>
                        <th>Dari Kas</th>
                        <th>Untuk Kas</th>
                        <th>User </th>
                        
                      </tr>
                    </thead>
                   <tbody>
                     <?php 
                           $id = 1;
                          if(is_array($data_transfer))
                          foreach($data_transfer as $transfer){ 
                                        ?>
                              <tr>
                           <td><?php echo $id++ ?></td>
                          <td><?php echo $transfer->kode_transaksi ?></td>
                          <td><?php echo $transfer->tanggal_transaksi ?></td>
                          <td><?php echo $transfer->uraian ?></td>
                          <td><?php echo $transfer->jumlah ?></td>
                          <td><?php echo $transfer->id_kas ?></td>
                          <td><?php echo $transfer->id_data_kas ?></td>
                          <td><?php echo $transfer->id_pengguna ?></td>
                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>