@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="display-3"> Mentor Codingers Course</h1>
    <div class="row">
        @foreach ($mentors as $mentor)
      <div class="col">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text">
                Nama :{{$mentor->nama_mentor}}
              </p>
              <p>
                Umur :{{$mentor->umur}}
              </p>
              <p>
                Occupation :{{$mentor->occupation}}
              </p>
              <p>
                Alumni :{{$mentor->alumni}}
              </p>
              <p>
                Last Work :{{$mentor->lastwork}}
              </p>
              <p>
                Job :{{$mentor->job}}
              </p>
              <p>
                <a href="{{$mentor->linkedin}}"class="btn btn-primary btn-xs btn-">Linkedin</a>
              </p>
            </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
