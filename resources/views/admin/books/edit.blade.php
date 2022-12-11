@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Kitob tahrirlash </h1></div>
                </div>
                <hr>
                <div class="card-body">



                    <form action="{{route('admin.books.update',$book->id)}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">

                            <label for=""> Kategoriyasi </label>
                            <select  name="category" id="like_to" class="form-control">
                                <option value="{{$book->category}}" style="color: blue">
                                    @if($book->category == 'lu')
                                        Lug'at
                                    @elseif($book->category == 'en')
                                        Ensiklopediya
                                    @elseif($book->category == 'mo')
                                        Monografiya
                                    @elseif($book->category == 'us')
                                        Uslubiy qollanma
                                    @endif
                                </option>
                                <option value="lu" >Lug`at</option>
                                <option value="en" >Ensikopediya</option>
                                <option value="mo" >Monografiya</option>
                                <option value="us" >Uslubiy qollanma</option>
                            </select>

                        </div>


                        <div class="form-group">

                            <label for=""> Kategoriyasi </label>
                            <select name="category" id="like_to" class="form-control">
                                <option value="uz">Uzbekcha</option>
                                <option value="en" >Inglizcha</option>
                                <option value="ru" >Ruscha</option>
                            </select>

                        </div>


                        <div class="form-group">
                            <label for="title"> Kitob nomi </label>
                            <input type="text" id="title" name="title" value="{{$book->title}}" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="desc_en">Qisqacha izoh </label>
                            <textarea class="form-control" name="description" id="desc_en"
                                      rows="4">{{$book->description}}</textarea>
                        </div>

                        <div class="form-group">
                            <label  for="author"> Muallif nomi</label>
                            <input type="text" name="author" value="{{$book->author}}" class="form-control " id="author">
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="image"> Rasm yuklang</label>
                            <input type="file" id="image" class="form-control" name="image">
                        </div>


                        <div class="form-floating mb-3">
                            <label class="text text-primary" for="bookFile"> Kitob faylini yuklang</label>
                            <input type="file" name="file" class="form-control " id="bookFile">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary ">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">


                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection



