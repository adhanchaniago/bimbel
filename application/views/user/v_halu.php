<div class="container" id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Golek</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="padding-left: 30px">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row text-center">
            <br>
            <div class="col-sm-6">
                <h2>Weihgted Product</h2>
            <?php foreach ($wp->result_array() as $w ) { ?>
            <div class="col-sm-12">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?php echo base_url("aset/img/").$w["foto"] ?>" class="card-img" style="padding-top: 30%">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"> <?= $w["nama"] ?></h5>
                        <p class="card-text text-left"><?php echo $w["alamat"]?></p>
						  <p class="card-text text-left"><?php echo "Rp, " . $w["harga"] ?></p>
                        <a href="<?php echo base_url('c_metode/detail/').$w["id_bimbel"] ?>"><button class="btn btn-primary btn-sm">Read More</button></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
           <?php }?>
            </div>
            <div class="col-sm-6">
                <h2>Simple Adittive Weighting</h2>
            <?php foreach ($saw->result_array() as $s ) { ?>
            <div class="col-sm-12">
                <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="<?php echo base_url("aset/img/").$w["foto"] ?>" class="card-img" style="padding-top: 30%">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $s["nama"] ?></h5>
                        <p class="card-text text-left"><?php echo $s["alamat"]?></p>
						  <p class="card-text text-left"><?php echo "Rp, " .$s["harga"] ?></p>
                        <a href="<?php echo base_url('c_metode/detail/').$s["id_bimbel"] ?>"><button class="btn btn-primary btn-sm">Read More</button></a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
           <?php }?>
            </div>
        </div>
    </div>
</div>
