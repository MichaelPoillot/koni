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
                    <li class="active">Cabang Olahraga</li>
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
                    <form class="user" method="post" action="<?= base_url('cabor/insert') ?>">
                        <div class="form-group">
                            <label for="nama">Nama Cabang Olahraga</label>
                            <input type="text" class="form-control" id="name_cabor" name="nama_cabor">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" class="btn btn-danger" href="<?= base_url("/cabor") ?>">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>