<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Pemrograman Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section class="pb-4" >
        <h5 >Masukkan Email dan Password Jika Sudah Memiliki Akun</h5>
        <br>

                <form action="./backend/login.php" method="post" style="width: 22rem;" >
                    <div class="form-outline mb-4" >            
                        <input type="email" name="email" placeholder="Masukkan email anda" class="form-control" >
                    </div>
                    <div class="form-outline mb-4" >
                        <input type="password" name="password" placeholder="Masukkan password anda" class="form-control" >
                    </div>
                    <div class="form-outline mb-4" >
                        <input type="submit" value="login" name="submit" class="btn btn-primary" >
                    </div>
                </form>
    </section>
                <form action="register.php" method="post">
                <input type="submit" value="Click Jika Belum Punya Akun" name="Register" class="btn btn-primary" >
                </form>

</body>
</html>