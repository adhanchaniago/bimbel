<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin/foto') ?>">Foto</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Foto</li>
        </ol>
    </nav>
    <form action="<?= site_url('c_admin/fotoact') ?>" method="post" enctype="multipart/form-data">
        <h2>Tambah Foto</h2>
        <br>
        <div class="form-group">
            <label for="">Id Bimbel</label>
            <select name="id_bimbel" class="form-control">
                <?php foreach ($bimbel as $b) { ?>
                    <option value="<?= $b['id_bimbel'] ?>"><?= $b['id_bimbel'] ?></option>
                <?php } ?>
            </select>
        </div>
        <br>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="poto">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>