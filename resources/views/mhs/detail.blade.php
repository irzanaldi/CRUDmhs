<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
    
<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="cols-md-12">
            <h3>Detail Mahasiswa</h3>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>NAMA :</strong> {{$mahasiswas->nama}}
            </div>
        </div>
    </div>


      <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong> {{$mahasiswas->gender}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Usia :</strong> {{$mahasiswas->usia}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="cols-md-12">
            <div class="form-group">
                <strong>Alamat :</strong> {{$mahasiswas->alamat}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
        </div>
    </div>


    @endsection
</div>