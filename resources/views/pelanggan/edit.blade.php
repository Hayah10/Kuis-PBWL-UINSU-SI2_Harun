@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>EDIT PELANGGAN</h3>

        <form action="{{ url('/pelanggan') }}" method="POST">
            @csrf 
            <div class="mb-2">
                <label>ID GOLONGAN</label>
                <select class="form-control select2" name="pel_id_gol" id="pel_id_gol" required>
                @foreach ($gol as $item)
                <option value="{{ $item->gol_id }}">{{ $item->gol_nama }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-2">
                <label>KODE</label>
                <input type="text" class="form-control" name="pel_no" value="{{ $row->pel_no }}"></>
            </div> 
            <div class="mb-2">
                <label>NAMA PELANGGAN</label>
                <input type="text" class="form-control" name="pel_nama" value="{{ $row->pel_nama }}"></>
            </div>
            <div class="mb-2">
                <label>ALAMAT PELANGGAN</label>
                <textarea name="pel_alamat" id="" class="form-control" cols="30" rows="10" required>{{ $row->pel_alamat }}</textarea></>
            </div>
            <div class="mb-2">
                <label>NO HP</label>
                <input type="text" class="form-control" name="pel_hp" value="{{ $row->pel_hp }}"></>
            </div>
            <div class="mb-2">
                <label>NO KTP</label>
                <input type="text" class="form-control" name="pel_ktp" value="{{ $row->pel_ktp }}"></>
            </div>
            <div class="mb-2">
                <label>NO SERI</label>
                <input type="text" class="form-control" name="pel_seri" value="{{ $row->pel_seri }}"></>
            </div>
            <div class="mb-2">
                <label>NO METERAN</label>
                <input type="text" class="form-control" name="pel_meteran" value="{{ $row->pel_meteran }}"></>
            </div>
            <div class="mb-2">
                <label>STATUS</label>
                <select id="pel_aktif" class="form-control" name="pel_aktif" required>
                <option value="Y">AKTIF</option>
                <option value="N">TIDAK AKTIF</option></select>
            </div>
            <div class="mb-2">
            <label>ID STAFF</label>
            <select class="form-control select2" name="pel_id_user" id="pel_id_user" required>
                @foreach ($use as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
                </select>
            </div>
            <div class="mb-2">
                <input type="submit" value="UPDATE">
            </div></form>
    </div>
@endsection