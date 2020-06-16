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
    <br>
    <div class="container">
        <div class="row">
        	<div class="col-sm-12">
        		<div class="card">
				  <div class="card-body">
				  	<?php foreach ($detail->result_array() as $d) { ?>
				    <h5 class="card-title"><?php echo $d["nama"] ?></h5><hr>
				    <h6 class="card-subtitle mb-2 text-muted"><?php echo $d["judul"] ?></h6>
				    <br>
				    <div class="row">
					    <div class="col-sm-6">
					    <p class="card-text"><?php echo $d["keterangan"] ?></p>
					    </div>
					    <div class="col-sm-6">
					    	<img src="<?php echo base_url('aset/img/').$d["foto"] ?>" class="card-img" ><br>
					    </div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-sm-6">
				    		<h6 class="card-subtitle">Fasilitas</h6><br>
				    		<?php foreach ($fasilitas->result_array() as $f) { ?>
				    			<ul>
				    				<li><?php echo $f["id_fasilitas"] ?></li>
				    			</ul>
				    		<?php } ?>
				    	</div>
				    	<div class="col-sm-6 te">
				    		<h6>Alamat</h6><br>
				    		<p class="text-center"><?php echo $d["maps"] ?></p>
				    	</div>
				    </div>
				  <?php	} ?>
				  </div>
				</div>
        	</div>
        </div>
        <br>
    </div>
</div>
