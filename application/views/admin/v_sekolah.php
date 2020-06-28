<br><div class="container">
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
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($sekolah as $t) { ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td hidden><?= $t['idsek'] ?></td>
                        <td><?= $t['id_sekolah'] ?></td>
                        <td><?= $t['sekolah'] ?></td>

                        <td>
                            <div class="row">
                                <div class="col-sm-3 offset-sm-3">
                                    <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/editsekolah/') . $t['idsek'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_hapus/delschol/') . $t['idsek'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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
    <a href="<?= site_url('c_tampil/addjarak') ?>"><button class="btn btn-primary">Tambah jarak Sekolah</button></a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Sekolah</th>
                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Jarak</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($tampil as $j) { ?>
                    <tr>
                        <th scope="row"><?= $i++ ?></th>
                        <td hidden><?= $j['idjar'] ?></td>
                        <td><?= $j['id_sekolah'] ?></td>
                        <td><?= $j['id_bimbel'] ?></td>
                        <td><?= $j['jarak'] ?></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 offset-sm-3">
                                    <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/editjarak/') . $j['idjar'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_hapus/deljarak/') . $j['idjar'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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