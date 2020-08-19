<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/deskripsi') ?>">Deskripsi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Deskripsi</li>
        </ol>
    </nav>
    <br>
    <h3>Edit Deskripsi</h3>

    <form action="<?= site_url('c_edit/editdes') ?>" method="POST">
        <?php foreach ($tampil as $d) { ?>
            <div class="form-group">
                <input type="hidden" class="form-control" name="id" value="<?= $d['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Judul</label>
            <select class="form-control" name="id" id="exampleFormControlSelect1">
                <option value="<?php echo $d["id_bimbel"] ?>"><?php echo $d["nama"] ?></option>
                <?php foreach ($des as $id) { ?>
                <option value="<?php echo $id["id_bimbel"] ?>"><?php echo $id["nama"] ?></option>
                <?php } ?>
            </select>
            </div>
            <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="deskripsi" value="<?= $d['judul'] ?>">
                <small><?php echo form_error('deskripsi'); ?></small>
            </div>
            <div class="form-group">
                <label for="">Keterangan</label>
                <textarea name="keterangan" id="" cols="10" rows="10" class="form-control"><?= $d['keterangan'] ?></textarea>
                <small><?php echo form_error('keterangan'); ?></small>
            </div>
             <div class="form-group">
            <label for="">Situs</label>
            <input type="text" name="situs" id="" class="form-control" value="<?= $d['site'] ?>"></input>
            <small><?php echo form_error('situs'); ?></small>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" cols="10" rows="10" class="form-control" value="<?= $d['email'] ?>"></input>
            <small><?php echo form_error('email'); ?></small>
        </div>
        <div class="form-group">
            <label for="">Telpon</label>
            <input type="text" name="telpon" id="" cols="10" rows="10" class="form-control" value="<?= $d['no'] ?>"></input>
            <small><?php echo form_error('telpon'); ?></small>
        </div>
        <div class="form-group">
            <label for="">Maps</label>
            <input type="text" class="form-control" name="maps" value="<?= $d['maps'] ?>">
            <small><?php echo form_error('maps'); ?></small>
        </div>
        <div class="form-group">
            <label for="">Foto</label>
            <input type="file" class="form-control" name="foto" value="<?= $d['foto'] ?>">
            <small><?php echo form_error('foto'); ?></small>
        </div>
        <?php } ?>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>