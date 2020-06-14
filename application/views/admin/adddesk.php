<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/deskripsi') ?>">Deskripsi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Deskripsi</li>
        </ol>
    </nav>
    <br>
    <h3>Tambah Deskripsi</h3><br>
    <br>
    <form action="<?= site_url('c_tambah/addesk') ?>" method="POST">
        <div class="form-group">
            <label for="">Id Deskripsi</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <textarea name="keterangan" id="" cols="10" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Maps</label>
            <input type="text" class="form-control" name="maps">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>