<?php
    include_once("./config/db.php");
    $id = $_GET['id'];
    $result = mysqli_query($db_connect, "SELECT * FROM products WHERE id=$id");

    while ($user_data = mysqli_fetch_array($result)) {
        $name = $user_data['name'];
        $price = $user_data['price'];
        $image = $user_data['image']; }
?>

<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <a href="index.php">
        <input type="submit" value="Beranda" name="submit" class="btn btn-primary" ></a>
    <br /><br />

    <form name="form1" method="post" action="./backend/edit.php">
        <table border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="name" value="<?php echo $name; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="price" value="<?php echo $price; ?>"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td><input type="text" name="image" value="<?php echo $image; ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value="<?php echo $id; ?>"></td>
                <td><button type="submit" name="update">Update</button></td>
            </tr>
        </table>
    </form>
                <br>
                <a href="show.php">
                <input type="submit" value="Lihat Produk" name="submit" class="btn btn-primary" ></a>
                <br> <br> 
                <a href="index.php">
                <input type="submit" value="Logout" name="submit" class="btn btn-primary" ></a>
</body>
</html>