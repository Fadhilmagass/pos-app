<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- Dropdown Profile --}}
        <li class="dropdown user user-menu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <img src="{{ url(auth()->user()->foto ?? '') }}" class="user-image img-profil" alt="user image">
                <span class="hidden-xs">{{ auth()->user()->name }}</span>
            </a>
            <ul class="dropdown-menu">
                {{-- User Image --}}
                <li class="user-header">
                    <img src="{{ url(auth()->user()->foto ?? '') }}" alt="user image" class="img-circle img-profil">
                    <p>
                        {{ auth()->user()->name }} - {{ auth()->user()->email }}
                    </p>
                </li>
                {{-- Menu Footer --}}
                <li class="user-footer">
                    <div class="pull-left float-left">
                        <a href="#" class="btn btn-default btn-flat">Profil</a>
                    </div>
                    <div class="pull-right float-right">
                        <a href="#" class="btn btn-default btn-flat"
                            onclick="$('#logout-form').submit()">Keluar</a>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<form action="{{ route('logout') }}" id="logout-form" style="display: none;" method="post">
    @csrf
</form>
