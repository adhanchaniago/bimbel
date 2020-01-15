<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Sekolah</li>
        </ol>
    </nav>
    <br>
    <a href="<?= site_url('c_tampil/addschool') ?>"><button class="btn btn-primary">Tambah Sekolah</button></a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Sekolah</th>
                    <th scope="col">Nama sekolah</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($tampil as $t) { ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $t['id_sekolah'] ?></td>
                        <td><?= $t['sekolah'] ?></td>

                        <td>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/editschol/') . $t['id_sekolah'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_hapus/delschol/') . $t['id_sekolah'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <hr>
    <br>
    <a href="<?= site_url('c_tampil/addschool') ?>"><button class="btn btn-primary">Tambah jarak Sekolah</button></a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Sekolah</th>
                    <th scope="col">Nama sekolah</th>
                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Jarak</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($tampil as $t) { ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td><?= $t['id_sekolah'] ?></td>
                        <td><?= $t['sekolah'] ?></td>
                        <td><?= $t['id_bimbel'] ?></td>
                        <td><?= $t['jarak'] ?></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/editschol/') . $t['id_sekolah'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_hapus/delschol/') . $t['id_sekolah'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>