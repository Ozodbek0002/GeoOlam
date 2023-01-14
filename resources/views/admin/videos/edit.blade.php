@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Video tahrirlash </h1></div>
                </div>
                <hr>
                <div class="card-body">
                    <form action="{{route('admin.videos.update',$data->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="text " for="floatingInput"> Video nomi </label>
                            <input type="text" value="{{$data->name}}" name="name" class="form-control"
                                   id="header_ru" placeholder="">
                        </div>

                        <div class="form-group">
                            <label class="text " for="floatingInput"> Oldingi video  </label> <br>
                            <iframe width="300" height="150" src="{{$data->url}}" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                        </div>

                        <div class="form-group">
                            <label class="text " for="floatingInput">Yangi url manzulni yozing</label>
                            <input type="text" name="url" class="form-control" id="header_ru" placeholder=" ">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>





@endsection

