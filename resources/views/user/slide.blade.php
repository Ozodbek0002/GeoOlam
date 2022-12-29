@extends('user.master')

@section('title', 'Slaydlar')

@section('content')

    <section data-bs-version="5.1" class="features10 cid-toGSorb7we" id="features11-h">
        <!---->


        <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(190, 211, 249);">
        </div>
        <div class="container">
            <div class="title">
                <h3 class="mbr-section-title mbr-fonts-style mb-4 display-2">
                    <strong>{{ $title }}</strong></h3>

            </div>

            @foreach($slides as $slide )
                <div class="card">
                    <div class="card-wrapper">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-3">
                                <div class="image-wrapper">
                                    <img style="width: 300px; height: 200px; " src="slides/{{$slide->image}}"
                                         alt="Mobirise Website Builder" title="">
                                </div>
                            </div>
                            <div class="col-12 col-md">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="top-line">
                                                <h4 class="card-title mbr-fonts-style display-5">
                                                    <strong>{{ $slide->title }}</strong>
                                                </h4>
                                                <p class="cost mbr-fonts-style display-10"><i
                                                        class="fa fa-download"></i> {{ $slide->eye }}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="bottom-line">
                                                <p class="mbr-text mbr-fonts-style m-0 display-7">
                                                    {{ $slide->description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mbr-section-btn item-footer mt-2">
                                        <a href="{{ route( 'downloadSlide', $slide->file )}}"  class="btn btn-primary item-btn display-7" >Yuklab olish </a>
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
