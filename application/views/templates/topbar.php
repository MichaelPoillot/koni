<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="<?= base_url('assets/images/profile/') . $user['image'] ?>" alt="User Avatar">
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#detailuser"><i class="fa fa-user"></i> My Profile</a>

                        <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                        <a class="nav-link" href="#" data-toggle="modal" data-target="#logout"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- /header -->

    <div class="modal fade" id="logout" role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>Apakah anda yakin untuk logout ?</p>
                </div>
                <div class="modal-footer">
                    <label><a type="button" href="<?= base_url('auth/logout'); ?>" class=" btn btn-danger btn-sm ">Ya</a></label>
                    <label><button type="button" class="btn btn-dark btn-sm" data-dismiss="modal">Batal</button></label>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="detailuser" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">My Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="content mt-3">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/images/profile/') .  $user['image']; ?>" class="card-img">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h6 class="card-title"><?= $user['name']; ?></h6>
                                        <p class="card-text"><?= $user['email']; ?></p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>