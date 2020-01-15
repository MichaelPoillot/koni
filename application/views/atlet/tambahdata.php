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
                                <option value="laki-laki">Laki - Laki</option>
                                <option value="laki-laki">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="cabor"> Cabang Olahraga</label>
                            <select id="status" class="form-control">
                                <option selected>Choose...</option>
                                <option value="sepakbola">Sepak Bola</option>
                                <option>Basket</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="nama">Tahun Lahir</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="juara">Juara</label>
                                <select id="juara" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="jauara1">Juara 1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="ket_juara">Keterangan Juara</label>
                                <input type="text" class="form-control" id="inputCity">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tgljuara">tanggal juara</label>
                                <input type="date" class="form-control" id="inputZip">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fotoatlet">Foto Atlet</label>
                            <input type="file" class="form-control-file" id="image">
                        </div>
                        <br>
                        <hr>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" class="btn btn-danger" href="<?= base_url("/atlet") ?>">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>