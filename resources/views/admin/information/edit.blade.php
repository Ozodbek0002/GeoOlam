@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Ma'lumot tahrirlash </h1></div>
                </div>
                <hr>
                <div class="card-body">



                    <form action="{{route('admin.information.update',$information->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')



                        <div class="form-group">
                            <label for="title"> Ma'lumot sarlavhasi </label>
                            <input type="text" id="title" name="title" value="{{$information->title}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Qisqacha izoh </label>
                            <textarea class="form-control" name="description" id="description" rows="4">{{$information->description}}</textarea>
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="image"> Ma'lumot rasmini yuklang</label>
                            <input type="file" id="image" class="form-control" name="image">
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="file"> Ma'lumot faylini yuklang</label>
                            <input type="file" name="file" class="form-control " id="file">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection




