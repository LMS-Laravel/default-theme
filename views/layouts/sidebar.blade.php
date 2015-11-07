<!-- Main Sidebar -->
<div id="sidebar">
    <!-- Wrapper for scrolling functionality -->
    <div class="sidebar-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Brand -->
            <a href="{{ route('dashboard.learning') }}" class="sidebar-brand">
                <i class="gi gi-flash"></i><strong>{{ $data['name'] }}</strong> <span style="font-size: 10px;">beta</span>
            </a>
            <!-- END Brand -->

            <!-- User Info -->
            <div class="sidebar-section sidebar-user clearfix">
                <div class="sidebar-user-avatar">
                    <a href="{{ route('learning.user.profile', \Auth::user()->slug) }}">
                        <img src="{{ Gravatar::src(Auth::user()->email) }}" alt="avatar">
                    </a>
                </div>
                <div class="sidebar-user-name">{{{ Auth::user()->full_name }}}</div>
                <div class="sidebar-user-links">
                    <a href="{{ route('learning.user.profile', \Auth::user()->slug) }}" data-toggle="tooltip" data-placement="bottom" title="@trans('dashboard::menus.sidebar.profile')"><i class="gi gi-user"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="@trans('dashboard::menus.sidebar.inbox')"><i class="gi gi-envelope"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="@trans('dashboard::menus.sidebar.exit')"><i class="gi gi-exit"></i></a>
                </div>
            </div>
            <!-- END User Info -->

            <!-- Sidebar Navigation -->
            <ul class="sidebar-nav">
                <li>
                    <a href="@route('learning.course.index')"><i class="gi gi-stopwatch sidebar-nav-icon"></i>@trans('dashboard::menus.sidebar.courses')</a>
                </li>
                <li>
                    <a href="#"><i class="gi gi-share_alt sidebar-nav-icon"></i>@trans('dashboard::menus.sidebar.social')</a>
                </li>
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix">
                    <a href="javascript:void(0)" data-toggle="tooltip" title="@trans('dashboard::menus.sidebar.submenu.ranking.help')"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">@trans('dashboard::menus.sidebar.submenu.ranking.title')</span>
                </li>
                <li>
                    <a href="@route('learning.user.ranking.global')"><i class="gi gi-cup sidebar-nav-icon"></i>@trans('dashboard::menus.sidebar.submenu.ranking.global')</a>
                </li>
                <li>
                    <a href="#"><i class="gi gi-cup sidebar-nav-icon"></i>{{{ Auth::user()->country->short_name }}}</a>
                </li>

                @if(true)
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix">
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Menu que agrupa las tareas del administrador"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">Administrador</span>
                </li>

                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-parents sidebar-nav-icon"></i>Usuarios</a>
                    <ul>
                        <li>
                            <a href="#"><i class="gi gi-parents sidebar-nav-icon"></i>Listar</a>
                            <a href="#"><i class="gi gi-user_add sidebar-nav-icon"></i>Nuevo</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="gi gi-pie_chart sidebar-nav-icon"></i>Estadisticas</a>
                </li>
                <li>
                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator"></i><i class="gi gi-book sidebar-nav-icon"></i>Cursos</a>
                    <ul>
                        <li>
                            <a href="#"><i class="gi gi-book sidebar-nav-icon"></i>Listar</a>
                            <a href="#"><i class="gi gi-plus sidebar-nav-icon"></i>Nuevo</a>
                        </li>
                    </ul>
                </li>
                @endif()

                @if(true)
                <li class="sidebar-header">
                    <span class="sidebar-header-options clearfix">
                    <a href="javascript:void(0)" data-toggle="tooltip" title="Menu que agrupa las tareas del profesor"><i class="gi gi-lightbulb"></i></a></span>
                    <span class="sidebar-header-title">Profesor</span>
                </li>
                <a href="#"><i class="gi gi-book sidebar-nav-icon"></i>Cursos</a>
                <li>
                    <a href="#"><i class="gi gi-edit sidebar-nav-icon"></i>Examenes</a>
                </li>
                <li>
                    <a href="#"><i class="gi gi-edit sidebar-nav-icon"></i>Quizzes</a>
                </li>
                @endif
            </ul>
            <!-- END Sidebar Navigation -->
        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>
<!-- END Main Sidebar -->
