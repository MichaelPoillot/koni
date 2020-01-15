<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand">Koni Admin</a>
                <a class="navbar-brand hidden"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?= base_url("/admin") ?>"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">DATA</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="<?= base_url("/atlet") ?>"> <i class="menu-icon fa fa-user"></i>Atlet</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url("/wasit") ?>"> <i class="menu-icon fa fa-flag-checkered"></i>Wasit</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url("/juri") ?>"> <i class="menu-icon fa fa-user"></i>Juri</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url("/pelatih") ?>"> <i class="menu-icon fa fa-user"></i>Pelatih</a>
                    </li>
                    <li class="active">
                        <a href="<?= base_url("/cabor") ?>"> <i class="menu-icon fa fa-user"></i>Cabang Olahraga</a>
                    </li>
                    <h3 class="menu-title">User</h3><!-- /.menu-title -->
                    <li class="active">
                        <a href="<?= base_url("/user") ?>"> <i class="menu-icon fa fa-users"></i>User</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->