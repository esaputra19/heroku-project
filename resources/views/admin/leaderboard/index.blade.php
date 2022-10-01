@extends('layouts.app')

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('create')}}" class="btn btn-md btn-success mb-3">TAMBAH DATA</a>
                        <h4>TOP GAINERS</h4>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pembimbing</th>
                                <th scope="col">Occupation</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($leaderboards as $leader => $key)
                                <tr>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->email}}</td>
                                    <td>{{$key->pembimbing}}</td>
                                    <td>{{$key->occupation}}</td>
                                    <td class="text-center">
                                        <form method="GET" onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destroy', $key->id) }}" method="GET">
                                            <a href="{{ route('edit', $key->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
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
