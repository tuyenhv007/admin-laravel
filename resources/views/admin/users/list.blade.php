@extends('admin.master')
@section('content')
    <ol class="breadcrumb mb-4 mt-4">
        <li class="breadcrumb-item active">Users</li>
    </ol>
    <div class="card-header"><i class="fas fa-table mr-1"></i></div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                            <a href="{{ route('users.edit', $user->id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a onclick="return confirm('ban chac chan muon xoa?')"
                               href="{{ route('users.delete', ['id' => $user->id] ) }}" style="color: red">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
