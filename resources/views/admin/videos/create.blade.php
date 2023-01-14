@extends('admin.master')
@section('content')

    <div class="container">
        <h1 class="text-primary text text-center">Video qo'shish</h1>
        <div class="w-100">

            <form action="{{url('video')}}" method="POST" accept-charset="UTF-8"
                  enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="services">Video Name</label>
                    <input required="" type="text" name="name" class="form-control" id="photo_name"
                           placeholder="Video Name">
                </div>

                <div class="form-group">
                    <label for="cost">Video url</label>
                    <input required="" type="text" name="url" class="form-control" id="photo" placeholder=" Video Url ">
                </div>

                <div class="form-floating mb-3">
                    <input type="submit" name="submit" class="btn-primary w-100 btn" id="floatingInput"
                           value="Barcha Ma'lumotlarni Saqlash">

                </div>

            </form>

        </div>
    </div>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Video qo`shish </h1></div>
                </div>
                <hr>
                <div class="card-body">


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


                    <form action="{{route('admin.videos.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="services">Video Name</label>
                            <input required="" type="text" name="name" class="form-control" id="photo_name"
                                   placeholder="Video Name">
                            @error('name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cost">Video url</label>
                            <input required="" type="text" name="url" class="form-control" id="photo" placeholder=" Video Url ">
                            @error('url')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

