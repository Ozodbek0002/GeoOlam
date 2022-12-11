@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Kurs tahrirlash </h1></div>
                </div>
                <hr>
                <div class="card-body">



{{--                    <form action="{{route('admin.cources.update',$course->id)}}" method="POST" accept-charset="UTF-8"  enctype="multipart/form-data">--}}
                        @csrf
                        @method('PUT')


                        <div class="form-group">

                            <label for=""> Kategoriyasi </label>
                            <select name="category" id="like_to" class="form-control">
                                <option value="uz">Uzbekcha</option>
                                <option value="en" >Inglizcha</option>
                                <option value="ru" >Ruscha</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="title"> Kurs nomi </label>
                            <input type="text" id="title" name="title" value="{{$course->title}}" class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="desc_en">Qisqacha izoh </label>
                            <textarea class="form-control" name="description" id="desc_en" rows="4">{{$course->description}}</textarea>
                        </div>



                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="File"> Kitob faylini yuklang</label>
                            <input type="file" name="file" class="form-control " id="File">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary " >Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



