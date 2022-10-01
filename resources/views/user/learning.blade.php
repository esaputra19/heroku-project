@extends('layouts.app')

@section('content')

<body style="background: lightgray">

 <div class="container">
  <div class="row">
    @foreach ($learnings as $value)
    <div class="col border">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/{{$value->link}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <div class="col">
        <table class="table border border-dark">
            <tbody>
                <tr>
                    <th>Hari       : {{$value->hari}}</th>
                </tr>
                <tr>
                    <th>Nama Mentor : {{$value->mentor}} </th>
                </tr>
                <tr>
                    <th>Judul       : {{$value->judul}}</th>

                </tr>
                <tr>
                    <th>Mater       : {{$value->materi}}</th>
                </tr>
                <tr>
                    <th>Occupation : {{$value->occupation}}</th>
                </tr>
                <tr>
                    <th>Jadwal Live Sesi       : Hari Minggu </th>
                </tr>
                <tr>
                    <th> Jam : 15.00 - 16.00
                        <a href="{{$value->link}}" > Live Sesi
                        </a>
                    </th>
                </tr>

            </tbody>
        </table>
    </div>
    @endforeach
  </div>
  </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>
</html>

@endsection
