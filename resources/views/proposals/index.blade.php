@extends('layouts.app')
@section('content')
    <main class="container">
        <h3>Proposal</h3>
        <a href="/proposal/create" class="btn btn-primary mb-2">Buat Proposal</a>
        @if (count($proposal) > 0)
            @foreach ($proposal as $prop)
                <div class="card card-body bg-light mb-2">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 d-flex justify-content-center">
                            <h4 class="d-flex align-items-center">{{$prop->status}}</h4>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/proposal/{{$prop->id}}">{{$prop->keterangan}}</a></h3>
                            <h5>Rp. {{number_format($prop->nominal, 2)}}</h5>
                            <small>Dibuat {{$prop->created_at}}</small>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $proposal->links() }}
        @else
            <p>Tidak ada proposal</p>
        @endif
    </main>
@endsection