@extends('layouts.app')
@section('content')
<body style="background: rgb(236, 236, 236)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{route('score.update', $score->id)}}" method="POST" enctype="multipart/form-data">


                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Siswa</label>
                                <input type="text" class="form-control @error('siswa') is-invalid @enderror" name="siswa" value="{{ old('siswa') }}" placeholder="Masukkan Nama siswa">

                                <!-- error message untuk title -->
                                @error('siswa')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nilai Tugas</label>
                                <input type="text" class="form-control @error('harian') is-invalid @enderror" name="harian" value="{{ old('harian') }}" placeholder="Masukkan Nilai Tugas Belajar">

                                <!-- error message untuk title -->
                                @error('harian')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">UTS</label>
                                <input type="text" class="form-control @error('uts') is-invalid @enderror" name="uts" value="{{ old('uts') }}" placeholder="Masukkan uts Belajar">

                                <!-- error message untuk title -->
                                @error('uts')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">UAS</label>
                                <input type="text" class="form-control @error('uas') is-invalid @enderror" name="uas" value="{{ old('uas') }}" placeholder="Masukkan uas Belajar">

                                <!-- error message untuk title -->
                                @error('uas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Total Kehadiran</label>
                                <input type="text" class="form-control @error('kehadiran') is-invalid @enderror" name="kehadiran" value="{{ old('kehadiran') }}" placeholder="Masukkan kehadiran Belajar">

                                <!-- error message untuk title -->
                                @error('kehadiran')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
@endsection
