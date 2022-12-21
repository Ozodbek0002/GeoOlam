
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


{{--                @foreach ( $cources as $article)--}}

{{--                    <div class="card col-12 col-md-6">--}}
{{--                        <div class="card-wrapper">--}}
{{--                            <div class="top-line">--}}
{{--                                <h6 class="card-title mbr-fonts-style display-5"><strong>{{$article->title}}</strong></h6>--}}
{{--                                <p class="mbr-text cost mbr-fonts-style display-5"></p>--}}
{{--                            </div>--}}
{{--                            <div class="bottom-line">--}}
{{--                                <p class="mbr-text mbr-fonts-style display-7"> {{$article->description}} </p>--}}
{{--                            </div>--}}
{{--                            <div class="mbr-section-btn item-footer mt-2">--}}
{{--                                <a href="" class="btn btn-primary item-btn display-7" target="_blank">Yuklab olish </a>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}

{{--                @endforeach--}}

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


