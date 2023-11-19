@extends('layout.layout')

@section('title', 'Admin Dashboard')
@section('content')

    <h1>Admin Panel</h1>
    <div class="container">
        <table class="table table-dark table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th></th>
            </tr>
           @foreach ($users as $user )
            <tr>
                <td><?= $user->id ?></td>
                <td><?= $user->name?></td>
                <td><?= $user->email?></td>
                <td>
                    @if ($user->is_admin ==1)
                    <span class="badge bg-success">
                        Admin
                    </span>
                    @else
                    <span class="badge  bg-primary">
                        User
                    </span>
                    @endif
                </td>
                <td>
                    <div class="btn-group dropdown">

                        @if ($user->is_admin ==0)
                            @if(!$user->suspend)
                            <form action="{{ route('admin.ban', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-watning btn-sm"> Ban </button>
                            </form>
                                {{-- <a href="{{url("/admin/ban/$user->id")}}" class="btn btn-warning btn-sm">Ban</a> --}}
                            @else
                            <form action="{{ route('admin.unban', $user->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm"> Unban </button>
                            </form>
                            {{-- <a href="{{url("/admin/unban/$user->id")}}" class="btn btn-outline-warning btn-sm">Ban</a> --}}
                            @endif

                            <a href="{{url("/admin/delete/$user->id")}}" class="ms-2 btn btn-outline-danger btn-sm">Delete</a>
                        @endif
                    </div>
                </td>

            </tr>
           @endforeach
        </table>
    </div>
@endsection
