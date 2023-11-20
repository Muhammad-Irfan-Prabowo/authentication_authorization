<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Register Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h4>Register Akun </h4>
    <form action="./backend/register.php" method="post" style="width: 22rem;">
        <br>
        <input type="text" name="name" placeholder="Masukkan Nama Anda">
        <br>
        <input type="email" name="email" placeholder="Masukkan Email Anda">
        <br>
        <input type="password" name="password" placeholder="Masukkan Password Anda">
        <br>
        <input type="password" name="confirm" placeholder="Konfirmasi Password Anda">
        <br>
        <input type="submit" value="login" name="submit" class="btn btn-primary">
    </form>
</body>
</html>