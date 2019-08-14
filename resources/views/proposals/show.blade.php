@extends('layouts.app')
@section('content')
<main class="container">
    <div>
        <h1 class="text-primary">{{$proposal->produk}}</h1>
        <p>{{$proposal->keterangan}}</p>
    </div>
    <div>
        <h3>Rp. {{number_format($proposal->nominal, 2)}}</h3>
    </div>
    <hr>
        {!! Form::open(['action' => ['ProposalController@destroy', $proposal->id] , 'method' => 'POST']) !!}
        {!! Form::hidden('_method', 'DELETE') !!}
        {!! Form::submit('Hapus', ['class' => 'btn btn-danger float-sm-right px-3 mx-1']) !!}
        {!! Form::close() !!}
        <a href="/proposal/{{$proposal->id}}/edit" class="btn btn-primary float-sm-right px-4 mx-1">Ubah</a>
        {{-- {!! Form::open(['action' => ['ProposalController@setujui', $proposal->id] , 'method' => 'POST']) !!}
        {!! Form::hidden('_method', 'PUT') !!}
        {!! Form::submit('Setujui', ['class' => 'btn btn-success float-sm-right px-3 mx-1']) !!} --}}
        {!! Form::close() !!}
    <small>Dibuat tanggal {{$proposal->created_at}} oleh </small>        
</main>
@endsection