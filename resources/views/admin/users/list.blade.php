@extends('admin.master')
@section('content')
    <div class="col-md-12 pt-4">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Address</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $key => $user)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $user['name'] }}</td>
                            <td>{{ $user['email'] }}</td>
                            <td>
                                @if($user['gender'] == \App\Http\Controllers\GenderConstant::NAM)
                                    Nam
                                @else
                                    Nu
                                @endif
                            </td>
                            <td>{{ $user['address'] }}</td>
                            <td>
                                <a href="" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <a href="" class="btn btn-primary">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
