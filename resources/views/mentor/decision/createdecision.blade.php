@extends('layouts.app')
@section('content')
<body style="background: rgb(236, 236, 236)">

    <div class="container mt-5 mb-5">
        <div class="row">

            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="decision.store" method="POST" enctype="multipart/form-data">


                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="font-weight-bolt">Nama : </label>
                                <select name="name" >
                                    @foreach ($users as $user)
                                    <option value="{{$user->name}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Logical Skill </label>
                                <input type="number" class="form-control @error('logic') is-invalid @enderror" name="logic" value="{{ old('logic') }}" placeholder="Masukkan Nama logic">

                                <!-- error message untuk title -->
                                @error('logic')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Analyst Skill</label>
                                <input type="number" class="form-control @error('analyst') is-invalid @enderror" name="analyst" value="{{ old('analyst') }}" placeholder="Masukkan Nilai Analyst">

                                <!-- error message untuk title -->
                                @error('analyst')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">Preasure Skill</label>
                                <input type="number" class="form-control @error('preasure') is-invalid @enderror" name="preasure" value="{{ old('preasure') }}" placeholder="Masukkan preasure Belajar">

                                <!-- error message untuk title -->
                                @error('preasure')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="font-weight-bold">Programming Skill</label>
                                <input type="number" class="form-control @error('programming') is-invalid @enderror" name="programming" value="{{ old('programming') }}" placeholder="Masukkan programming Belajar">

                                <!-- error message untuk title -->
                                @error('programming')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Mathematic Skill</label>
                                <input type="number" class="form-control @error('mathematic') is-invalid @enderror" name="mathematic" value="{{ old('mathematic') }}" placeholder="Masukkan mathematic Belajar">

                                <!-- error message untuk title -->
                                @error('mathematic')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bolt">Perhitungan</label>
                                <select name="operasi" >
                                    <option value="semut">Algoritma Semut</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bolt">Rekomendasi Role </label>
                                <select name="job" >
                                    <option value="be">Backend Engineer</option>
                                    <option value="fe">Frontend Engineer</option>
                                </select>
                            </div>


                            <button type="submit" class="btn btn-md btn-primary">Hitung</button>
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
