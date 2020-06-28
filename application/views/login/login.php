<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('aset/css/bootstrap.min.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container" style="padding-top: 10%">
        <form action="<?= site_url('login/masuk') ?>" method="POST">
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <h2 class="text-center">Daftar admin</h2>
                    <div class="form-group">
                        <label for="username">Masukkan nama anda</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="form-group">
                        <label for="password">Masukkan password</label>
                        <input type="password" class="form-control" name="pass">
                    </div>
                    <button onclick="swal.fire()" type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="<?= site_url('bootstrap.min.js') ?>"></script>


</html>