<div class="navbar-default sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
        <li class="sidebar-search">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
            <!-- /input-group -->
        </li>
        <li>
            <a href="{{ route('admin.index') }}"><i class="fa fa-home fa-fw"></i> Trang Chủ</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-align-right fa-fw"></i> Post<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li>
                    <a href="{{ route('info.index') }}">Danh sách </a>
                </li>
                <li>
                    <a href="{{ route('info.create') }}">Tạo </a>
                </li>
            </ul>
            <!-- /.nav-second-level -->
        </li>
        
    </ul>
</div>
<!-- /.sidebar-collapse -->
</div>