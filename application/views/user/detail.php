<div class="container" id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">Golek</a>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
        	<div class="col-sm-12">
        		<div class="card">
				  <div class="card-body">
				  	<?php foreach ($detail->result_array() as $d) { ?>
				    <h5 class="card-tittle mb-2 text-muted"><?php echo $d["judul"] ?></h5><hr>
				    <br>
				    <div class="row">
					    <div class="col-sm-6">
					    <p class="card-text text-justify"><?php echo $d["keterangan"] ?></p>
					    </div>
					    <div class="col-sm-6">
					    	<img src="<?php echo base_url('aset/img/').$d["foto"] ?>" class="card-img" ><br>
					    </div>
				    </div>
				    <br>
				    <div class="row">
				    	<div class="col-sm-6">
				    		<h6 class="card-subtitle">Fasilitas</h6>
				    		<?php foreach ($fasilitas->result_array() as $f) { ?>
				    			<ul>
				    				<li><?php echo $f["id_fasilitas"] ?></li>
				    			</ul>
				    		<?php } ?>
				    		<br>
				    		<h6>Situs</h6>
				    		<p><a href="<?php echo $d["site"] ?>"><?php echo $d["site"] ?></a></p><br>
				    		<h6>No Telpon</h6>
				    		<p><?php echo $d["no"] ?></p><br>
				    		<h6>Email Addres</h6>
				    		<p><?php echo $d["email"] ?></p><br>
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
