<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{!! asset('packages/bower/admin-lte/dist/img/user2-160x160.jpg') !!}"
                     class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ set_active(['dashboard_path']) }}">
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="{{ set_active(['cyberpunks.index', 'cyberpunks.edit']) }}">
                <a href="{!! route('cyberpunks.index') !!}">
                    <i class="fa fa-users"></i> <span>Cyberpunks</span>
                    <span class="label label-primary pull-right">{{ $totalCyberpunks }}</span>
                </a>
            </li>
            <li class="{{ set_active(['courses.index', 'courses.edit']) }}">
                <a href="{!! route('courses.index') !!}">
                    <i class="fa fa-book"></i>
                    <span> Courses</span>
                    <span class="label label-primary pull-right">{{ $totalCourses }}</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

