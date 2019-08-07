<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
<a class="navbar-brand" href="#">{{config('app.name', 'Tijaroh')}}</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Beranda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/bantuan">Bantuan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/tentang">Tentang Kami</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/proposal">Proposal</a>
        </li>
    </ul>
    <ul class="nav justify-content-end nav-fill">
        <li class="nav-item mx-1">
            <a type="button" class="btn btn-success nav-link" href="/masuk">Masuk</a>
        </li>
        <li class="nav-item mx-1">
            <a type="button" class="btn btn-success nav-link" href="/daftar">Daftar</a>
        </li>
    </ul>
</div>
</nav>
