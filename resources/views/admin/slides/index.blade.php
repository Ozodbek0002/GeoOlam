@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Slaydlar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.slides.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Slayd qo'shish
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
                            <th class="" scope="col"> Rasm </th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($slides as $slide)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$slide->title}}</td>
                                <td>{{$slide->description}}</td>
                                <td><img src="{{asset("slides/$slide->image")}}" alt="image" style="height: 100px; width: 100px"></td>

                                <td class="col-2">
                                    <form action="{{ route('admin.slides.destroy',$slide->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.slides.edit',$slide->id) }}">
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


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

