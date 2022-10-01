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
                        @forelse ($checkouts as $checkout)
                            <tr class="align-middle">
                                <td width="18%">
                                    <img src="{{asset('images/item_bootcamp.png')}}" height="120" alt="">
                                </td>
                                <td>
                                    <p class="mb-2">
                                        <strong>{{$checkout->Camp->title}}</strong>
                                    </p>
                                    <p>
                                        {{$checkout->created_at->format('M d, Y')}}
                                    </p>
                                </td>
                                <td>
                                    <strong>${{$checkout->Camp->price}}k</strong>
                                </td>
                                <td>
                                    <strong>{{$checkout->payment_status}}</strong>
                                </td>
                                <td>
                                    @if ($checkout->payment_status == 'waiting')
                                        <a href="{{$checkout->midtrans_url}}" class="btn btn-primary">Pay Here</a>

                                    @endif
                                </td>
                                {{-- <td>
                                    @if ($checkout->payment_status == 'paid')
                                    <a href="{{route('show')}}" class="btn btn-primary">
                                        Yukk Belajar !!
                                    </a>
                                    <a href="{{route('mentor')}}" class="btn btn-primary">Data Mentor</a>
                                    @endif

                                </td> --}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">
                                    <h3>No Camp Registered</h3>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <th></th>
                <th></th>
                <table class="table">
                    @foreach ($checkouts as $tab)
                    <td>
                        @if ($tab->payment_status == 'paid')
                        <a href="{{route('show')}}" class="btn btn-primary">
                            Yukk Belajar !!
                        </a>
                        <a href="{{route('mentor')}}" class="btn btn-primary">Data Mentor</a>
                        <a href="{{route('leaderboard.user')}}" class="btn btn-primary"> Leaderboard</a>

                        @endif

                    </td>
                    @endforeach
                </table>
            </div>
        </div>
    </section>
@endsection
