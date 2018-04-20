<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar users panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src={{asset('assets/admin/dist/img/user2-160x160.jpg')}} class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Manage Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" style="">
                    <li><a href={{asset('admin/users')}}><i class="fa fa-user"></i> <span>View Users</span></a></li>
                    <li><a href={{asset('admin/users/create')}}><i class="fa fa-user"></i> <span>Create User</span></a></li>
                </ul>
            </li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Manage Advertisements</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" style="">
                    <li><a href={{asset('admin/advertisements')}}><i class="fa fa-user"></i> <span>View Advertisements</span></a></li>
                    <li><a href={{asset('admin/advertisements/create')}}><i class="fa fa-user"></i> <span>Create Advertisement</span></a></li>
                </ul>
            </li>
            <li class="active treeview menu-open">
                <a href="#">
                    <i class="fa fa-puzzle-piece"></i> <span>Manage Characterisics</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu" style="">
                    <li><a href={{asset('admin/characteristics')}}><i class="fa fa-user"></i> <span>View Characterisics</span></a></li>
                    <li><a href={{asset('admin/characteristics/create')}}><i class="fa fa-user"></i> <span>Create Characterisic</span></a></li>
                </ul>
            </li>
            <li class="active">
                <a href="{{asset('admin/cities')}}">
                    <i class="fa  fa-location-arrow"></i> <span>Manage Cities</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
