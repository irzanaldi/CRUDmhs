 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
    
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3>Edit Data</h3>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
   <strong> Terjadi Kesalahan input </strong><br>
   <ul>
    <ul>
        @foreach ($errors as $eror)
            <li>{{$error}}</li>
        @endforeach
    </ul>
   </ul>
</div>
@endif

<form action="{{route('mhs.update',$mahasiswas->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-sm-8">
            <strong>Nama :</strong>
            <input type="text" name="nama" class="form-control" placeholder="nama">
        </div>

        <div class="col-sm-8">
            <strong>Gender :</strong>
            <input type="text" name="gender" class="form-control" placeholder="gender">
        </div>

        <div class="col-sm-8">
            <strong>Usia :</strong>
            <input type="text" name="usia" class="form-control" placeholder="usia">
        </div>

        <div class="col-sm-8">
            <strong>Alamat :</strong>
            <input type="text" name="alamat" class="form-control" placeholder="alamat">
        </div>

        <div class="col-sm-12">
            <a href="{{route('mhs.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
    