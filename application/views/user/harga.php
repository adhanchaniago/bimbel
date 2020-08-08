<div class="container" id="content">
    <div class="row" id="row">
        <div class="col-sm-6 offset-sm-3">
            <!-- Content -->
            <h2 class="text-center" style="padding-top: 10%">Pilih Sekolah</h2>

            <form action="<?= site_url('C_metode') ?>" method="POST">
                <!-- <div class="form-group">
                    <label for="">Harga min</label>
                    <input type="number" name="min" min="1000000" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga max</label>
                    <input type="number" name="max" min="2000000" class="form-control">
                </div>
                <label for="">Fasilitas</label>
                <?php foreach ($fas as $f) { ?>
                    <div class="form-group form-check">
                        <input type="checkbox" name="fasilitas[]" class="form-check-input" id="exampleCheck1" value="<?= $f["fasilitas"] ?>">
                        <label class="form-check-label" for="exampleCheck1"><?= $f["fasilitas"] ?></label>
                    </div>
                <?php } ?> -->
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