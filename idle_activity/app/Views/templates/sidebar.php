 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                   
                </div>
                <div class="sidebar-brand-text mx-3">IDLE ACTIVITY</div>
            </a>

            <?php if (in_groups('idle')) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url('user'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Submit Activity -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url('user'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Submit Activity</span></a>
            </li>

            <!-- Nav Item - List Activity -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url('user'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>List Activity</span></a>
            </li>

            <!-- ============== ROLE ADMIN =================== -->
            <?php elseif (in_groups('admin')) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url('admin'); ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - List Users -->
            <li class="nav-item">
                <a class="nav-link" href="<?php base_url('admin/userList'); ?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>List User</span></a>
            </li>
            <?php endif; ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>