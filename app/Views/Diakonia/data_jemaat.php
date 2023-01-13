<?= $this->extend('/deskapp/includes/index') ?>
<!-- echo header,rightsidebar,leftsidebar and loader -->
<?= $this->section('main-content'); ?>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>DataTable</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    DataTable
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <div class="dropdown">
                            <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                Add New
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url('admin/newJemaat'); ?>">Add New User</a>
                                <a class="dropdown-item" href="#">Export User</a>
                                <a class="dropdown-item" href="#">Import User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swalalert" data-swal="<?= session()->get('success'); ?>">
            </div>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Data User</h4>
                    <p class="mb-0">
                        you can find more options

                    </p>
                </div>
                <!-- Notifikasi Alert Berhasil
                <?php if (session('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session('success'); ?>
                </div>
                <?php endif; ?>
                <!-- Notifikasi Alert Gagal --
                <?php if (session('error')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= session('error'); ?>
                </div>
                <?php endif; ?> -->
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Nama Jemaat</th>
                                <th>NO HP</th>
                                <th>Alamat</th>
                                <th>Pekerjaan</th>
                                <th>Sektor</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($jemaat as $user) : ?>
                            <tr>
                                <td class="table-plus"><?= $i++; ?></td>
                                <td><?php echo $user['nama_jemaat'] ?></td>
                                <td><?php echo $user['nohp'] ?></td>
                                <td><?php echo $user['alamat'] ?></td>
                                <td><?php echo $user['pekerjaan'] ?></td>
                                <td><?php echo $user['sektor'] ?></td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                            href="#" role="button" data-toggle="dropdown">
                                            <i class="dw dw-more"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                            <a class="dropdown-item"
                                                href="<?php echo base_url('admin/detailJemaat/' . $user['id']); ?>"><i
                                                    class="dw dw-eye"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                            <a class="dropdown-item"
                                                href="<?php base_url('admin/deleteJemaat' . $user['id']); ?>"><i
                                                    class="dw dw-delete-3"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Simple Datatable End -->

        </div>
        <?php $this->endSection(); ?>