    <div class="container col-sm-10" >
            <h2 class="text-center" style="padding-top: 10%">Pilih Sekolah</h2>
            <form action="<?= site_url('C_metode') ?>" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Asal Sekolah</label>
                    <select class="form-control" name="sekolah" id="exampleFormControlSelect1">
                        <?php foreach ($tampil as $j) { ?>
                            <option value="<?= $j["id_sekolah"] ?>"><?= $j["sekolah"] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <br>
                <button class="btn btn-primary">Cari</button>
            </form>
    </div>
