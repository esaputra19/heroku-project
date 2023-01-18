@extends('layouts.app')

@section('content')
<body style="background: lightgray">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <h4>Data Nilai Siswa</h4>
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama Siswa</th>
                                <th scope="col">Nilai Tugas</th>
                                <th scope="col">UTS</th>
                                <th scope="col">UAS</th>
                                <th scope="col">Total Kehadiran</th>
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
                <p></p>
                <p></p>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Logic Skill</th>
                                <th scope="col">Analyst Skill</th>
                                <th scope="col">Preasure Skill</th>
                                <th scope="col">Programming Skill</th>
                                <th scope="col">Mathematic Skill</th>
                                <th scope="col">Jalur</th>
                                <th scope="col">Job</th>
                                <th scope="col">Waktu Per Exam</th>
                                <th scope="col">Total Per Node</th>
                              </tr>
                            </thead>
                            <tbody>
                                @forelse ($decisions as $codition)
                                <tr>
                                    <td>{{$codition->name}}</td>
                                    <td>{{$codition->logic}}</td>
                                    <td>{{$codition->analyst}}</td>
                                    <td>{{$codition->preasure}}</td>
                                    <td>{{$codition->programming}}</td>
                                    <td>{{$codition->mathematic}}</td>
                                    <td>{{$codition->jalur}}</td>
                                    <td>{{$codition->job}}</td>
                                    <td>{{$codition->waktu}} Jam</td>
                                    <td>{{$codition->total}} Jam</td>
                                </tr>
                                @empty

                                @endforelse


                            </tbody>
                          </table>
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
