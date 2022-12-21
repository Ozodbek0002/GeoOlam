@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Xabarlar </h1></div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="" scope="col">T/R</th>
                            <th class="" scope="col"> Nomi</th>
                            <th class="" scope="col"> Email </th>
                            <th class="" scope="col"> Matn </th>
                            <th class="" scope="col"> Vaqti </th>
                            <th class="w-25" scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($contacts as $ind=>$con)
                            <tr>
                                <td class="col-1">{{($contacts->currentpage()-1)*($contacts->perpage())+$ind+1}}</td>
                                <td>{{$con->name}}</td>
                                <td>{{$con->email}}</td>
                                <td>{{$con->text}}</td>
                                <td>{{$con->created_at}}</td>

                                <td class="col-2">
                                    <form action="{{ route('contacts.destroy',$con->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" onclick="Oqidm()" >
                                            <span class="btn-label">
                                                <i class="fa fa-eye"></i>
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

                    <div class="container">
                        <div class="row justify-content-center">

                            @if ($contacts->links())
                                <div class="mt-4 p-4 box has-text-centered">
                                    {{ $contacts->links() }}
                                </div>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        function Oqidm() {--}}
{{--            console.log("Hello Word")--}}
{{--        }--}}
{{--    </script>--}}

@endsection
