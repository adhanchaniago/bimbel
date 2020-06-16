<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil') ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('c_tampil/deskripsi') ?>">Deskripsi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Deskripsi</li>
        </ol>
    </nav>
    <br>
    <h3>Tambah Deskripsi</h3><br>
    <br>
    <form action="<?= site_url('c_tambah/addesk') ?>" enctype="multipart/form-data" method="POST">
		<div class="form-group">
			<label for="exampleFormControlSelect1">Id Bimbel</label>
			<select class="form-control" name="id" id="exampleFormControlSelect1">
				<?php foreach ($idbim as $id) { ?>
				<option><?php echo $id["id_bimbel"] ?></option>
				<?php } ?>
			</select>
		</div>
        <div class="form-group">
            <label for="">Judul</label>
            <input type="text" class="form-control" name="deskripsi">
        </div>
        <div class="form-group">
            <label for="">Keterangan</label>
            <textarea name="keterangan" id="" cols="10" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Situs</label>
            <input type="text" name="situs" id="" class="form-control"></input>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" cols="10" rows="10" class="form-control"></input>
        </div>
        <div class="form-group">
            <label for="">Telpon</label>
            <input type="text" name="telpon" id="" cols="10" rows="10" class="form-control"></input>
        </div>
        <div class="form-group">
            <label for="">Maps</label>
            <input type="text" class="form-control" name="maps">
        </div>
		<div class="form-group">
			<label for="">Foto</label>
			<input type="file" class="form-control" name="foto">
		</div>
        <button class="btn btn-primary" type="submit">Submit</button>
    </form>
</div>
