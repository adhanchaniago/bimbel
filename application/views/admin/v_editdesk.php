<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/deskripsi') ?>">Deskripsi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Deskripsi</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Deskripsi</h3><br>
    <br>
    <form action="<?= site_url('c_edit/editdes') ?>" method="POST">
        <?php foreach ($desk->result() as $d) { ?>
            <div class="form-group">
                <label for="">Id Deskripsi</label>
                <input type="text" class="form-control" name="id" value="<?= $d->id_des ?>">
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="deskripsi" value="<?= $d->judul ?>">
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="" cols="10" rows="10" class="form-control"><?= $d->keterangan ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Maps</label>
                <input type="text" class="form-control" name="maps" value="<?= $d->maps ?>">
            </div>
        <?php } ?>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>