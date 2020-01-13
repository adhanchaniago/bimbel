<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/sekolah') ?>">Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Sekolah</li>
        </ol>
    </nav>
    <br>
    <h3>Tambah Sekolah</h3>
    <br>
    <form action="<?= site_url('c_tambah/insertschool') ?>" method="POST">
        <div class="form-group">
            <label for="">Id School</label>
            <input type="text" class="form-control" name="idsekolah">
        </div>
        <div class="form-group">
            <label for="">Id Bimbel</label>
            <select name="id_bimbel" class="form-control">
                <?php foreach ($tampil as $b) { ?>
                    <option value="<?= $b['id_bimbel'] ?>"><?= $b['id_bimbel'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Nama Sekolah</label>
            <input type="text" class="form-control" name="sekolah">
        </div>
        <div class="form-group">
            <label for="">Jarak</label>
            <input type="number" class="form-control" name="jarak">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>