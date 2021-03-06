@extends('base')
@section('site-content')
    <h1 class="h3 mb-2 text-gray-800">Ubah Data Mesin</h1>
    <p class="mb-4">Form untuk mengubah data mesin</p>

    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (Session::has('access_err'))
        <div class="alert alert-danger mb-4" role="alert">
            <strong>{{ Session::get('access_err') }}</strong>
        </div>
    @endif

    <form action="{{ url('/mesin/update', $meja->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="">Nomer</label>
            <input type="number" name="nomer" id="" class="form-control" value="{{ $meja->id }}" placeholder="" aria-describedby="helpId">
        </div>
        <input type="submit" value="Tambahkan" class="btn btn-primary">
    </form>
@endsection