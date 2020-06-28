<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Dasboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Bimbel</li>
        </ol>
    </nav>
    <form action="<?= site_url('c_tambah/addbimbel') ?>" method="POST">
        <div class="form-group">
            <label for="">Id Bimbel</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label for="">Nama Bimbel</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="text" class="form-control" name="harga">
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>