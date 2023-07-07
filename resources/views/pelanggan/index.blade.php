@extends ('layouts.app')

@section('content')

<div class="container">

    <h3>DAFTAR PELANGGAN</h3>
    <a href="{{ url('pelanggan/create') }}" class="link-warning">TAMBAH DATA PELANGGAN</a>
    <table class="table table-success table-striped">
        <tr>
            <th>NO</th>
            <th>ID GOLONGAN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO HP</th>
            <th>NO KTP</th>
            <th>NO SERI</th>
            <th>NO METERAN</th>
            <th>STATUS</th>
            <th>ID STAFF</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->pel_id }}</td>
            <td>{{ $row->pel_id_gol }}</td>
            <td>{{ $row->pel_nama }}</td>
            <td>{{ $row->pel_alamat }}</td>
            <td>{{ $row->pel_hp }}</td>
            <td>{{ $row->pel_ktp }}</td>
            <td>{{ $row->pel_seri }}</td>
            <td>{{ $row->pel_meteran }}</td>
            <td>{{ $row->pel_aktif }}</td>
            <td>{{ $row->pel_id_user }}</td>
            <td><a href="{{ url('pelanggan/' . $row->pel_id . '/edit') }}" class="link-success">Edit</a></td>
            <td><form action="{{ url('pelanggan/' . $row->pel_id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection