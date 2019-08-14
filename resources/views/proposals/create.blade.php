@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="card-body">
            <h3 class="text-center">Buat Proposal</h3>
            <br/>
            <br/>
            {{-- Form Validasi --}}
            {!! Form::open(['action' => 'ProposalController@store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('produk', 'Produk')}}
                    {!! Form::select('produk', ['Kendaraan' => 'Kendaraan', 'Properti' => 'Properti', 'Usaha' => 'Usaha'], 'Usaha',  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{Form::label('keterangan', 'Deskripsi')}}
                    {!! Form::textarea('keterangan', '', ['class' => 'form-control' , 'placeholder' => 'Deskripsikan kebutuhan anda']) !!}
                </div>
                <div class="form-group">
                    {{Form::label('nominal', 'Nominal dalam Rp.')}}
                    {!! Form::number('nominal', '', ['class' => 'form-control', 'placeholder' => '50.000.000']) !!}
                </div>
                {!! Form::submit('Buat', ['class' => 'btn btn-primary float-md-right float-sm-right']) !!}
            {!! Form::close() !!}
        </div>          
    </main>
@endsection