@extends('layout.app')
@section('main')
<body>
    <main>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-left">
                    <h1>Properti</h1>
                    <p>Wujudkan properti impian anda</p>
                    <p><a class="btn btn-lg btn-primary" href="/daftar" role="button">Daftar Sekarang</a></p>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption">
                    <h1>Bangun bisnis</h1>
                    <p>Bantuan pendanaan permodalan dengan berlandaskan keuangan syariah</p>
                    <p><a class="btn btn-lg btn-primary" href="/bantuan" role="button">Pelajari Lebih</a></p>
                    </div>
                </div>
                </div>
                <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="container">
                    <div class="carousel-caption text-right">
                    <h1>Hapuskan Riba</h1>
                    <p>Niatkan karena Allah, sampaikan walaupun satu ayat saja</p>
                    <p><a class="btn btn-lg btn-primary" href="/masuk" role="button">Masuk</a></p>
                    </div>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        <!-- START THE FEATURETTES -->

        <hr id="featurette-first" class="featurette-divider">
        <div class="row featurette p-3">
        <div class="col-md-7">
            <h2 class="featurette-heading">Apa itu <span class="text-muted">Tijaroh?</span></h2>
            <p class="lead">Tijaroh merupakan platform kerjasama keuangan berbasis syariah yang mempertemukan pihak pemberi dana (Investor) baik BMT ataupun individu dengan pihak peminjam (mitra).</p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette p-3">
        <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading"><span class="text-muted">QS Al-Hasyr [59]:7</span></h2>
            <p class="lead"><q>...supaya harta itu jangan beredar di antara orang-orang Kaya saja di antara kamu.</q>
            </p>
        </div>
        <div class="col-md-5 order-md-1">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette p-3">
        <div class="col-md-7">
            <h2 class="featurette-heading"><span class="text-muted">QS Al-Baqarah 275</span></h2>
            <p class="lead"><q>...Keadaan mereka yang demikian itu, adalah disebabkan mereka berkata (berpendapat), sesungguhnya jual beli itu sama dengan riba, padahal Allah telah menghalalkan jual beli dan mengharamkan riba...</q></p>
        </div>
        <div class="col-md-5">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->
    </main>
</body>
@endsection