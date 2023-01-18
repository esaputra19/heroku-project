@extends('layouts.app')

@section('content')
    <section class="dashboard my-5">
        <div class="container">
            <div class="row text-left">
                <div class=" col-lg-12 col-12 header-wrap mt-4">
                    <p class="story">
                        DASHBOARD
                    </p>
                    <h2 class="primary-header ">
                        Codingers Course
                    </h2>
                    <h4>
                        Kerjarlah Mimpimu dan Jadilah yang terbaik
                    </h4>
                </div>
            </div>
            <div class="row my-5">
                @include('components.alert')
                <table class="table">
                    <tbody>

                                {{-- <td>
                                    @if ($checkout->payment_status == 'paid')
                                    <a href="{{route('show')}}" class="btn btn-primary">
                                        Yukk Belajar !!
                                    </a>
                                    <a href="{{route('mentor')}}" class="btn btn-primary">Data Mentor</a>
                                    @endif

                                </td> --}}
                            </tr>
                    </tbody>
                </table>
                <th></th>
                <th></th>
                <table class="table">

                    <td>


                        <a href="{{route('mentor.score.index')}}" class="btn btn-primary">Input Nilai</a>
                        <a href="{{route('mentor.decision')}}" class="btn btn-primary"> Penentuan Jalur</a>



                    </td>
                </table>
            </div>
        </div>
    </section>
@endsection
