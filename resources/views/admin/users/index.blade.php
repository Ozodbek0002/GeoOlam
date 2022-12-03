@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title"> Foydalanuvchilar </h1></div>

                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col"> Ismi</th>
                            <th class="" scope="col"> Emaili</th>

                            {{--<th class="w-25" scope="col">Amallar</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $user)
                            <tr>

                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>

{{--                                <td class="col-2">--}}
{{--                                    <form action="{{route('admin.barber.destroy',$barber->id)}}" method="POST">--}}
{{--
{{--                                        <a title="Tahrirlash" class="btn btn-warning btn-sm active"--}}
{{--                                           href="{{route('admin.barber.edit',$barber->id)}}">--}}
{{--                                    <span class="btn-label">--}}
{{--                                        <i class="fa fa-pen"></i>--}}

{{--                                    </span>--}}

{{--                                        </a>--}}
{{--
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection

