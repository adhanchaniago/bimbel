<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/paket') ?>">Paket</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Paket</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Paket</h3><br>
    <form action="<?= site_url('c_edit/editpaket') ?>" method="POST">
        <?php foreach ($paket->result() as $b) { ?>
            <div class="form-group">
                <label for="">Id Paket</label>
                <input type="text" class="form-control" name="id" value="<?= $b->id_paket ?>">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="<?= $b->deskripsi ?>">
            </div>
            <div class="form-group">
                <label for="">Harga</label>
                <input type="number" class="form-control" name="harga" value="<?= $b->harga ?>">
            </div>
        <?php } ?>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>