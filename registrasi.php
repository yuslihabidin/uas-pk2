<?php
include 'connection.php';
    if(isset($_POST["submit"]))
    {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $password = md5($_POST['password']);
        $tmptlahir = $_POST['tmptlahir'];
        $agama = $_POST['agama'];
        if ($nik!="" || $nama!="" || $password!="" || $tmptlahir!="" || $agama!=""){
            $sql = "INSERT INTO ktp (nik, nama, password, tmptlahir, agama)
            values ('$nik', '$nama', '$password', '$tmptlahir', '$agama')";
            if($conn->query($sql)===TRUE){
                echo '<script>
                alert("Registrasi Sukses");
                window.location.href="index.php";
                </script>';
            }
            else{
                echo '<script>
                alert("Registrasi Gagal");
                window.location.href="registrasi.php";
                </script>';
            }
        }
    } 

?>

<?php include("header.php"); ?>
    <h1>Selamat Datang</h1>
    <h2>Silahkan isi data sesaui identitas Anda</h2>
    <h2>Harap isi dengan cermat</h2>

    <form method="POST" action="">
        <table>
            <tr>
                <td>NIK</td>
                <td><input type="number" name="nik" placeholder="Masukkan NIK Anda" style="width:100%;;"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Masukkan nama Anda" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Masukkan password Anda" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tmptlahir" placeholder="Masukkan tempat lahir Anda" style="width:100%;"></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama" placeholder="Masukkan agama Anda" style="width:100%;"></td>
            </tr>
        </table>
        <br>
        <input type="submit" name="submit" value="submit">   
    </form>
    <?php include("kaki.php");?>