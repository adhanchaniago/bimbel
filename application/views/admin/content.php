<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dasboard</li>
        </ol>
    </nav>

    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">Id Bimbel</th>
                    <th scope="col">Nama Bimbel</th>
                    <th scope="col">Alamat Bimbel</th>
                    <th scope="col">Fasilitas</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Situs Terkait</th>
                    <th scope="col">Telpon</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($tampil as $u) { ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $u['id_bimbel'] ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['alamat'] ?></td>
                        <td><?= $u['fasilitas'] ?></td>
                        <td><?= $u['biaya'] ?></td>
                        <td><?= $u['situs'] ?></td>
                        <td><?= $u['telpon'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['deskripsi'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>