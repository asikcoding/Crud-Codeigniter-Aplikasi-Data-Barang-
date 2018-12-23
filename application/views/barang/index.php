<?php // $this->load->view('layouts/sidebar') ?>
<?php // $this->load->view('layouts/header') ?>


<table>
	<thead>
		<tr>
			<th data-field="state" data-checkbox="true"></th>
			<th data-field="id">No</th>
			<th data-field="id">Kode</th>
			<th data-field="name" data-editable="true">Nama</th>
			<th data-field="company" data-editable="true">Merk</th>
			<th data-field="price" data-editable="true">harga</th>
			<th data-field="date" data-editable="true">Harga Jual</th>
			<th data-field="task" data-editable="true">Stock</th>
			<th data-field="email" data-editable="true">Keterangan</th>
			<th data-field="action">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1 ?>
		<?php foreach ($datas->result_array() as $res ) {?>
		<tr>
			<td></td>
			<td><?php echo $no ?></td>
			<td><?php echo $res['kode'] ?></td>
			<td><?php echo $res['nama'] ?></td>
			<td><?php echo $res['merk'] ?></td>
			<td><?php echo $res['harga'] ?></td>
			<td><?php echo $res['harga_jual'] ?></td>
			<td><?php echo $res['stock'] ?></td>
			<td><?php echo $res['keterangan']  ?></td>
			<td>
				<a href="<?php echo base_url().'index.php/Welcome/edit?id='.$res['no'] ?>">Edit</a>
				<a href="<?php echo base_url().'index.php/Welcome/hapusdata?id='.$res['no'] ?>">Hapus</a>
			</td>
		</tr>
		<?php $no ++ ?>
		<?php } ?>
	</tbody>
</table>
<a href="<?php echo base_url().'index.php/Welcome/tambah' ?>">Tambah Data</a>

<!-- Static Table End -->
<?php // $this->load->view('layouts/footer') ?>
