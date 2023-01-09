@extends('user.master')

{{--@section('title', 'Kitoblar')--}}

@section('content')

{{--    <section data-bs-version="5.1" class="slider4 mbr-embla cid-toGODUWV5g" id="slider4-d">--}}

{{--        <div class="mbr-overlay"></div>--}}
{{--        <div class="position-relative text-center">--}}

{{--            <div class="mbr-section-head">--}}
{{--                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">--}}
{{--                    <strong>{{ $title }}</strong></h4>--}}

{{--            </div>--}}

{{--            <div class="embla mt-4" data-skip-snaps="true" data-align="center" data-contain-scroll="trimSnaps"--}}
{{--                 data-auto-play-interval="5" data-draggable="true">--}}

{{--                <div class="embla__viewport container-fluid">--}}
{{--                    <div class="embla__container">--}}

{{--                        @foreach($books as $book)--}}

{{--                            <div class="embla__slide slider-image item" style="margin-left: 1rem; margin-right: 1rem;">--}}
{{--                                <div class="slide-content">--}}
{{--                                    <div class="item-wrapper">--}}
{{--                                        <div class="item-img">--}}
{{--                                            <img style="width: 400px; height: 300px;"--}}
{{--                                                 src="{{ asset('books/'.$book->image) }}" alt="{{ $book->title }}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="item-content">--}}
{{--                                        <h5 class="item-title mbr-fonts-style display-7">--}}
{{--                                            <strong> {{ $book->title }}</strong>--}}
{{--                                        </h5>--}}
{{--                                        <p><i style="color: silver">{{ $book->author }}</i></p>--}}
{{--                                    </div>--}}

{{--                                    <div class="item-content">--}}
{{--                                        <p class="mbr-text mbr-fonts-style mt-3 display-7"> {{ $book->description }}</p>--}}
{{--                                    </div>--}}


{{--                                    <div class="mbr-section-btn item-footer mt-2">--}}
{{--                                        <a href="{{ route( 'downloadBook', $book->file )}}"--}}
{{--                                           class="btn btn-primary item-btn display-7">Yuklab olish</a>--}}

{{--                                    </div>--}}

{{--                                    <div class="item-mbr-section-btn">--}}
{{--                                        <p>--}}
{{--                                            <i class="fa fa-download"></i> {{ $book->eye }}--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--                <button class="embla__button embla__button--prev">--}}
{{--                    <span class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only visually-hidden visually-hidden">Previous</span>--}}
{{--                </button>--}}

{{--                <button class="embla__button embla__button--next">--}}
{{--                    <span class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont" aria-hidden="true"></span>--}}
{{--                    <span class="sr-only visually-hidden visually-hidden">Next</span>--}}
{{--                </button>--}}


{{--            </div>--}}
{{--        </div>--}}


{{--    </section>--}}


    <section data-bs-version="5.1" class="features10 cid-toGSorb7we" id="features11-h">
        <!---->


        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(190, 211, 249);">
        </div>
        <div class="container">
            <div class="title">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                    <strong>{{ $title }}</strong></h3>

            </div>

            @foreach($books as $book)
                <div class="card">
                    <div class="card-wrapper">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3">
                                <div class="item-img">
                                    <img style="width: 250px; height: 200px;"
                                         src="{{ asset('books/'.$book->image) }}" alt="{{ $book->title }}">
                                </div>
                            </div>
                            <div class="col-12 col-md">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="top-line">
                                                <h5 class="item-title mbr-fonts-style display-7">
                                                    <strong> {{ $book->title }}</strong>
                                                </h5>
                                                <p><i style="color: silver">{{ $book->author }}</i></p>

                                                <p class="cost mbr-fonts-style display-10"><i
                                                        class="fa fa-download"></i> {{ $book->eye }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bottom-line">
                                                <p class="mbr-text mbr-fonts-style m-0 display-7">
                                                    {{ $book->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mbr-section-btn item-footer mt-2">
                                        <a href="{{ route( 'downloadBook', $book->file )}}"
                                           class="btn btn-primary item-btn display-7">Yuklab olish</a>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </section>

@endsection
