<div class="container" id="content">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <h2 class="text-center">Kategori Bimbel</h2>
            <h3 class="text-center">Jarak Bimbel</h3>
            <!-- Content -->
            <form action="<?= site_url('welcome/jaract') ?>" method="POST">

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Asal Sekolah</label>

                    <select class="form-control" name="sekolah" id="exampleFormControlSelect1">
                        <?php foreach ($jar as $j) { ?>
                            <option value="<?= $j["id_sekolah"] ?>"><?= $j["sekolah"] ?></option>
                        <?php } ?>
                    </select>

                </div>

                <br>
                <button class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>
</div>