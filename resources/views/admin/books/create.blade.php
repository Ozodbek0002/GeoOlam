@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Kitob qo`shish </h1></div>
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


                    <form action="{{route('admin.books.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">

                            <label for=""> Kategoriyasi </label>
                            <select name="category" id="like_to" class="form-control">
                                <option value="lu" >Lug`at</option>
                                <option value="en" >Ensikopediya</option>
                                <option value="mo" >Monografiya</option>
                                <option value="us" >Uslubiy qollanma</option>
                            </select>

                        </div>

                        <div class="form-group">
                            <label for="title"> Kitob nomi</label>
                            <input type="text" id="title" name="title" value="{{old( 'title')}}" class="form-control" >
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description ">Qisqacha izoh</label>
                            <textarea class="form-control" name="description" id="description"  rows="4" >{{old('description')}}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author">Muallif nomi</label>
                            <input type="text" id="author" class="form-control" name="author">
                            @error('author')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="file"> Rasm yuklang</label>
                            <input type="file" id="image" class="form-control" name="image">
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="file"> Kitob faylini yuklang</label>
                            <input type="file" id="file" class="form-control " name="file" >
                            @error('file')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary " onclick="end()">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection


