<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <br>
    <h2>Data Bimbel</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Bimbel</th>
                <th scope="col">Nama Bimbel</th>
                <th scope="col">Alamat</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($bimbel as $b) { ?>
                <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $b['id_bimbel'] ?></td>
                    <td><?= $b['nama'] ?></td>
                    <td><?= $b['alamat'] ?></td>
                    <td class="text-center"><a href=""><button type="button" class="btn btn-info btn-sm">Edit</button></a>
                        <a href=""><button type="button" class="btn btn-danger btn-sm">Hapus</button></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </table>
</div>