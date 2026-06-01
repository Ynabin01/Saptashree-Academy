<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left">
            <!-- <img src="{{ asset('assets/img/logo.jpg') }}" class="img img-thumbnails"  alt="User Image" style="width: 100%;height: 150px;"> -->
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{Request::is('admin/dashboard')?'active':''}} treeview"><a
                        href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
           
            <li class="{{Request::is('admin/navigation-list/Main')?'active':''}} treeview"><a
                        href="{{url('/admin/navigation-list/Main')}}"><i class="fa fa-list"></i>
                    <span>Main Navigation</span></a></li>
            <li class="{{Request::is('admin/navigation-list/Home')?'active':''}} treeview"><a
                        href="{{url('/admin/navigation-list/Home')}}"><i class="fa fa-list"></i>
                    <span>Home Navigation</span></a></li>
                    {{-- <li class="{{Request::is('admin/navigation-list/SNS')?'active':''}}  treeview"><a href="{{url('/admin/navigation-list/SNS')}}"><i class="fa fa-list"></i> <span>SNS Navigation</span></a> </li>
                    <li class="{{Request::is('admin/subscribers-list')?'active':''}} treeview"><a
                        href="{{url('/admin/subscribers-list')}}"><i class="fa fa-list"></i>
                    <span>Subscribers List</span></a></li> --}}
            <li class="{{Request::is('admin/global-setting')?'active':''}}  treeview"><a
                        href="{{url('/admin/global-setting')}}"><i class="fa fa-cog"></i> <span>Global Setup</span></a>
            </li>
            <!--------customized by MD------------>
             {{-- <li class="{{Request::is('admin/job-list')?'active':''}}  treeview"><a
                        href="{{url('/admin/job-list')}}"><i class="fa fa-cog"></i> <span>JOBS</span></a>
            </li> --}}
            <!----------end------------>
               <!--------customized by MD------------>
             <li class="{{Request::is('admin/applied-job-list')?'active':''}}  treeview"><a
                        href="{{url('/admin/applied-job-list')}}"><i class="fa fa-cog"></i> <span>Contact/Enquiry</span></a>
            </li>
            <!----------end------------>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

  <style>
    /* ===== Modern Sidebar Design ===== */

.main-sidebar{
    background: linear-gradient(180deg,#1e293b,#0f172a) !important;
    box-shadow: 4px 0 25px rgba(0,0,0,0.25);
}

.sidebar{
    padding-top: 15px;
}

.user-panel{
    border-bottom: 1px solid rgba(255,255,255,0.08);
    margin-bottom: 15px;
    padding-bottom: 15px;
}

/* Menu Items */
.sidebar-menu{
    padding: 10px;
}

.sidebar-menu > li{
    margin-bottom: 8px;
}

.sidebar-menu > li > a{
    border-radius: 12px;
    color: #d1d5db !important;
    padding: 14px 18px;
    font-size: 15px;
    font-weight: 500;
    transition: all .3s ease;
    display: flex;
    align-items: center;
    gap: 12px;
}

/* Icons */
.sidebar-menu > li > a i{
    width: 20px;
    text-align: center;
    font-size: 16px;
}

/* Hover Effect */
.sidebar-menu > li > a:hover{
    background: rgba(255,255,255,0.08) !important;
    color: #ffffff !important;
    transform: translateX(5px);
}

/* Active Menu */
.sidebar-menu > li.active > a{
    background: linear-gradient(135deg,#3b82f6,#2563eb) !important;
    color: #ffffff !important;
    box-shadow: 0 8px 20px rgba(37,99,235,0.35);
}

/* Remove AdminLTE default background */
.skin-blue .sidebar-menu > li.active > a,
.skin-black .sidebar-menu > li.active > a{
    border-left: none !important;
}

/* Smooth Animation */
.sidebar-menu li a{
    transition: all .3s ease-in-out;
}

/* Scrollbar */
.sidebar::-webkit-scrollbar{
    width: 6px;
}

.sidebar::-webkit-scrollbar-thumb{
    background: rgba(255,255,255,0.2);
    border-radius: 10px;
}

/* Sidebar Heading Style */
.sidebar-menu span{
    letter-spacing: .3px;
}

/* Dashboard Special Highlight */
.sidebar-menu > li:first-child > a{
    background: rgba(59,130,246,0.12);
}
  </style>