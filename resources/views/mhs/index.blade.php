 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}" defer></script>
    
 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h3>biodata</h3>
        </div>
        <div class="col-sm-2">
            <a href="{{route('mhs.create')}}" class="btn btn-sm btn-succes">create row</a>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{"$message"}}</p>
    </div>
    @endif

    <table class="table table-hover table-sm">
        <tr>
            <th width="50px">
            <b>no.</b>
            </th>
            <th width="300px">
                <b>Nama Mahasiswa</b>
            </th>
            <th>gender</th>
            <th>usia</th>
            <th>alamat</th>
            <th width="100px">Action</th>
        </tr>


        @foreach ($mahasiswas as $mhs)
        <tr>
            <td><b>{{++$i}}.</b></td>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->gender}}</td>
            <td>{{$mhs->usia}}</td>
            <td>{{$mhs->alamat}}</td>
            <td>
                <form action="{{ route('mhs.destroy', $mhs->id )}}" method="post">

                    <a href="{{ route('mhs.show', $mhs->id )}}" class="btn btn-sm btn-primary">Show</a>
                    <a href="{{ route('mhs.edit', $mhs->id )}}" class="btn btn-sm btn-warning">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection
    {!! $mahasiswas->links() !!}
</div>