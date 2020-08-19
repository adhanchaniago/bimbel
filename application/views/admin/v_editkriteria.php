<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/kriteria') ?>">Kriteria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Kriteria</li>
        </ol>
    </nav>
    <form action="<?= site_url('c_edit/editkriteria') ?>" method="POST">
        <?php foreach ($tampil as $t) { ?>
            <input type="hidden" name="id" value="<?= $t['id']?>">
            <div class="form-group">
                <label for="">Kriteria</label>
                <input type="text" class="form-control" name="kriteria" value="<?= $t['kriteria'] ?>">
                <small><?= form_error('kriteria')?></small>
            </div>
            <div class="form-group">
                <label for="">Bobot</label>
                <input type="text" class="form-control" name="bobot" value="<?= $t['bobot'] ?>">
                <small><?= form_error('bobot')?></small>
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" value="<?= $t['keterangan'] ?>">
                <small><?= form_error('keterangan')?></small>
            </div>
        <?php } ?>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>