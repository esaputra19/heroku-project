@extends('layouts.app')

@section('content')
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('update', $learnings->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <label class="font-weight-bold">HARI</label>
                                <input type="text" class="form-control @error('hari') is-invalid @enderror" name="hari" value="{{ old('hari', $learnings->hari) }}" placeholder="Masukkan Hari Belajar">

                                <!-- error message untuk title -->
                                @error('hari')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">MENTOR</label>
                                <input type="text" class="form-control @error('mentor') is-invalid @enderror" name="mentor" value="{{ old('mentor', $learnings->mentor) }}" placeholder="Masukkan mentor Belajar">

                                <!-- error message untuk title -->
                                @error('mentor')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">JUDUL</label>
                                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul', $learnings->judul) }}" placeholder="Masukkan Judul Belajar">

                                <!-- error message untuk title -->
                                @error('judul')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">MATERI</label>
                                <input type="text" class="form-control @error('materi') is-invalid @enderror" name="materi" value="{{ old('materi', $learnings->materi) }}" placeholder="Masukkan materi Belajar">

                                <!-- error message untuk title -->
                                @error('materi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">OCCUPATION</label>
                                <input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" value="{{ old('occupation', $learnings->occupation) }}" placeholder="Masukkan occupation Belajar">

                                <!-- error message untuk title -->
                                @error('occupation')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">LINK</label>
                                <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $learnings->link) }}" placeholder="Masukkan link Belajar">

                                <!-- error message untuk title -->
                                @error('link')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>




                            {{-- <div class="form-group">
                                <label class="font-weight-bold">KONTEN</label>
                                <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten Blog">{{ old('content', $blog->content) }}</textarea>

                                <!-- error message untuk content -->
                                @error('content')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> --}}

                            <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
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
</html>
@endsection
