<html>
<head>
    <title>Cetak PDF Data Pengguna</title>
</head>
<body>
<h1 style="text-align: center;">Data User / Pengguna</h1>

<table border="1" width="100%">
<thead>
                      <tr style="background-color:darkviolet; color:white">
                         <th>ID</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aktif</th>
                      </tr>
                    </thead>
                   <tbody>
                      <?php 
                           $id = 1;
                          foreach($pengguna as $data_pengguna){ 
                                        ?>
                              <tr>
                           <td><?php echo $id++ ?></td>
                          <td><?php echo $data_pengguna->username ?></td>
                          <td><?php echo $data_pengguna->level ?></td>
                          <td><?php echo $data_pengguna->aktif ?></td>

                        </tr>
                      <?php } ?>
                      </tbody>

</table>
</body>
</html>