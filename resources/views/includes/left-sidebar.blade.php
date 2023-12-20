<!-- Brand Logo -->
<a href="index3.html" class="brand-link">
    <img src="{{asset('dist/img/avatar5.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light">{{config('app.name')}}</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            {{--<img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">--}}
        </div>
        <div class="info">
            <a href="#" class="d-block"></a>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item ">
                <a href="{{ url('/home') }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>

            <!--users  start-->
            <li class="nav-item has-treeview {{ isActive(['admin/users/create']) }}">
                <a href="{{ route('users.create') }}" class="nav-link {{ isActive(['admin/users/create']) }}">
                    <i class="fas fa-user-plus"></i>
                    <p>Add Users</p>
                </a>
            </li>
            <li class="nav-item has-treeview {{ isActive(['admin/users']) }}">
                <a href="{{ route('users.index') }}" class="nav-link {{ isActive(['admin/users']) }}">
                    <i class="fas fa-users"></i>
                   <p>All Users</p>
                </a>
            </li>
            
            <!--users end-->
            <!--users  start-->
            <li class="nav-item has-treeview {{ isActive(['admin/settings*']) }}">
                <a href="{{ route('settings.index') }}" class="nav-link {{ isActive(['admin/settings*']) }}">
                    <i class="nav-icon fas fa-cog"></i>
                    <p>
                        Settings
                    </p>
                </a>
            </li>
            <!--users end-->
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
