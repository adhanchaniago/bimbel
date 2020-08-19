<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/sekolah') ?>">Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Jarak Sekolah</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Jarak Sekolah</h3>
    <br>
    <form action="<?= site_url('c_edit/editjarak') ?>" method="POST">
        <?php foreach ($tampil as $b) { ?>
            <input type="hidden" value="<?= $b['id'] ?>" name="id">
            <div class="form-group">
                <label for="">Id Sekolah</label>
                <select name="id_sekolah" class="form-control">
                    <option value="<?= $b['id_sekolah'] ?>"><?= $b['id_sekolah'] ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Id Bimbel</label>
                <select name="id_bimbel" class="form-control">
                    <option value="<?= $b['id_bimbel'] ?>"><?= $b['id_bimbel'] ?></option>
                </select>
            </div>
            <div class="form-group">
                <label for="">Jarak</label>
                <input type="number" class="form-control" name="jarak" value="<?= $b['jarak'] ?>">
            </div>
        <?php } ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>