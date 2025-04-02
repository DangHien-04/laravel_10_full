@extends('dashboardlist')
@section('content')
<div class="container">
    <div class="nav-bar">
        <a href="#">Home</a> | <a href="#">Đăng xuất</a>
    </div>

    <h2 class="user-list-title">Danh sách user</h2>

    <table class="user-table">
        <thead>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td> <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                    <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                    <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        <a href="#">Previous</a>
        <span class="active">1</span>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">Next</a>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</div>
@endsection