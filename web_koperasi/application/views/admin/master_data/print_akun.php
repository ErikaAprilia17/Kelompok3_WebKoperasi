<html>
<head>
    <title>Cetak PDF Jenis Akun</title>
</head>
<body>
<h1 style="text-align: center;">Master Data Jenis Akun</h1>

<table border="1" width="100%">
<thead>
                      <tr style="background-color:darkviolet; color:white">s
                        <th>ID</th>
                        <th>Kode Aktiva </th>
                        <th>Jenis Transaksi</th>
                        <th>Akun </th>
                        <th>Pemasukan</th>
                        <th>Pengeluaran</th>
                        <th>Aktif </th>
                        <th>Laba Rugi </th>
                      </tr>
                    </thead>
                   <tbody>
                      <?php 
                           $id = 1;
                          foreach($data_akun as $jenis_akun){ 
                                        ?>
                              <tr>
                          <td><?php echo $id++ ?></td>
                          <td><?php echo $jenis_akun->kode_aktiva ?></td>
                          <td><?php echo $jenis_akun->jenis_akun ?></td>
                          <td><?php echo $jenis_akun->akun ?></td>
                          <td><?php echo $jenis_akun->pemasukan ?></td>
                          <td><?php echo $jenis_akun->pengeluaran ?></td>
                          <td><?php echo $jenis_akun->aktif ?></td>
                          <td><?php echo $jenis_akun->laba_rugi ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>