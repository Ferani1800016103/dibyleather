    <div class="navbar-bg"></div>
    <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
            </ul>
        </form>
        <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="<?= base_url(); ?>/assets/img/" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">Hi, Rizky</div>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="<?= base_url('/profile'); ?>" class="dropdown-item has-icon">
                        <i class="far fa-user"></i> Profile
                    </a>
                    <a href="<?= route_to('reset-password'); ?>" class="dropdown-item has-icon">
                        <i class="fas fa-cog"></i> Mengatur ulang kata sandi
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="<?= base_url('logout'); ?>" class="dropdown-item has-icon text-danger">
                        <i class="fas fa-sign-out-alt"></i> Keluar
                    </a>
                </div>
            </li>
        </ul>
    </nav>