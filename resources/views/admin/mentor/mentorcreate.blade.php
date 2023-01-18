@extends('layouts.app')
@section('content')
<body style="background: rgb(236, 236, 236)">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{route('mentorstore')}}" method="POST" enctype="multipart/form-data">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="Masukkan Nama">

                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan email Belajar">

                                <!-- error message untuk title -->
                                @error('email')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">UMUR</label>
                                <input type="text" class="form-control @error('umur') is-invalid @enderror" name="umur" value="{{ old('umur') }}" placeholder="Masukkan umur Belajar">

                                <!-- error message untuk title -->
                                @error('umur')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">Tahun Lulus</label>
                                <input type="text" class="form-control @error('graduate') is-invalid @enderror" name="graduate" value="{{ old('graduate') }}" placeholder="Masukkan graduate Belajar">

                                <!-- error message untuk title -->
                                @error('graduate')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Perusahaan</label>
                                <input type="text" class="form-control @error('corporate') is-invalid @enderror" name="corporate" value="{{ old('corporate') }}" placeholder="Masukkan corporate Belajar">

                                <!-- error message untuk title -->
                                @error('corporate')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Posisi</label>
                                <input type="text" class="form-control @error('position') is-invalid @enderror" name="position" value="{{ old('position') }}" placeholder="Masukkan position Belajar">

                                <!-- error message untuk title -->
                                @error('position')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            {{-- <div class="form-group">
                                <label class="font-weight-bold">Password</label>
                                <input type="text" class="form-control @error('passwd') is-invalid @enderror" name="passwd" value="{{ old('passwd') }}" placeholder="Masukkan passwd">

                                <!-- error message untuk title -->
                                @error('passwd')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}



                            <button type="submit" class="btn btn-md btn-primary">TAMBAH</button>
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
