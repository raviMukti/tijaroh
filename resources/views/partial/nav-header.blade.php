<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" style="color:#fff;">{{config('app.name', 'Tijaroh')}}</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/bantuan">Bantuan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tentang">Tentang Kami</a>
        </li>
        @if (!Auth::guest())
        <li class="nav-item">
            <a class="nav-link" href="/proposal">Proposal</a>
        </li>
        @endif
    </ul>
    <ul class="nav justify-content-end nav-fill">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <li class="nav-item mx-1">
            <a type="button" class="btn btn-success nav-link" href="{{ route('login') }}">Masuk</a>
        </li>
        <li class="nav-item mx-1">
            <a type="button" class="btn btn-success nav-link" href="{{ route('register') }}">Daftar</a>
        </li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        @endif
    </ul>
</div>
</nav>
