<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">Laporan Data Penarikan Tunai </h1>

<table border="1" width="100%">
<thead>
                      <tr style="background-color:darkviolet; color:white ">
                        
                        <th>Kode Transaksi </th>
                        <th>Tanggal Transaksi</th>
                        <th>Nama Anggota </th>
                        <th>Departemen</th>
                        <th>Jenis Penarikan</th>
                        <th>Jumlah </th>
                        <th>User </th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                           $id = 1;
                          if(is_array($data_penarikan))
                            foreach($data_penarikan as $penarikan_tunai){ 
                                        ?>
                              <tr>
                          
                          <td><?php echo $penarikan_tunai->kode_transaksi ?></td>
                          <td><?php echo $penarikan_tunai->tanggal_transaksi ?></td>
                          <td><?php echo $penarikan_tunai->id_anggota ?></td>
                         <td><?php echo $penarikan_tunai->id_departemen ?></td>
                         <td><?php echo $penarikan_tunai->id_jenis_simpanan ?></td>
                          <td><?php echo $penarikan_tunai->jumlah ?></td>
                          <td><?php echo $penarikan_tunai->id_pengguna ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>
                      

</table>
</body>
</html>