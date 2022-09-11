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
                            <h4>Tambah Mahasiswa</h4>
                        </div>
                        <?= form_open_multipart("mahasiswa/add_process") ?>
                        <div class="card-body">
                            <?php
                            if (isset($error)) {
                                echo "ERROR UPLOAD : ";
                                print_r($error);
                                echo "<hr/>";
                            }
                            ?>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="inputNama" name="inputNama">
                            </div>
                            <div class="form-group">
                                <label>NIM</label>
                                <input type="text" class="form-control" id="inputNim" name="inputNim">
                            </div>
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="number" class="form-control" id="inputNoHp" name="inputNoHp">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="inputEmail" name="inputEmail">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" id="inputJurusan" name="inputJurusan">
                                    <option value="1">FAKULTAS HUKUM</option>
                                    <option value="2">FAKULTAS EKONOMIKA DAN BISNIS</option>
                                    <option value="3">FAKULTAS TEKNIK</option>
                                    <option value="4">FAKULTAS KEDOKTERAN</option>
                                    <option value="5">FAKULTAS PETERNAKAN DAN PERTANIAN</option>
                                    <option value="6">FAKULTAS ILMU BUDAYA</option>
                                    <option value="7">FAKULTAS ILMU SOSIAL DAN ILMU POLITIK</option>
                                    <option value="8">FAKULTAS KESEHATAN MASYARAKAT</option>
                                    <option value="9">FAKULTAS SAINS DAN MATEMATIKA</option>
                                    <option value="10">FAKULTAS PERIKANAN DAN ILMU KELAUTAN</option>
                                    <option value="11">FAKULTAS PSIKOLOGI</option>
                                    <option value="12">SEKOLAH PASCASARJANA</option>
                                    <option value="13">SEKOLAH VOKASI</option>
                                    <option value="14">PROGRAM STUDI DI LUAR KAMPUS UTAMA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Foto Profil</label>
                                <input type="file" class="form-control" id="inputFotoProfil" name="inputFotoProfil">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <input type="text" class="form-control" id="inputAlamat" name="inputAlamat">
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" value="upload" class="btn btn-primary">Simpan</button>
                        </div>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $this->load->view('dist/_partials/footer'); ?>