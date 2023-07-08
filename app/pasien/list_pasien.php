<?php
require "../../config/config_database.php";
$db = koneksi(hostname, username, password, database,);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Ccompatible" content="ID=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data_pasien</title>
</head>

<body>
    <a href="from_pasien.php">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM pasien");
    ?>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>nama_pasien</th>
                <th>NIK_pasien</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
                while($row = $query->fech_array()){
                     ?>
                         <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row['nama_pasien']; ?></td>
                            <td><?php echo $row['NIK_pasien']; ?></td>
                            <td>Edit | Hapus</td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
        </table>
</body>
