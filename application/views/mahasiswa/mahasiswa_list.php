<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>DataTables</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Modules</a></div>
                <div class="breadcrumb-item">DataTables</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h4>List Mahasiswa</h4>
                        </div>
                        <div class="card-body">
                            <a href="mahasiswa/add" class="btn btn-icon icon-left btn-primary"><i class="far fa-user"></i> Tambah</a>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>Foto</th>
                                            <th>Nama</th>
                                            <th>Nim</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>Jurusan</th>
                                            <th>Alamat</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($mahasiswa as $row) : ?>
                                            <tr>
                                                <td>
                                                    <figure class="avatar mr-2 avatar">
                                                        <img src="upload/fotoprofil/<?= $row->foto_profil; ?>" alt="...">
                                                    </figure>
                                                </td>
                                                <td><?= $row->nama; ?></td>
                                                <td><?= $row->nim; ?></td>
                                                <td><?= $row->no_hp; ?></td>
                                                <td><?= $row->email; ?></td>
                                                <td><?= $row->nama_fakultas2; ?></td>
                                                <td><?= $row->alamat; ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-icon icon-left btn-success"><i class="far fa-edit"></i> Edit</a>
                                                    <a href="mahasiswa/delete_process/<?= $row->id_mhs; ?>" class="btn btn-icon icon-left btn-danger"><i class="fas fa-times"></i> Danger</a>
                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>