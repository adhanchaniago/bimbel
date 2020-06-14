<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/fasilitas') ?>">fasilitas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Fasilitas</li>
        </ol>
    </nav>
    <br>
    <h3>Tambah Fasilitas</h3><br>
    <form action="<?= site_url('c_tambah/fasact') ?>" method="POST">
        <div class="form-group">
            <label for="">Id fasilitas</label>
            <input type="text" class="form-control" name="idfasilitas">
        </div>
        <div class="form-group">
            <label for="">Nama fasilitas</label>
            <input type="text" class="form-control" name="fasilitas">
        </div>
        <div class="form-group">

            <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>