@extends('admin.master')
@section('content')
    <div class="col-md-12 pt-4">
        <div class="card">
            <div class="card-header">
                Update user
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" value="{{ $user->email }}" class="form-control" disabled>
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" value="{{ $user->birthday }}" class="form-control" name="birthday">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        <select class="form-control" name="role">
                            <option
                                @if($user->role == \App\Http\Controllers\RoleConstant::ADMIN)
                                selected
                                @endif
                                value="{{ \App\Http\Controllers\RoleConstant::ADMIN }}">Admin
                            </option>
                            <option
                                @if($user->role == \App\Http\Controllers\RoleConstant::USER)
                                selected
                                @endif
                                value="{{ \App\Http\Controllers\RoleConstant::USER }}">User
                            </option>
                        </select>
                    </div>
                    {{--                    <div class="form-group">--}}
                    {{--                        <label>Address</label>--}}
                    {{--                        <textarea class="form-control" name="address" rows="3">{{ $user->address }}</textarea>--}}
                    {{--                    </div>--}}
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
