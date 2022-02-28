@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left mb-4">
                <a class="btn btn-secondary" href="{{ route('dashboard') }}"> Back</a>
            </div>
        </div>
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>CRUD LARAVEL 8</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('sisw.create') }}"> Input Siswa</a>
            </div>
        </div>
    </div>

    
    @if ($message = Session::get('succes'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>NIS</th>
            <th width="280px" class="text-center">Nama Siswa</th>
            <th width="280px" class="text-center">Alamat</th>
            <th width="280px" class="text-center">Tanggal Lahir</th>
            <th width="280px" class="text-center">Wali Siswa</th>
            <th width="280px" class="text-center">Action</th>
        </tr>
        @foreach ($sisw as $siswa)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td>{{ $siswa->NIS }}</td>
                <td>{{ $siswa->nama }}</td>
                <td>{{ $siswa->alamat }}</td>
                <td>{{ $siswa->tgl_lahir }}</td>
                <td>{{ $siswa->wali_siswa }}</td>
                <td class="text-center">
                    <form action="{{ route('sisw.destroy', $siswa->id) }}" method="POST">

                        <a class="btn btn-info btn-sm" href="{{ route('sisw.show', $siswa->id) }}">Show</a>

                        <a class="btn btn-primary btn-sm" href="{{ route('sisw.edit', $siswa->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $sisw->links() !!}
@endsection
