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
                        <td scope="row" class="text-center">
                            <button class="btn btn-success" type="submit" name="ubah" style="padding: 3px;">
                                <a onclick="return confirm('Anda yakin akan mengubah data?')" href="<?php echo site_url('c_admin/formedit/') . $u['id_bimbel'] ?>" style=" color: #fff; text-decoration: none; font-size: 12px;">
                                    <i class="fa fa-edit fa-2x"></i>
                                </a>
                            </button>
                        </td>
                        <td>
                            <button class="btn btn-danger" type="submit" name="hapus" style="padding: 3px;">
                                <a onclick="return confirm('Anda yakin akan menghapus data?')" href="<?= site_url('c_admin/deletfoto/') . $u['id_bimbel'] ?>" style="color: #fff; text-decoration: none; font-size: 12px;">
                                    <i class="fas fa-trash-alt fa-2x"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>