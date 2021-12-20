<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
</head>
<body>

     ?>
     <table>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td><?php echo $_POST['nik'] ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><?php echo $_POST['password'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['tmptlahir'] ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $_POST['agama'] ?></td>
        </tr>
    </table>
    <a href="index.php">Sekarang Login</a>
</body>
</html>