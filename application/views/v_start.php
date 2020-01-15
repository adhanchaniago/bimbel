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
        <form action="<?= site_url('welcome/hitung') ?>" method="POST">
            <div class="form-group">
                <label for="">Harga Bimbel</label>
                <input type="number" name="biaya" min="2000000" max="17000000">
            </div>
            <div class="form-group">
                <label for="">Id Fasilitas</label>
                <?php foreach ($tampil as $t) { ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $t['id_fasilitas'] ?>" name="idfas">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $t['id_fasilitas'] ?>" name="idfas">
                    </div>
                <?php } ?>
            </div>
            <div class="form-group">
                <label for="">Asal Sekolah</label>
                <select name="sekolah" class="form-control">
                    <?php foreach ($sekolah as $s) { ?>
                        <option value="<?= $s['sekolah'] ?>"><?= $s['sekolah'] ?></option>
                    <?php } ?>
                </select>
            </div>
        </form>

        <script src="<?= base_url('aset/js/bootstrap.min.js') ?>"></script>

</body>

</html>