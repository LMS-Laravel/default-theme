<!-- Header -->
<header class="navbar navbar-default" style="text-align: center;">
    <!-- Left Header Navigation -->
    <ul class="nav navbar-nav-custom">
        <!-- Main Sidebar Toggle Button -->
    </ul>
    <!-- END Left Header Navigation -->

     <ul class="nav navbar-nav">
        <li>
            <h3>Estas viendo un perfil publico de {{ $data['name'] }}</h3>
        </li>
     </ul>

    <!-- Right Header Navigation -->
    <ul class="nav navbar-nav-custom pull-right">

        <li>
            <a href="{{ route('auth.loginGet') }}">
                <i class="fa fa-key text-success"></i> Ingresar
            </a>
        </li>
    </ul>
    <!-- END Right Header Navigation -->
</header>
<!-- END Header -->