<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-tshirt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Clothing</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('dashboard') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kategori
            </div>

            <!-- Nav Item - T-Shirt -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/tshirt') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>T-Shirt</span></a>
            </li>

            <!-- Nav Item - Crewneck -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/crewneck') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Crewneck</span></a>
            </li>

            <!-- Nav Item - Hoodie -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('kategori/hoodie') ?>">
                    <i class="fas fa-tshirt"></i>
                    <span>Hoodie</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h1 class="h3 mb-2 text-gray-800">
                        <?= $judul; ?>
                    </h1>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="navbar">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <?php
                                    $keranjang = 'Keranjang Belanja : ' . $this->cart->total_items() . ' items'
                                        ?>
                                    <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                                </li>
                            </ul>
                            <div class="topbar-divider d-none d-sm-block"></div>

                            <ul class="na navbar-nav navbar-right">
                                <?php if ($this->session->userdata('username')) { ?>
                                    <li>
                                        <div>Selamat Datang
                                            <?php echo $this->session->userdata('username') ?>
                                        </div>
                                    </li>
                                    <li class="ml-2">
                                        <?php echo anchor('auth/logout', 'Logout') ?>
                                    </li>
                                <?php } else { ?>
                                    <li>
                                        <?php echo anchor('auth/login', 'Login') ?>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </ul>

                </nav>
                <!-- End of Topbar -->