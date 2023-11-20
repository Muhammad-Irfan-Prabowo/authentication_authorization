<?php 
    session_start();
    if($_SESSION['role']!= 'user'){
        session_destroy();
        header('Location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Terverifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<h3 style="margin: 0 auto; text-align: center;" >Anda Berhasil Register</h3>
    <br>
    <h5>TerimaKasih Sudah Menggunakan Aplikasi Kami <?php echo $_SESSION['name'];?></h5>
    <h5>Silakan Click Logout Untuk Masuk Aplikasi</h5>
    <br>
    <a href="./backend/logout.php" >
    <input type="submit" value="Logout" name="submit" class="btn btn-primary" ></a>
</body>
</html>