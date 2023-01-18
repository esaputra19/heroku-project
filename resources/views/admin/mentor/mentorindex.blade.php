@extends('layouts.app')

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('mentorcreate')}}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <h4>Almuni Codingers Course</h4>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Umur</th>
                                <th scope="col">Tahun Lulus</th>
                                <th scope="col">Perusahaan</th>
                                <th scope="col">Posisi</th>
                                <th scope="col">Action</th>
                                {{-- <th scope="col">Password</th> --}}
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($mentors as $mentor => $pelatih)
                                <tr>
                                    <td>{{$pelatih->nama}}</td>
                                    <td>{{$pelatih->email}}</td>
                                    <td>{{$pelatih->umur}}</td>
                                    <td>{{$pelatih->graduate}}</td>
                                    <td>{{$pelatih->corporate}}</td>
                                    <td>{{$pelatih->position}}</td>
                                    {{-- <td>{{$pelatih->passwd}}</td> --}}
                                    <td class="text-center">
                                        <form method="GET" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('mentordestroy', $pelatih->id) }}" method="GET">
                                            <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data belum Tersedia.
                                  </div>
                              @endforelse
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
