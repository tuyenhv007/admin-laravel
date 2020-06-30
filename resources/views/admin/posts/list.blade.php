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
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Author</th>
                    <th></th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>STT</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Created</th>
                    <th>Author</th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @forelse($posts as $key => $post)
                    <tr>
                        <td width="50">{{ ++$key }}</td>
                        <td><img src="{{ asset('storage/' . $post->image) }}" alt="" width="100"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>
                            <a href="">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a onclick="return confirm('ban chac chan muon xoa?')" href="" style="color: red">
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
