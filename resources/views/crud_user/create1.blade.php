@extends('dashboardlogin')

@section('content')
<div class="container">
    <div class="nav-bar">
        <a href="#">Home</a> | <a href="#">Đăng nhập</a> | <a href="#">Đăng ký</a>
    </div>

    <div class="registration-form">
        <h2>Màn hình đăng ký</h2>
        <form action="{{ route('user.postUser') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" placeholder="name" id="name" name="name" required>
                @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" placeholder="password" id="password" name="password" required>
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
                <input type="email" placeholder="Email" id="email" name="email" required>
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="button-group">
                <a href="#" class="have-account">Đã có tài khoản</a>
                <button class="register-button" type="submit">Đăng ký</button>
            </div>
        </form>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</div>
@endsection