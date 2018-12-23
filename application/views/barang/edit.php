
<?php foreach ($datas->result_array() as $data); ?>
<form
	action="<?php echo base_url().'index.php/Welcome/simpanedit' ?>"
	method="post">
	<input type="text" name="no" hidden="hidden" value="<?= $data['no'] ?>"><br>
	<label for="">Kode Barang</label><br>
	<input
		type="text"
		name="kode"
		class="form-control"
		value="<?= $data['kode'] ?>"><br>
	<label for="">Nama Barang</label><br>
	<input
		type="text"
		name="nama"
		class="form-control"
		value="<?= $data['nama'] ?>"><br>
	<label for="">Merk Barang</label><br>
	<input
		type="text"
		name="merk"
		class="form-control"
		value="<?= $data['merk'] ?>"><br>
	<label for="">Harga Beli</label><br>
	<input
		type="text"
		name="harga"
		class="form-control"
		value="<?= $data['harga'] ?>"><br>
	<label for="">Harga Jual</label><br>
	<input
		type="text"
		name="harga_jual"
		class="form-control"
		value="<?= $data['harga_jual'] ?>"><br>
	<label for="">Stock Barang</label><br>
	<input
		type="text"
		name="stock"
		class="form-control"
		value="<?= $data['stock'] ?>"><br>
	<label for="">Keterangan Barang</label><br>
	<textarea name="keterangan" id="" class="form-control" cols="30" rows="10"><?= $data['keterangan'] ?>"</textarea>
	<br>
	<input type="submit" name="submit" class="btn btn-block btn-success" value="Simpan">
</form>
       