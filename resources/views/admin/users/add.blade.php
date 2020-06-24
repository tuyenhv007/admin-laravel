@extends('admin.master')
@section('content')
    <div class="col-md-12 pt-4">
        <div class="card">
            <div class="card-header">
                Create user
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('users.store') }}">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label>Birthday</label>
                        <input type="date" value="" class="form-control" name="birthday">
                    </div>
                    <div class="form-group">
                        <label>Role</label>
                        @foreach($roles as $role)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" name="roles[{{$role->id}}]" value="{{$role->id}}" class="custom-control-input" id="role-{{$role->id}}">
                                <label class="custom-control-label" for="role-{{$role->id}}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
