<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/kriteria') ?>">Kriteria</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Kriteria</li>
        </ol>
    </nav>
    <form action="<?= site_url('c_tambah/addkriteria') ?>" method="POST">
        <div class="form-group">
            <label for="">Kriteria</label>
            <input type="text" class="form-control" name="kriteria">
        </div>
        <div class="form-group">
            <label for="">Bobot</label>
            <input type="text" class="form-control" name="bobot">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" class="form-control" name="keterangan">
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>