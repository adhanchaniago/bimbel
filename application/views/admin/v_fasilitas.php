<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fasilitas bimbel</li>
        </ol>
    </nav>
    <br>
    <h3>Fasilitas Bimbel</h3><br>
    <a href="<?= site_url('c_tampil/addfas') ?>" class="btn btn-primary">Tambah Fasilitas </a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Fasilitas</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($tampil as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <!-- <td><?= $b['id_fasilitas'] ?></td> -->
                    <td><?= $b['fasilitas'] ?></td>
                    <td>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_tampil/editfas/') . $b['id_fasilitas'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_hapus/delfas/') . $b['id_fasilitas'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <hr>
    <br>
    <h3>Fasilitas Bimbel</h3><br>
    <a href="<?= site_url('c_tampil/addfasbimbel') ?>" class="btn btn-primary">Fasilitas Bimbel </a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Bimbel</th>
                <th scope="col">Id Fasilitas</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($getfas as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td hidden><?= $b['idget'] ?></td>
                    <td><?= $b['id_bimbel'] ?></td>
                    <td><?= $b['id_fasilitas'] ?></td>

                    <td>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_tampil/editfasbimbel/') . $b['id_bimbel'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_hapus/delfasi/') . $b['id_fasilitas'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>

    </table>
</div>