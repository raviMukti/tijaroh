@extends('layouts.app')
@section('content')
    <main class="container">
        <div class="card-body">
            <h3 class="text-center">Ubah Proposal</h3>
            <br/>
            <br/>
            {{-- Form Validasi --}}
            {!! Form::open(['action' => ['ProposalController@update', $proposal->id], 'method' => 'POST']) !!}
                <div class="form-group">
                    {{Form::label('produk', 'Produk')}}
                    {!! Form::select('produk', ['Kendaraan' => 'Kendaraan', 'Properti' => 'Properti', 'Usaha' => 'Usaha'], $proposal->produk,  ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {{Form::label('keterangan', 'Deskripsi')}}
                    {!! Form::textarea('keterangan', $proposal->keterangan, ['class' => 'form-control' , 'placeholder' => 'Deskripsikan kebutuhan anda']) !!}
                </div>
                <div class="form-group">
                    {{Form::label('nominal', 'Nominal dalam Rp.')}}
                    {!! Form::number('nominal', $proposal->nominal, ['class' => 'form-control', 'placeholder' => '50.000.000']) !!}
                </div>
                {!! Form::hidden('_method', 'PUT') !!}
                {!! Form::submit('Ubah', ['class' => 'btn btn-primary float-md-right float-sm-right']) !!}
            {!! Form::close() !!}
        </div>          
    </main>
@endsection