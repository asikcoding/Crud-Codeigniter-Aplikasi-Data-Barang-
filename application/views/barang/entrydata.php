<?php  $this->load->view('layouts/sidebar') ?>
<?php  $this->load->view('layouts/header') ?>


<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6"></div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li>
                                    <a href="#">Home</a>
                                    <span class="bread-slash">/</span>
                                </li>
                                <li>
                                    <span class="bread-blod">Data Barang</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Static Table Start -->
<div class="data-table-area mg-tb-15">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="sparkline13-list">
                <div class="sparkline13-hd">
                    <div class="main-sparkline13-hd">
                        <h1>Master
                            <span class="table-project-n">Data</span>
                            Barang</h1>
                    </div>
                </div>
                <div class="sparkline13-graph">
                    <div class="datatable-dashv1-list custom-datatable-overright">
                        <div id="toolbar">
                            <select class="form-control">
                                <option value="">Export Basic</option>
                                <option value="all">Export All</option>
                                <option value="selected">Export Selected</option>
                            </select>
                        </div>
                        <table
                            id="table"
                            data-toggle="table"
                            data-pagination="true"
                            data-search="true"
                            data-show-columns="true"
                            data-show-pagination-switch="true"
                            data-show-refresh="true"
                            data-key-events="true"
                            data-show-toggle="true"
                            data-resizable="true"
                            data-cookie="true"
                            data-cookie-id-table="saveId"
                            data-show-export="true"
                            data-click-to-select="true"
                            data-toolbar="#toolbar">
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
                                        <a href="<?php echo base_url().'index.php/Welcome/edit?id='.$res['no'] ?>"  class="btn-sm center  btn-warning" >Edit</a>
                                        <a href="<?php echo base_url().'index.php/Welcome/hapusdata?id='.$res['no'] ?>"  class="btn-sm center  btn-warning" >Hapus</a>
                                    </td>
                                </tr>
                                <?php $no ++ ?>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <a
                            href="<?php echo base_url('index.php/Welcome/tambah') ?>"
                            class="btn btn-block btn-warning">Tambah Data Barang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<!-- Static Table End -->
<?php  $this->load->view('layouts/footer') ?>