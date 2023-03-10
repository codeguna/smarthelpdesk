<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('admin.home') }}"
                class="nav-link {{ request()->is('admin/home') || request()->is('admin/home/*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                    <span class="right badge badge-danger">+1</span>
                </p>
            </a>
        </li>
        <li
            class="nav-item {{ request()->is('admin/roles/*') ||
            request()->is('admin/roles') ||
            request()->is('admin/permissions') ||
            request()->is('admin/permissions/*') ||
            request()->is('admin/users') ||
            request()->is('admin/users/*')
                ? 'menu-open'
                : '' }}">
            <a href="#"
                class="nav-link {{ request()->is('admin/roles/*') ||
                request()->is('admin/roles') ||
                request()->is('admin/permissions') ||
                request()->is('admin/permissions/*') ||
                request()->is('admin/users') ||
                request()->is('admin/users/*')
                    ? 'active'
                    : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Users Management
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.permissions.index') }}"
                        class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                        <i class="far fas fa-unlock-alt nav-icon"></i>
                        <p>Permissions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.roles.index') }}"
                        class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                        <i class="far fas fa-briefcase nav-icon"></i>
                        <p>Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.users.index') }}"
                        class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                        <i class="far fas fa-user nav-icon"></i>
                        <p>Users</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link"
                onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>
    </ul>
</nav>
