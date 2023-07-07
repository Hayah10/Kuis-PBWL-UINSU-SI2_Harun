@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>EDIT GOLONGAN</h3>

        <form action="{{ url('/golongan/' . $row->gol_id) }}" method="POST">
            @method('PATCH')
            @csrf 
            <div class="mb-2">
                <label>KODE</label>
                <input type="text" class="form-control" name="gol_kode" value="{{ $row->gol_kode }}"></>
            </div>
            <div class="mb-2">
                <label>NAMA GOLONGAN</label>
                <input type="text" class="form-control" name="gol_nama" value="{{ $row->gol_nama }}"></>
            </div>
            <div class="mb-2">
                <input type="submit" value="UPDATE">
            </div></form>
    </div>
@endsection