@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Maqola qo`shish </h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong> Xatolik!.. </strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.articles.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">

                            <label for=""> Kategoriyasi </label>
                            <select name="category" id="like_to" class="form-control">
                                <option value="uz">Uzbekcha</option>
                                <option value="en" >Inglischa</option>
                                <option value="ru" >Ruscha</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for=""> Maqola nomi</label>
                            <input type="text" name="title" value="{{old('title')}}" class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label for="desc_ru">Qisqacha izoh</label>
                            <textarea class="form-control" name="description" id="text_ru" required rows="4" >{{old('description')}}</textarea>
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="floatingInput"> Maqola faylini yuklang</label>
                            <input type="file" name="file" class="form-control " id="floatingInput" required="" >
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary " onclick="end()">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


