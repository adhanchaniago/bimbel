<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('aset/css/bootstrap.min.css') ?>">
    <title>Document</title>
</head>

<body style="background: linear-gradient(#ffffdd,#81f5ff,#ffd5e5)">
    <div class="container">
        <div class="col-sm-6 offset-sm-3 text-center">
            <h2 style="padding-top: 25%">Daftar admin</h2><br>

            <form action="<?= site_url('login/masuk') ?>" method="POST">
                <div class="form-group text-left">
                    <label for="username">Masukkan nama anda</label>
                    <input type="text" class="form-control" name="user">
                </div>
                <div class="form-group text-left">
                    <label for="password">Masukkan password</label>
                    <input type="password" class="form-control" name="pass">
                </div>


                <button onclick="swal.fire()" type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
    </div>
</body>
<script src="<?= site_url('bootstrap.min.js') ?>"></script>


</html>