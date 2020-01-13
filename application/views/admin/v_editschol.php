<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin/sekolah') ?>">Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Sekolah</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Sekolah</h3>
    <br>
    <form action="<?= site_url('c_edit/editschoolact') ?>" method="POST">
        <?php foreach ($edit->result() as $b) { ?>
            <div class="form-group">
                <label for="">Id School</label>
                <input type="text" class="form-control" name="idsekolah" value="<?= $b->id_sekolah ?>">
            </div>
            <div class="form-group">
                <label for="">Id Bimbel</label>
                <select name="id_bimbel" class="form-control">
                    <?php foreach ($bimbel as $c) { ?>
                        <option value="<?= $c["id_bimbel"] ?>"><?= $c["id_bimbel"] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nama Sekolah</label>
                <input type="text" class="form-control" name="sekolah" value="<?= $b->sekolah ?>">
            </div>
            <div class="form-group">
                <label for="">Jarak</label>
                <input type="number" class="form-control" name="jarak" value="<?= $b->jarak ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        <?php } ?>
    </form>
</div>