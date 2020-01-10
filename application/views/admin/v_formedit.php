<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Dasboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Bimbel</li>
        </ol>
    </nav>

    <form action="<?= site_url('c_admin/editact') ?>" method="POST">
        <?php foreach ($edit->result() as $e) { ?>
            <div class="form-group">
                <label for="">Id Bimbel</label>
                <input type="text" class="form-control" name="id" value="<?= $e->id_bimbel ?>">
            </div>
            <div class="form-group">
                <label for="">Nama Bimbel</label>
                <input type="text" class="form-control" name="nama" value="<?= $e->nama ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="<?= $e->alamat ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?= $e->email ?>">
            </div>
            <div class="form-group">
                <label for="">Telpon</label>
                <input type="text" class="form-control" name="telpon" value="<?= $e->telpon ?>">
            </div>

            <button class="btn btn-primary" type="submit">Submit</button>
        <?php } ?>
    </form>

</div>