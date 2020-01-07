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
                    <td scope="row" class="text-center">
                        <button class="btn btn-success" type="submit" name="ubah" style="padding: 3px;">
                            <a onclick="return confirm('Anda yakin akan mengubah data?')" href="<?php echo site_url('c_admin/formedit/') . $b['id_bimbel'] ?>" style=" color: #fff; text-decoration: none; font-size: 12px;">
                                <i class="fa fa-edit fa-2x"></i>
                            </a>
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger" type="submit" name="hapus" style="padding: 3px;">
                            <a onclick="return confirm('Anda yakin akan menghapus data?')" href="<?= site_url('c_admin/delete/') . $b['id_bimbel'] ?>" style="color: #fff; text-decoration: none; font-size: 12px;">
                                <i class="fas fa-trash-alt fa-2x"></i>
                            </a>
                        </button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </table>
</div>