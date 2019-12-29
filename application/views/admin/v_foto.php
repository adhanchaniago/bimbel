<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Foto</li>
        </ol>
    </nav>
    <br>
    <a href="<?= site_url('c_admin/tambahfoto') ?>"><button class="btn btn-primary">Tambah Foto</button></a>
    <br>
    <br>
    <div class="">
        <table class="table">
            <thead>
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($foto as $u) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $u['id_bimbel'] ?></td>
                        <td><img src="<?= base_url('aset/img/' . $u['foto']) ?>" width="70%" height="70%"></td>
                        <td class="text-center"><a href=""><button class="btn btn-info btn-sm">Edit</button></a> <br><br>
                            <a href=""><button class="btn btn-danger btn-sm">Hapus</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>