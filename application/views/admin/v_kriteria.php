<br><div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kriteria</li>
        </ol>
    </nav>
    <br>
    <h3>Kriteria Bimbel</h3><br>
    <a href="<?= site_url('c_tampil/addkriteria') ?>" class="btn btn-primary">Tambah Kriteria </a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kriteria</th>
                <th scope="col">Bobot</th>
                <th scope="col">Keterangan</th>

                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($tampil as $b) { ?>
                <tr>
                    <th hidden><?= $b['id_kriteria'] ?></th>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['kriteria'] ?></td>
                    <td><?= $b['bobot'] ?></td>
                    <td><?= $b['keterangan'] ?></td>

                    <td>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_tampil/editkriteria/') . $b['id'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_hapus/delkri/') . $b['id'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>