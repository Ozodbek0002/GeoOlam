@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Videolar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.videos.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Video qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col">Video nomi</th>
                            <th class="" scope="col">Video</th>
                            <th class="" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($data as $d => $dat)

                            <tr>
                                <td class="col-1">{{($data->currentpage()-1)*($data->perpage())+$d+1}}</td>
                                <td>{{$dat->name}}</td>
                                <td>
                                    <iframe width="300" height="150" src="{{$dat->url}}" title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen>
                                    </iframe>
                                </td>

                                <td>
                                    <form action="{{ route('admin.videos.destroy',$dat->id) }}" method="POST"
                                          onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?');"
                                    >
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.videos.edit',$dat->id) }}">
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

                            @if ($data->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $data->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
