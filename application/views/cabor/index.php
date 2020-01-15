<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Cabang Olahraga</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Menu</li>
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
                    <br>
                    <label><a type="button" href="<?= base_url("cabor/tambahdata") ?>" class="btn btn-primary btn"><i class="fa fa-pencil-square" aria-hidden="true"></i> Tambah Data</a></label>
                    <br>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <br>
                                <th>No</th>
                                <th>Id Cabor </th>
                                <th>Nama Cabor</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($cabor as $c) : ?>
                                <tr>
                                    <td class="text-center"><?= $i; ?></td>
                                    <td class="text-center"><?= $c['id_cabor'] ?></td>
                                    <td class="text-center"><?= $c['nama_cabor'] ?></td>
                                    <td class="text-center">
                                        <label><a type="button" class="btn btn-info btn-sm" href=" <?= base_url(''); ?>cabor/edit/<?= $c['id_cabor']; ?>"><i class="menu-icon fa fa-edit"></i>Edit</a></label>
                                        <label><button type="button" href=" <?= base_url(''); ?>cabor/hapus/<?= $c['id_cabor']; ?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"> <i class="menu-icon fa fa-trash"></i>Delete</button></label>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog modal-sm">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <p>Apakah anda yakin untuk menghapus data ini ?</p>
            </div>
            <div class="modal-footer">
                <label><a type="button" href=" <?= base_url(''); ?>cabor/hapus/<?= $c['id_cabor']; ?>" class=" btn btn-danger btn-sm ">Ya</a></label>
                <label><button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Batal</button></label>
            </div>
        </div>

    </div>
</div>