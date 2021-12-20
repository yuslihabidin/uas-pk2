<?php 
session_start();
if(empty($_SESSION['nama'])){
    echo '<script>
    alert("Login dulu yaa..");
    window.location.href="index.php";
    </script>';
}
?>
<?php include("header.php"); ?>
    <div class="container-welcome">
        <div class="welcome-text">
            <?php echo "<h1>Selamat Datang " . $_SESSION['nama'] . "</h1>"; ?><br>
            <?php echo "<h1>Tempat Lahir : " . $_SESSION['tmptlahir'] . "</h1>"; ?><br>
            <?php echo "<h1>Agama : " . $_SESSION['agama'] . "</h1>"; ?>
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
<?php include("kaki.php");?>