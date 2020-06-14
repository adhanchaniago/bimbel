<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dasboard</li>
        </ol>
    </nav>

    <div class="table-responsive">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">NO</th>

                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Nama Bimbel</th>
                    <th scope="col">Alamat Bimbel</th>
                    <th scope="col">Harga Bimbel</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($tampil as $u) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td hidden><?= $u['idbim'] ?></td>
                        <td><?= $u['id_bimbel'] ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['alamat'] ?></td>
                        <td><?= $u['harga'] ?></td>
                        <td>
                            <div class="row">
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_tampil/edit/') . $u['idbim'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                    </button>
                                </div>
                                <div class="col-sm-6">
                                    <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                        <a href="<?= site_url('c_hapus/delbim/') . $u['idbim'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
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