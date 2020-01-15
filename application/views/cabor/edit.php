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
                    <li class="active">Juri</li>
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
                    <form class="user" method="post" action="<?= base_url('cabor/ubah') ?>">
                        <input type="hidden" name="id" value="<?= $cabor['id_cabor']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Anggota</label>
                            <input type="text" id="name_cabor" name="nama_cabor" class="form-control" value="<?= $cabor['nama_cabor']; ?>">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">simpan</button>
                        <a type="button" class="btn btn-danger" href="<?= base_url("/cabor") ?>">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>