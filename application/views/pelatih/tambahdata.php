<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tambah Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Pelatih</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="user" method="post" action="<?= base_url('pelatih/insert') ?>">
                        <div class="form-group">
                            <label for="nama">Nomor Anggota</label>
                            <input type="text" id="no_anggota" name="no_anggota" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Pelatih</label>
                            <input type="text" id="nama_pelatih" name="nama_pelatih" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin"> Jenis Kelamin</label>
                            <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                <option selected>Choose...</option>
                                <option value="Laki-Laki">Laki - Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cabor"> Cabang Olahraga</label>
                            <select id="id_cabor" name="id_cabor" class="form-control">
                                <option selected>Choose...</option>
                                <option value="4">Sepak Bola</option>
                                <option value="5">Basket</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama">Lesensi</label>
                            <input id="lesensi" name="lesensi" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fotoatlet">Foto Pelatih</label>
                            <input type="file" id="foto" name="foto" class="form-control-file">
                        </div>
                        <br>
                        <hr>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" class="btn btn-danger" href="<?= base_url("/pelatih") ?>">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>