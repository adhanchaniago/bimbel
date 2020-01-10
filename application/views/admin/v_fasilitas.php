<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Fasilitas bimbel</li>
        </ol>
    </nav>
    <br>
    <h3>Fasilitas Bimbel</h3>
    <a href="" class="btn btn-primary">Tambah Fasilitas Bimbel</a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Fasilitas</th>
                <th scope="col">Id Bimbel</th>
                <th scope="col">icon</th>
                <th scope="col">Fasilitas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($fasilitas as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['id_fasilitas'] ?></td>
                    <td><?= $b['id_bimbel'] ?></td>
                    <td><?= $b['icon'] ?></td>
                    <td><?= $b['fasilitas'] ?></td>
                    <td scope="row" class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_admin/editschol/') . $t['id_sekolah'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_admin/delschol/') . $t['id_sekolah'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <h3>Fasilitas</h3>
    <a href="" class="btn btn-primary">Tambah Fasilitas</a>
    <br><br>
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Id Fasilitas </th>
                <th scope="col">Icon</th>
                <th scope="col">Fasilitas</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($getfasilitas as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['id_fasilitas'] ?></td>
                    <td><?= $b['icon'] ?></td>
                    <td><?= $b['fasilitas'] ?></td>
                    <td scope="row" class="text-center">
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-info btn-sm" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_admin/editschol/') . $t['id_sekolah'] ?>"><i class="fa fa-edit fa-2x"></i></a>
                                </button>
                            </div>
                            <div class="col-sm-6">
                                <button type="button" class="btn btn-danger" style="padding: 3px; margin: 5px;">
                                    <a href="<?= site_url('c_admin/delschol/') . $t['id_sekolah'] ?>"><i class="fas fa-trash-alt fa-2x"></i></a>
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>