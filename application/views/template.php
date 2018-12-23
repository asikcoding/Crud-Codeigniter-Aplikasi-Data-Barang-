<?php  $this->load->view('layouts/sidebar') ?>
<?php  $this->load->view('layouts/header') ?>


<!-- Mobile Menu end -->
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href="">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li>
                                    <a href="#">Home</a>
                                    <span class="bread-slash">/</span>
                                </li>
                                <li>
                                    <span class="bread-blod">Data Table</span>
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
                        <h1>Products
                            <span class="table-project-n">Data</span>
                            Table</h1>
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
                                    <td>Kode</td>
                                    <td>Nama</td>
                                    <td>Merk</td>
                                    <td>Harga</td>
                                    <td>harga Jual</td>
                                    <td>Stock</td>
                                    <td>Keterangan</td>
                                    <td>Opsi</td>
                                    <!-- <th data-field="state" data-checkbox="true"></th> <th
                                    data-field="id">ID</th> <th data-field="name" data-editable="true">Product
                                    Title</th> <th data-field="company" data-editable="true">Stock</th> <th
                                    data-field="price" data-editable="true">Price</th> <th data-field="date"
                                    data-editable="true">Date</th> <th data-field="task"
                                    data-editable="true">Status</th> <th data-field="email"
                                    data-editable="true">Total Sales</th> <th data-field="action">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($datas->result_array() as $res ) {?>
                                <tr>
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
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Static Table End -->
<?php  $this->load->view('layouts/footer') ?>