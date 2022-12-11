@extends('user.master')

{{--    @section('title', 'Aloqa')--}}

@section('content')

    <section data-bs-version="5.1" class="form5 cid-toGMgw1lym" id="form5-8">


        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Xatolik..!</strong> Kirish bilan bog'liq muammolar bor?<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Aloqa</strong></h3>

            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 mx-auto mbr-form">
                    <form action="{{route('contacts.store')}}" method="POST" class="mbr-form form-with-styler"
                          enctype="multipart/form-data">
                        @csrf

                        {{--                        <div class="row">--}}

                        {{--                            <div  data-form-alert-danger="" class="alert alert-danger col-12">--}}
                        {{--                                Oops...! some problem!--}}
                        {{--                            </div>--}}

                        {{--                        </div>--}}


                        <div class="dragArea row">
                            <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                <input type="text" name="name" placeholder="Ismingiz" data-form-field="name"
                                       class="form-control" value="" id="name-form5-8">
                            </div>
                            <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email"
                                       class="form-control" value="" id="email-form5-8">
                            </div>

                            <div class="col-12 form-group mb-3" data-for="textarea">
                                <textarea type="textarea" name="text" placeholder="Xabaringiz"
                                          data-form-field="textarea" class="form-control"
                                          id="textarea-form5-8"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                                <button type="submit" class="btn btn-primary display-4">Yuborish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
