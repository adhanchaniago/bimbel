<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/paket') ?>">Paket</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Paket</li>
        </ol>
    </nav>
    <br>
    <h3>Tambah Paket</h3><br>
    <form action="<?= site_url('c_tambah/addpaket') ?>" method="POST">
        <div class="form-group">

            <label for="">Id Paket</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="">Harga</label>
            <input type="number" class="form-control" name="harga">
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>