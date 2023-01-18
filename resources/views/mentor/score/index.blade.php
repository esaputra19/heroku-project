@extends('layouts.app')

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('mentor.score.create')}}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <h4>Data Nilai Siswa</h4>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Nilai Tugas</th>
                                <th scope="col">UTS</th>
                                <th scope="col">UAS</th>
                                <th scope="col">Total Kehadiran</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($scores as $key)
                                <tr>
                                    <td>{{$key->siswa}}</td>
                                    <td>{{$key->harian}}</td>
                                    <td>{{$key->uts}}</td>
                                    <td>{{$key->uas}}</td>
                                    <td>{{$key->kehadiran}}</td>
                                    <td class="text-center">
                                        <form method="GET" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('score.destroy', $key->id) }}" method="GET">
                                            {{-- <a href="{{ route('mentor.score.edit', $key->id) }}" class="btn btn-sm btn-primary">EDIT</a> --}}
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                              {{-- @forelse ($scores as $key)
                                <tr>
                                    <td>{{$key->siswa}}</td>
                                    <td>{{$key->harian}}</td>
                                    <td>{{$key->uts}}</td>
                                    <td>{{$key->uas}}</td>
                                    <td>{{$key->kehadiran}}</td>
                                    <td class="text-center">
                                        <form method="GET" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destroy', $key->id) }}" method="GET">
                                            <a href="{{ route('#', $key->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse --}}
                            </tbody>
                          </table>
                       {{-- {{ $value->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

            toastr.success('{{ session('success') }}', 'BERHASIL!');

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!');

        @endif
    </script>

</body>
</html>
@endsection
