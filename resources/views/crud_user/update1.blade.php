@extends('dashboardlogin')

@section('content')
<div class="container">
    <div class="nav-bar">
        <a href="#">Home</a> | <a href="#">Đăng nhập</a> | <a href="#">Đăng ký</a>
    </div>

    <div class="registration-form">
        <h2>Màn hình cập nhật</h2>
        <form action="{{ route('user.postUpdateUser') }}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$user->id}}">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" id="name" placeholder="name" name="name"    value="{{ $user->name }}">
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" placeholder="password" id="password" name="password" value="{{ $user->password }}">
                @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="confirm-password">Nhập lại mật khẩu</label>
                <input type="password" id="confirm-password" name="confirm-password">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" placeholder="email" id="email" name="email" value="{{ $user->email }}">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="button-group">
                <a href="#" class="have-account">Đã có tài khoản</a>
                <button class="register-button"type="submit" >Đăng ký</button>
            </div>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</div>
@endsection