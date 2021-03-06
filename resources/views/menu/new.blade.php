@extends('base')
@section('site-content')
    <h1 class="h3 mb-2 text-gray-800">Tambah Paket</h1>
    <p class="mb-4">Form untuk menambahkan paket laundry baru</p>

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

    <form action="{{ url('/paket/new', []) }}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="">Nama Paket</label>
            <input type="text" name="nama" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Harga Paket</label>
            <input type="number" name="harga" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
            <label for="">Jenis Paket</label>
            <select name="jenis_menu" id="" class="form-control">
                @foreach ($jenis_menus as $jenis)
                    <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Tambahkan" class="btn btn-primary">
    </form>
@endsection