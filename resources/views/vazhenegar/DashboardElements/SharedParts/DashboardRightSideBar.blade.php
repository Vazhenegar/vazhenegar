<!-- right side column. contains the logo and sidebar -->

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset('images/site/user.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{DashboardCurrentUser::$UserFullName}}</p>
                <a id="UserMode"><i class="fa fa-circle text-success"></i>{{DashboardCurrentUser::$CurrentUser->mode(DashboardCurrentUser::$UserMode)}}
                </a>
            </div>
        </div>

    {{--========================================================================--}}

    <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li>
                <a href="{{route('dashboard')}}">
                    <i class="fa fa-home"></i>
                    <span> داشبورد</span>
                </a>
            </li>

            @foreach(DashboardCurrentUser::$Menus as $item)
                {{--========================================================================--}}
                <li class="treeview active">
                    <a id="{{$item->MainMenu}}" href="{{$item->Url}}">
                        <i class="{{$item->Icon?$item->Icon :'fa fa-circle-o'}}"></i>
                        <span>{{$item->MainMenu}}</span>
                        @if ($item->sub_menus->count())
                            <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                        @endif
                    </a>
                    @if ($item->sub_menus->count())
                        <ul class="treeview-menu">
                            @foreach ($item->sub_menus as $subitem)
                                <li><a id="{{$subitem->SubMenu}}" href="{{route($subitem->Url,[$subitem->role_id, DashboardCurrentUser::$id, $subitem->StatusId])}}" onclick="{{session(['StatusId'=>$subitem->StatusId])}}">
                                        <i class="{{$subitem->Icon?$subitem->Icon :'fa fa-circle-o'}}"></i>
                                        <span>{{$subitem->SubMenu}}</span>
                                        <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                          <small id="blue" class="label pull-left bg-blue"></small>
                                          <small id="white" class="label pull-left bg-white"></small>
                                        </span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
                {{--========================================================================--}}
            @endforeach
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
