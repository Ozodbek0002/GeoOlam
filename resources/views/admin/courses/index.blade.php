@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Kurslar </h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.course.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Kurs qo'shish
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
                            <th class="" scope="col"> Kategoriya</th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($courses as $ind=>$course)
                            <tr>
                                <td class="col-1">{{($courses->currentpage()-1)*($courses->perpage())+$ind+1}}</td>
                                <td>{{$course->title_uz}}</td>
                                <td>{{$course->description}}</td>
                                @if($course->category == 'uz')
                                    <td>Uzbek</td>
                                @elseif($course->category == 'ru')
                                    <td>Rus</td>
                                @elseif($course->category == 'en')
                                    <td>English</td>
                                @endif
                                <td class="col-2">
                                    <form action="{{ route('admin.course.destroy',$course->id) }}" method="POST"
                                          onSubmit="return confirm('Rostan ham o`chirilishini hohlaysizmi?');"
                                    >
                                        <a class="btn btn-warning btn-sm"
                                           href="{{ route('admin.course.edit',$course->id) }}">
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
