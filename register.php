<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SiPerpus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css"
        integrity="sha384-X38yfunGUhNzHpBaEBsWLO+A0HDYOQi8ufWDkZ0k9e0eXz/tH3II7uKZ9msv++Ls" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/register.css">
</head>

<body>
    <div class="pure-g wrap-card">
        <div class="pure-u-1 pure-u-md-1-2 card-1">
            <h2>Daftarkan akun kamu disini</h2>
            <form class="pure-form pure-form-stacked" action="#" method="post">
                <label for="nama">Masukkan Nama</label>
                <input type="text" name="nama" id="nama" required autofocus>

                <label for="email">Masukkan Email</label>
                <input type="email" name="email" id="email" required>

                <label for="password">Masukkan Password</label>
                <input type="password" name="password" id="password" required>

                <input type="submit" name="submit" value="Register" class="pure-button pure-button-primary">

                <h4>Sudah punya akun? Langsung <a href="index.php">Login</a> aja </h4>
            </form>
        </div>
        <div class="pure-u-1 pure-u-md-1-2 card-2">
            <img src="./img/book.jpg" alt="Library Image">
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>
</body>

</html>