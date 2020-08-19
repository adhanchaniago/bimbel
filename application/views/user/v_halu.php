<div class="container" id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <h1><a class="navbar-brand" href="<?= base_url() ?>">Golek</a></h1>
        </div>
    </nav>
    <div class="container">
        <br>
        <div class="row text-center">
            <div class="col-sm-6">
                <h2>Weihgted Product</h2>
            <?php foreach ($wp->result_array() as $w ) { ?>
            <div class="col-sm-12">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="container">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="<?php echo base_url("aset/img/").$w["foto"] ?>" class="card-img" style="padding-top: 30%">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"> <?= $w["nama"] ?></h5>
                            <p class="card-text text-left"><?php echo $w["alamat"]?></p>
    						  <p class="card-text text-left"><?php echo "Rp. " .number_format($w["harga"],0,",",",")  ?></p>
                            <a href="<?php echo base_url('c_metode/detail/').$w["id_bimbel"]?>"><button class="btn btn-primary btn-sm">Read More</button></a>
                          </div>
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
                    <div class="container">
                      <div class="row no-gutters">
                        <div class="col-md-4">
                          <img src="<?php echo base_url("aset/img/").$s["foto"] ?>" class="card-img" style="padding-top: 30%">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $s["nama"] ?></h5>
                            <p class="card-text text-left"><?php echo $s["alamat"]?></p>
    						  <p class="card-text text-left"><?php echo "Rp. " . number_format($s["harga"],0,",",",") ?></p>
                            <a href="<?php echo base_url('c_metode/detail/').$s["id_bimbel"] ?>"><button class="btn btn-primary btn-sm">Read More</button></a>
                          </div>
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
