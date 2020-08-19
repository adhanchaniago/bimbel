<div class="container">
    
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/sekolah') ?>">Sekolah</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Sekolah</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Sekolah</h3>
    <br>
    <form action="<?= site_url('c_edit/editschoolact') ?>" method="POST">
        <?php foreach ($tampil as $b) { ?>
            <input type="hidden" class="form-control" name="id" value="<?= $b['id'] ?>">
            <div class="form-group">
                <label for="">Id School</label>
                <input type="text" class="form-control" name="idsekolah" value="<?= $b['id_sekolah'] ?>">
                <small><?php echo form_error('idsekolah'); ?></small>
            </div>

            <div class="form-group">
                <label for="">Nama Sekolah</label>
                <input type="text" class="form-control" name="sekolah" value="<?= $b['sekolah'] ?>">
                <small><?php echo form_error('sekolah'); ?></small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        <?php } ?>
    </form>
</div>