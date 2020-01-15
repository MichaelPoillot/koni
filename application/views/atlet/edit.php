<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edit Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Atlet</li>
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
                    <form action="">
                        <div class="form-group">
                            <label for="nama">Nomor Anggota</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nama">Nama Atlet</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="cabor"> Jenis Kelamin</label>
                            <select id="status" class="form-control">
                                <option selected>Choose...</option>
                                <option>Laki - Laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cabor"> Cabang Olahraga</label>
                            <select id="status" class="form-control">
                                <option selected>Choose...</option>
                                <option>Sepak Bola</option>
                                <option>Basket</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tahun Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="prestasi">Prestasi</label>
                            <textarea class="form-control" id="prestasi" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Prestasi</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cabor">status</label>
                            <select id="status" class="form-control">
                                <option selected>Choose...</option>
                                <option>active</option>
                                <option>non active</option>
                            </select>
                            <div class="form-group">
                                <label for="fotoatlet">Foto Atlet</label>
                                <input type="file" class="form-control-file" id="image">
                            </div>
                            <br>
                            <hr>
                            <button type="submit" class="btn btn-primary">simpan</button>
                            <a type="button" class="btn btn-danger" href="<?= base_url("/atlet") ?>">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>