<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_admin') ?>">Dasboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data</li>
        </ol>
    </nav>
    <form action="<?= site_url('c_admin/tambahact') ?>" method="POST">
        <div class="form-group">
            <label for="">Id Bimbel</label>
            <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
            <label for="">Nama Bimbel</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label for="">Alamat Long</label>
            <input type="text" class="form-control" name="along">
        </div>
        <label for="">Fasilitas</label>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Ac">
                    <label for="" class="form-check-label">Ac</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="fasilitas[]" value="Projector">
                    <label for="" class="form-check-label">Projector</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Genset">
                    <label for="" class="form-check-label">Ganset</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="Parkir">
                    <label for="" class="form-check-label">Parkir</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="SmartBoard">
                    <label for="" class="form-check-label">SmartBoard</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="LCD">
                    <label for="" class="form-check-label">LCD</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="scanner">
                    <label for="" class="form-check-label">Scanner OMR Opscan</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="perpus">
                    <label for="" class="form-check-label">Perpustakaan</label>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-check">
                    <input type="checkbox" name="fasilitas[]" class="form-check-input" value="konsul">
                    <label for="" class="form-check-label">Area Konsultasi</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Biaya</label>
            <input type="number" class="form-control" name="biaya">
        </div>
        <div class="form-group">
            <label for="">Situs Terkait</label>
            <input type="url" class="form-control" name="situs">
        </div>
        <div class="form-group">
            <label for="">Nomer Telpon</label>
            <input type="text" class="form-control" name="telpon">
        </div>
        <div class="form-group">
            <label for="">Alamat Email</label>
            <input type="email" class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="">Deskripsi</label>
            <textarea name="deskripsi" t class="form-control" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>