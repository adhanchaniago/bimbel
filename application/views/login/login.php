<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('aset/css/bootstrap.min.css') ?>">
    <link rel="shortcut icon" href="<?php echo base_url('aset/img/logo.png') ?>">
    <title>Login</title>
</head>

<body style=" background: rgb(247,242,231);
background: linear-gradient(343deg, rgba(247,242,231,1) 20%, rgba(224,236,228,1) 60%, rgba(216,211,205,1) 55%); ">
    <div class="container" style="padding-top: 10%">
        <form action="<?= site_url('login/cek') ?>" method="POST">
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <h2 class="text-center">login admin</h2>
                    <div class="form-group">
                        <label for="username">Masukkan nama anda</label>
                        <input type="text" class="form-control" name="user" placeholder="username">
                        <small class="text-danger"><?php echo form_error('user'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="password">Masukkan password</label>
                        <input type="password" class="form-control" name="pass" placeholder="password">
                        <small class="text-danger"><?php echo form_error('pass'); ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
<script src="<?= site_url('bootstrap.min.js') ?>"></script>


</html>