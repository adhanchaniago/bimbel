<br><div class="container">
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
    <form action="<?= site_url('c_tambah/addschool') ?>" method="POST">
        <div class="form-group">
            <label for="">Id Sekolah</label>
            <input type="text" class="form-control" name="idsekolah">
            <small><?php echo form_error('idsekolah'); ?></small>
        </div>
        <div class="form-group">
            <label for="">Nama Sekolah</label>
            <input type="text" class="form-control" name="sekolah">
            <small><?php echo form_error('sekolah'); ?></small>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</div>