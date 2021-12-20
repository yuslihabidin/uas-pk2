<?php 

include 'connection.php';

session_start();

error_reporting(0);

if (isset($_SESSION['nik'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$nama = $_POST['User'];
	$pass = md5($_POST['Pass']);

	$sql = "SELECT * FROM ktp WHERE nama='$nama' AND password='$pass'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['nama'] = $row['nama'];
		$_SESSION['tmptlahir'] = $row['tmptlahir'];
		$_SESSION['agama'] = $row['agama'];
		header("Location: welcome.php");
	} else {
		echo "<script>alert('Oops! Nama atau Password Anda Salah.')</script>";
	}
}
?>

<?php include("header.php"); ?>
<div class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="nama" placeholder="Nama" name="User" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="Pass" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Belum punya akun? <a href="registrasi.php">Daftar disini</a>.</p>
		</form>
	</div>
<?php include("kaki.php");?>