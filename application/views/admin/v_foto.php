<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
        </ol>
    </nav>
    <br>
    <a href="<?= site_url('c_tampil/addfoto') ?>"><button class="btn btn-primary">Tambah Foto</button></a>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Foto</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($tampil as $u) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $u['id_foto'] ?></td>
                        <td><img src="<?= base_url('aset/img/' . $u['foto']) ?>" width="70%" height="70%"></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-3 offset-sm-3">
                                    <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/editfoto/') . $u['id_foto'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/delschol/') . $u['id_foto'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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