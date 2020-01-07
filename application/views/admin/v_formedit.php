<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Dasboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
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
                <label for="">Jarak SMA 8</label>
                <input type="text" class="form-control" name="sma8" value="<?= $e->sma8 ?>">
            </div>
            <div class="form-group">
                <label for="">Jarak SMA 9</label>
                <input type="text" class="form-control" name="sma9" value="<?= $e->sma9 ?>">
            </div>
            <label for="">Fasilitas</label>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Ac" <?php in_array('Ac', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Ac</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Projector" <?php in_array('Projector', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Projector</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Genset" <?php in_array('Genset', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Ganset</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Parkir" <?php in_array('Parkir', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Parkir</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="SmartBoard" <?php in_array('SmartBoard', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">SmartBoard</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="LCD" <?php in_array('LCD', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">LCD</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Scanner" <?php in_array('Scanner', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Scanner OMR Opscan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Perpustakaan" <?php in_array('Perpustakaan', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Perpustakaan</label>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Konsultasi" <?php in_array('Konsultasi', explode(" ", $e->fasilitas)) ? print "checked" : ""; ?>>
                        <label for="" class="form-check-label">Area Konsultasi</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Biaya</label>
                <input type="number" class="form-control" name="biaya" value="<?= $e->biaya ?>">
            </div>
            <div class="form-group">
                <label for="">Situs Terkait</label>
                <input type="url" class="form-control" name="situs" value="<?= $e->situs ?>">
            </div>
            <div class="form-group">
                <label for="">Nomer Telpon</label>
                <input type="text" class="form-control" name="telpon" value="<?= $e->telpon ?>">
            </div>
            <div class="form-group">
                <label for="">Alamat Email</label>
                <input type="text" class="form-control" name="email" value="<?= $e->email ?>">
            </div>
            <div class="form-group">
                <label for="">Deskripsi</label>
                <textarea name="deskripsi" class="form-control" cols="30" rows="10"><?= $e->deskripsi ?></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        <?php } ?>
    </form>

</div>