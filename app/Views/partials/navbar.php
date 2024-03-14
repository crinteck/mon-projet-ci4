<nav class="ui top fixed inverted menu">
    <div class="left menu">
        <a href="#" class="sidebar-menu-toggler item" data-target="#sidebar">
            <i class="sidebar icon"></i>
        </a>
        <a href="#" class="header item">
            Semantic UI
        </a>
    </div>

    <div class="right menu">
        <a href="#" class="item">
            <i class="bell icon"></i>
        </a>
        <div class="ui dropdown item">
        <img class="ui avatar image" src="<?= base_url('uploads/'.session('user.image')) ?>"/>
            <?= session('user.first_name').' '.session('user.last_name') ?>
            <div class="menu">
                <a href="<?= base_url('/users/profil') ?>" class="item">
                    <i class="info circle icon"></i> Profile</a>
                <a href="#" class="item">
                    <i class="wrench icon"></i>
                    Settings</a>
                <a href="<?= base_url('/auth/logout') ?>" class="item">
                    <i class="sign-out icon"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>
</nav>