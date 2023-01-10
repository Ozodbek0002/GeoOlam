@extends('admin.master')
    @section('content')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-9"><h1 class="card-title">Qiziqarli ma'lumotlar </h1></div>
                        <div class="col-md-1">
                            <a class="btn btn-primary" href="{{route('admin.information.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                                Ma'lumot qo'shish
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <thead>
                            <tr>
                                <th class="" scope="col">T/R</th>
                                <th class="" scope="col"> Nomi</th>
                                <th class="" scope="col"> Izoh</th>
                                <th class="" scope="col"> Rasm</th>
                                <th class="w-25" scope="col">Amallar</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $ind=>$information)
                                <tr>
                                    <td class="col-1">{{$loop->index+1}}</td>
                                    <td>{{$information->title}}</td>
                                    <td>{{$information->description}}</td>
                                    <td><img src="{{asset("information/$information->image")}}" alt="image" style="height: 100px; width: 100px"></td>
                                    <td class="col-2">
                                        <form action="{{ route('admin.information.destroy',$information->id) }}" method="POST"
                                              onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?');"
                                        >
                                            <a class="btn btn-warning btn-sm"
                                               href="{{ route('admin.information.edit',$information->id) }}">
                                            <span class="btn-label">
                                                <i class="fa fa-pen"></i>
                                            </span>
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                            <span class="btn-label">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach

                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    @endsection
