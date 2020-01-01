<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= base_url('aset/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('aset/css/style.css') ?>">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand">Navbar</a>
            <form class="form-inline">
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </form>
        </nav>


        <!-- Content -->
        <form action="<?= site_url('welcome/hitung') ?>" method="POST">
            <div class="form-group">
                <label for="">Harga</label>
                <input type="text" class="form-control" name="biaya">
            </div>
            <label for="">Fasilitas</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Ac">
                        <label for="" class="form-check-label">Ac</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Projector">
                        <label for="" class="form-check-label">Projector</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Genset">
                        <label for="" class="form-check-label">Ganset</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Parkir">
                        <label for="" class="form-check-label">Parkir</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="SmartBoard">
                        <label for="" class="form-check-label">SmartBoard</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="LCD">
                        <label for="" class="form-check-label">LCD</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="scanner">
                        <label for="" class="form-check-label">Scanner OMR Opscan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="perpus">
                        <label for="" class="form-check-label">Perpustakaan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="konsul">
                        <label for="" class="form-check-label">Area Konsultasi</label>
                    </div>
                </div>
            </div>
            <br>
            <label for="">Jarak Kebimbel</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Masukkan Jarak" aria-label="Masukkan Jarak" aria-describedby="basic-addon2" name="jarak">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">Kilometer</span>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">submit</button>
        </form>
        <script src="<?= base_url('aset/js/bootstrap.min.js') ?>"></script>

</body>

</html>