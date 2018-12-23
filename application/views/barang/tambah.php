
<form
    action="<?php echo base_url().'index.php/Welcome/simpan' ?>"
    method="post">
    <label for="">Kode Barang</label><br>
    <input type="text" name="kode" class="form-control"><br>
    <label for="">Nama Barang</label><br>
    <input type="text" name="nama" class="form-control"><br>
    <label for="">Merk Barang</label><br>
    <input type="text" name="merk" class="form-control"><br>
    <label for="">Harga Beli</label><br>
    <input type="text" name="harga" class="form-control"><br>
    <label for="">Harga Jual</label><br>
    <input type="text" name="harga_jual" class="form-control"><br>
    <label for="">Stock Barang</label><br>
    <input type="text" name="stock" class="form-control"><br>
    <label for="">Keterangan Barang</label><br>
    <textarea name="keterangan" id="" cols="30" rows="10" class="form-control"></textarea>
    <br>
    <input type="submit" name="submit" value="Simpan" class="btn-sm btn-success">
</form>
