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
                <a class="nav-link" href="/user">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Submit Activity -->
            <li class="nav-item">
                <a class="nav-link" href="/user/submit">
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
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - List Users -->
            <li class="nav-item">
               <!--  <a class="nav-link" href="<?php base_url('admin/userList'); ?>"> -->
                <a class="nav-link" href="/admin/userList">
                    <i class="fas fa-fw fa-table"></i>
                    <span>List User</span></a>
            </li>

            <!-- ============== ROLE HR MANAGER =================== -->
            <?php elseif (in_groups('hr')) : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/hr">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Approved Activity -->
            <li class="nav-item">
                <a class="nav-link" href="/hr/approved">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Approved Activity</span></a>
            </li>

            <!-- ============== ROLE MANAGER =================== -->
            <?php else : ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/manager">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Nav Item - Approved Activity -->
            <li class="nav-item">
                <a class="nav-link" href="/manager/list-approval">
                    <i class="fas fa-fw fa-table"></i>
                    <span>List Approval Activity</span></a>
            </li>
            <?php endif; ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>