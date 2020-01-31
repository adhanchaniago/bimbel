<div class="container" id="content">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <!-- Content -->
            <h2 class="text-center">Kategori Bimbel</h2>
            <h3 class="text-center">Harga Bimbel</h3>
            <form action="<?= site_url('welcome/harga') ?>" method="POST">
                <div class="form-group">
                    <label for="">Harga min</label>
                    <input type="number" name="min" min="1000000" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Harga max</label>
                    <input type="number" name="max" min="2000000" class="form-control">
                </div>
                <br>
                <button class="btn btn-primary">Cari</button>
            </form>
        </div>
    </div>
</div>