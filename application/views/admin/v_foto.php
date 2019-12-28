<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
        </ol>
    </nav>
    <br>
    <a href="<?= site_url('c_admin/tambahfoto') ?>"><button class="btn btn-primary">Tambah Foto</button></a>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($foto as $u) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $u['id_bimbel'] ?></td>
                        <td><?= $u['foto'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>