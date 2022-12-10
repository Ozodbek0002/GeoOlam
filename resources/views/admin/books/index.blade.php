@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Kitoblar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.books.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Kitob qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Nomi </th>
                            <th class="" scope="col"> Izoh </th>
                            <th class="" scope="col"> Muallifi </th>
                            <th class="" scope="col"> Kategoriya </th>
                            <th class="" scope="col"> Rasm </th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($books as $book)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$book->title}}</td>
                                <td>{{$book->description}}</td>
                                <td>{{$book->author}}</td>
                                @if($book->category == 'lu')
                                    <td>Lug'at</td>
                                @elseif($book->category == 'en')
                                    <td>Ensiklopediya</td>
                                @elseif($book->category == 'mo')
                                    <td>Monografiya</td>
                                @elseif($book->category == 'us')
                                    <td>Uslubiy qollanma</td>
                                @endif

                                <td><img src="{{asset("books/$book->image")}}" alt="image" style="height: 100px; width: 100px"></td>

                                <td class="col-2">
                                    <form action="{{ route('admin.books.destroy',$book->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.books.edit',$book->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>

                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row justify-content-center">

{{--                            @if ($articles->links())--}}
{{--                                <div class="mt-4 p-4 box has-text-centered">--}}
{{--                                    {{ $articles->links() }}--}}
{{--                                </div>--}}
{{--                            @endif--}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
