
@extends('user.master')

@section('content')

    <section data-bs-version="5.1" class="features7 cid-toGSM0pQMd mbr-parallax-background" id="features8-l">

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(255, 255, 255);">
        </div>
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h5 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>{{ $title }}</strong></h5>
                </div>


                @foreach ( $data as $d)

                    <div class="card col-12 col-md-6">
                        <div class="card-wrapper">
                            <div class="col-12 col-md-3">
                                <div class="item-img">
                                    <img style="width: 250px; height: 200px;"
                                         src="{{ asset('information/'.$d->image) }}" alt="{{ $d->title }}">
                                </div>
                            </div>
                            <div class="top-line">
                                <h6 class="card-title mbr-fonts-style display-5"><strong>{{$d->title}}</strong></h6>
                                <p class="mbr-text cost mbr-fonts-style display-5"></p>
                            </div>
                            <div class="bottom-line">
                                <p class="mbr-text mbr-fonts-style display-7"> {{$d->description}} </p>
                            </div>


                        </div>
                    </div>

                @endforeach

                <div class="container">
                    <div class="row justify-content-center">

{{--                        @if ($cources->links())--}}
{{--                            <div class="mt-4 p-4 box has-text-centered">--}}
{{--                                {{ $cources->links() }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection


