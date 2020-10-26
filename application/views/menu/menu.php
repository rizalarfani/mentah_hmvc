<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                <div class="thumb"><img src="<?php echo $this->foto;?>" alt="Foto User" class="img-circle"/></div>
                <div class="info"><p><?php echo $this->username; ?></p>
                    <ul class="list-inline list-unstyled">
                        <li><a href="<?php echo base_url('Belakang/profil/edit');?>" data-hover="tooltip" title="Profile"><i class="fa fa-user"></i></a></li>
                        <li><a href="<?php echo $this->logout;?>" data-hover="tooltip" title="Logout"><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </li>
            <li id="dashboard"><a href="<?php echo base_url('Belakang');?>"><i class="fa fa-tachometer fa-fw">
                <div class="icon-bg bg-orange"></div>
                </i><span class="menu-title">Dashboard</span></a>
            </li>
            <li id="akun"><a href="javascript:void(0);"><i class="fa fa-user fa-fw">
                <div class="icon-bg bg-green"></div>
                </i><span class="menu-title">Akun</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li id="profil"><a href="<?php echo base_url('Belakang/profil/edit');?>"><i class="fa fa-user"></i><span class="submenu-title">Profil</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>