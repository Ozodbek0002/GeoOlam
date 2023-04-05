@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Maqolalar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.articles.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Maqola qo'shish
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
                            <th class="" scope="col"> Kategoriya </th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($articles as $ind=>$poet)
                            <tr>
                                <td class="col-1">{{($articles->currentpage()-1)*($articles->perpage())+$ind+1}}</td>
                                <td>{{  substr($poet->description, 0, 50) }} ... </td>
                                <td>{{  substr($poet->title, 0, 50 ) }} ... </td>
                                @if($poet->category == 'uz')
                                    <td>Uzbek</td>
                                @elseif($poet->category == 'ru')
                                    <td>Rus</td>
                                @elseif($poet->category == 'en')
                                    <td>English</td>
                                @endif
                                <td class="col-2">
                                    <form action="{{ route('admin.articles.destroy',$poet->id) }}" method="POST"
                                          onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?');"
                                    >
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.articles.edit',$poet->id) }}">
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

                            @if ($articles->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $articles->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
