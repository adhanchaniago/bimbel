<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/fasilitas') ?>">fasilitas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Fasilitas Bimbel</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Fasilitas Bimbel</h3><br>
    <br>
    <form action="<?= site_url('c_edit/editfasbimbel') ?>" method="POST">
        <div class="form-group">
            <label for="">Id Bimbel</label>

            <?php $i = 0;
            foreach ($get->result() as $b)  if ($i < 2) {
                break;
            } { ?>

                <input type="text" value="<?= $b->id_bimbel ?>" class="form-control" name="id">
            <?php } ?>

        </div>
        <div class="form-group">
            <label for="">Id Fasilitas</label>
            <?php foreach ($tampil as $t) { ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $t['id_fasilitas'] ?>" name="idfas[]">
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $t['id_fasilitas'] ?>">
                </div>
            <?php } ?>
        </div>

        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>