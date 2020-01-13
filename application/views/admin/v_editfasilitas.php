<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/fasilitas') ?>">fasilitas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Fasilitas</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Fasilitas</h3><br>
    <form action="<?= site_url('c_edit/editfasilitas') ?>" method="POST">
        <?php foreach ($fasilitas->result() as $f) { ?>
            <div class="form-group">
                <label for="">Id fasilitas</label>
                <input type="text" class="form-control" name="idfasilitas" value="<?= $f->id_fasilitas ?>">
            </div>
            <div class="form-group">
                <label for="">Nama fasilitas</label>
                <input type="text" class="form-control" name="fasilitas" value="<?= $f->fasilitas ?>">
            </div>
            <div class="form-group">
            <?php } ?>
            <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>