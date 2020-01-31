<div class="container" id="content">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h2 class="text-center">Kategori Bimbel</h2>
            <h3 class="text-center">Fasilitas Bimbel</h3>
            <!-- Content -->
            <form action="<?= site_url('welcome/fasact') ?>" method="POST">
                <?php foreach ($fas as $f) { ?>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" name="fasilitas" value="<?= $f['fasilitas'] ?>">
                    </div>
                <?php } ?>
                <br>
                <button class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>
</div>