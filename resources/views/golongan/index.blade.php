@extends ('layouts.app')

@section('content')

<div class="container">

    <h3>DAFTAR GOLONGAN</h3>
<a href="{{ url('golongan/create') }}" class="link-warning">TAMBAH DATA GOLONGAN</a>
    <table class="table table-success table-striped">
        <tr>
            <th>ID</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </tr>
        @foreach($rows as $row)
        <tr>
            <td>{{ $row->gol_id }}</td>
            <td>{{ $row->gol_kode }}</td>
            <td>{{ $row->gol_nama }}</td>
            <td><a href="{{ url('golongan/' . $row->gol_id . '/edit') }}" class="link-success">Edit</a></td>
            <td><form action="{{ url('golongan/' . $row->gol_id) }}" method="POST">
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