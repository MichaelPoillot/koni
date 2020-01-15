<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Wasit</h1>
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
    <div class="animated fadeIn">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <br>
                    <label><a type="button" class="btn btn-primary btn" href="<?= base_url("/wasit/tambahdata") ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i> Tambah Data</a></label>
                    <label><button type="button" class="btn btn-success btn"> <i class="menu-icon fa fa-file"></i> Cetak</button></label>
                    <br>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <br>
                                <th>Nomor Anggota</th>
                                <th>Nama Wasit</th>
                                <th>Jenis Kelamin</th>
                                <th>Cabang Olahraga</th>
                                <th>Lesensi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">77atd8aydg8q8</td>
                                <td class="text-center">Kristyan Michael Poillot</td>
                                <td class="text-center">Laki - Laki</td>
                                <td class="text-center">Basket</td>
                                <td class="text-center">wasit</td>
                                </td>
                                <td class="text-center">
                                    <label><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail"><i class="fa fa-external-link" aria-hidden="true"></i>Detail</button></label>
                                    <label><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"> <i class="menu-icon fa fa-trash"></i>Delete</button></label>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!--modal-->
<div class="modal fade" id="detail" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h4 class="modal-title">Data <? ?></h4>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form name="form">
                                <div class="form-group">
                                    <label for="nama">Nomor Anggota</label>
                                    <input type="text" class="form-control" readonly>
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama Wasit</label>
                                    <input readonly type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="prodi">Jenis Kelamin</label>
                                    <input readonly type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Cabang Olahraga</label>
                                    <input readonly type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="nama">Lesensi</label>
                                    <input readonly type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Status</label>
                                    <input readonly type="text" class="form-control">
                                </div>
                                <div class="text-center">
                                    <img src="<?= base_url('assets/images/profile/') . $user['image'] ?>" class="rounded" alt="">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <label><a type="button" class="btn btn-info btn-sm" href="<?= base_url("/wasit/edit") ?>"><i class="menu-icon fa fa-edit"></i>Edit</a></label>
                <label><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"><i class="menu-icon fa fa-trash"></i>Delete</button></label>
                <label><button type="button" class="btn btn-dark btn-sm" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i>Batal</button></label>
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
                <label><a type="button" href="#" class=" btn btn-danger btn-sm ">Ya</a></label>
                <label><button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Batal</button></label>
            </div>
        </div>

    </div>
</div>