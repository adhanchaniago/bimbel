<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Paket</li>
        </ol>
    </nav>
    <br>
    <h3>Paket Bimbel</h3><br>
    <a href="<?= site_url('c_tampil/addpaket') ?>" class="btn btn-primary">Tambah Paket </a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Paket</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>

                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($tampil as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['id_paket'] ?></td>
                    <td><?= $b['deskripsi'] ?></td>
                    <td><?= $b['harga'] ?></td>

                    <td>
                        <div class="row">
                            <div class="col-sm-3 offset-sm-3">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_tampil/editpaket/') . $b['id_paket'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_admin/delschol/') . $b['id_paket'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>