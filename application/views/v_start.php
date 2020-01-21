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

        <!-- Content -->
        <form action="<?= site_url('welcome/tampung') ?>" method="POST">
            <div class="form-group">
                <label for="">Harga min</label>
                <input type="number" name="min" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Harga max</label>
                <input type="number" name="max" class="form-control">
            </div>
            <!-- <div class="form-group">
                <label for="">Fasilitas</label>
                <?php foreach ($tampil as $t) { ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" name="idfas[]" aria-label="Checkbox for following text input" value="<?= $t['id_fasilitas'] ?>">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $t['fasilitas'] ?>">
                    </div>
                <?php } ?>
            </div> -->
            <div class="form-group">
                <label for="">Asal Sekolah</label>
                <select name="sekolah" class="form-control">
                    <?php foreach ($sekolah as $s) { ?>
                        <option value="<?= $s['id_sekolah'] ?>"><?= $s['sekolah'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <button class="btn btn-primary">Cari</button>
        </form>

        <script src="<?= base_url('aset/js/bootstrap.min.js') ?>"></script>

</body>

</html>