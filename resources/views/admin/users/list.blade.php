@extends('admin.master')
@section('content')
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">
            <a href="{{ route('admin.dashboard') }}">Home</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <div class="card-header"><i class="fas fa-table mr-1"></i></div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('users.create') }}" class="btn btn-success mb-2">Create</a>
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthday</th>
                    <th>Role</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @forelse($users as $key => $user)
                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->birthday }}</td>
                        <td>
                            @forelse($user->roles as $role)
                                {{ $role->name . ',' }}
                            @empty

                            @endforelse
                        </td>
                        <td>
                            @if($user->id !== \Illuminate\Support\Facades\Auth::id())
                            <a href="{{ route('users.edit', $user->id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a onclick="return confirm('ban chac chan muon xoa?')"
                               href="{{ route('users.delete', ['id' => $user->id] ) }}" style="color: red">
                                <i class="fa fa-trash"></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
