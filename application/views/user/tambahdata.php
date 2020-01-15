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
                    <li class="active">User</li>
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
                    <form class="user" method="post" action="<?= base_url('user/tambahdata') ?>" enctype="multipart/form-data">
                        <div class=" form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name"> <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Email</label>
                            <input type="email" class="form-control" id="email" name="email"><?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Password</label>
                            <input type="text" class="form-control" id="password" name="password"><?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="fotoatlet">Foto Atlet</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" class="btn btn-danger" href="<?= base_url("/user") ?>">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>