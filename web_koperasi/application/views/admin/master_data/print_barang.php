<html>
<head>
    <title>Cetak PDF Data Baranng</title>
</head>
<body>
<h1 style="text-align: center;">Data Barang</h1>

<table border="1" width="100%">
<thead>
                      <tr style="background-color:darkviolet; color:white">
                        <th>ID</th>
                        <th>Nama Barang</th>
                        <th>Type</th>
                        <th>Merk</th>
                        <th>Harga</th>
                        <th>Jumlah Barang</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                   <tbody>
                     <?php 
                           $id = 1;
                          foreach($barang as $data_barang){ 
                                        ?>
                              <tr>
                           <td><?php echo $id++ ?></td>
                          <td><?php echo $data_barang->nama_barang ?></td>
                          <td><?php echo $data_barang->type ?></td>
                          <td><?php echo $data_barang->merk ?></td>
                          <td><?php echo $data_barang->harga ?></td>
                          <td><?php echo $data_barang->jumlah_barang ?></td>
                          <td><?php echo $data_barang->ket ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>