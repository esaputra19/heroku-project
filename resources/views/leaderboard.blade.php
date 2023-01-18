@extends('layouts.app')

@section('content')
<body style="background: rgb(255, 255, 255)">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h4>Top Gainer Leaderboard</h4>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Email</th>
                                <th scope="col">Pembimbing</th>
                                <th scope="col">Occupation</th>

                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($leaderboards as $key)
                                <tr>
                                    <td>{{$key->nama}}</td>
                                    <td>{{$key->email}}</td>
                                    <td>{{$key->pembimbing}}</td>
                                    <td>{{$key->occupation}}</td>
                                </tr>
                                @empty

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
