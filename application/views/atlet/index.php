<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Atlet</h1>
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
                    <label><a type="button" href="<?= base_url("/atlet/tambahdata") ?>" class="btn btn-primary btn"><i class="fa fa-pencil-square" aria-hidden="true"></i> Tambah Data</a></label>
                    <label><button type="button" class="btn btn-success btn"> <i class="menu-icon fa fa-file"></i> Cetak</button></label>
                    <br>
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <br>
                                <th>Nomor Anggota</th>
                                <th>Nama Atlet</th>
                                <th>Jenis Kelamin</th>
                                <th>Cabang Olahraga</th>
                                <th>Prestasi</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>77atd8aydg8q8</td>
                                <td>Kristyan Michael Poillot</td>
                                <td>Laki - Laki</td>
                                <td>Basket</td>
                                <td>Juara Dunia</td>
                                </td>
                                <td class="text-center">
                                    <label><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#detail"><i class="fa fa-external-link" aria-hidden="true"></i>Detail</button></label>
                                    <label><button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete"> <i class="menu-icon fa fa-trash"></i>Delete</button></label>
                                </td>
                            </tr>
                            <tr>
                                <td>77atd8aydg8q8</td>
                                <td>Kristkgkfkhhh Poillot</td>
                                <td>Laki - Laki</td>
                                <td>Basket</td>
                                <td>Juara Dunia</td>
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
                                    <label for="nama">Nama Atlet</label>
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
                                    <label for="nama">Tahun Lahir</label>
                                    <input readonly type="text" class="form-control">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-5">
                                        <label for="prodi">Juara</label>
                                        <input readonly type="text" class="form-control">
                                    </div>
                                    <div class="form-group col-md-7">
                                        <label for="ket_juara">Keterangan Juara</label>
                                        <input readonly type="text" class="form-control" id="inputCity">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Tanggal Prestasi</label>
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
                <label><a type="button" class="btn btn-info btn-sm" href="<?= base_url('atlet/edit') ?>"><i class="menu-icon fa fa-edit"></i>Edit</a></label>
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