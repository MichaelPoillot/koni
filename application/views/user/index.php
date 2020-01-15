<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>User</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- content -->
<div class="content mt-3">
    <?= $this->session->flashdata('message'); ?>
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <label><a type="button" class="btn btn-primary btn" href="<?= base_url("/user/tambahdata") ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i> Tambah Data</a></label>
                    <br>
                    <hr>
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="<?= base_url('assets/images/profile/') .  $user['image']; ?>" class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h6 class="card-title"><?= $user['name']; ?></h6>
                                    <p class="card-text">
                                        <?= $user['email']; ?>
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Last Login <?= date('h:i:sa', $user['date']); ?> </small>
                                        <br>
                                        <small class="text-muted">date created <?= date('d F Y', $user['date']); ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .content -->