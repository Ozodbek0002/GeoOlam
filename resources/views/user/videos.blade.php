
@extends('user.master')

@section('content')

    <section data-bs-version="5.1" class="features7 cid-toGSM0pQMd mbr-parallax-background" id="features8-l">

        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(255, 255, 255);">
        </div>
        <div class="container">
            <div class="row">
                <div class="title col-12">
                    <h5 class="mbr-section-title mbr-fonts-style mb-3 display-2">
                        <strong>Videolar</strong></h5>
                </div>


                @foreach ( $videos as $d)

                    <div class="card col-12 col-md-6">
                        <div class="card-wrapper">
                            <div class="col-12 ">
                                <iframe style="width: 80% "  src="{{$d->url}}" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                </iframe>
                            </div>
                            <div class="top-line">
                                <h6 class="card-title mbr-fonts-style display-5"><strong>{{$d->name}}</strong></h6>
                            </div>
                        </div>
                    </div>

                @endforeach

                <div class="container">
                    <div class="row justify-content-center">

                        @if ($videos->links())
                            <div class="mt-4 p-4 box has-text-centered">
                                {{ $videos->links() }}
                            </div>
                        @endif

                    </div>
                </div>


            </div>
        </div>
    </section>

@endsection


