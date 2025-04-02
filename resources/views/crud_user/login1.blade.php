@extends('dashboardlogin')

@section('content')
    <div class="container">
        <div class="nav-bar">
            <a href="#">Home</a> | <a href="#">Đăng nhập</a> | <a href="#">Đăng ký</a>
        </div>
        
        <div class="login-form">
            <h2>Màn hình đăng nhập</h2>
            
            <form method="POST" action="{{ route('user.authUser') }}">
                @csrf
                <div class="form-group">
                    <label for="name" id="name" name="name">Username</label>
                    <input type="text" id="name" name="name">
                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="password" id="password" name="password">Mật khẩu</label>
                    <input type="password" id="password" name="password">
                    @if ($errors->has('password'))
                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                
                <div class="remember-me">
                    <input type="checkbox" id="remember" name="remember" checked>
                    <label for="remember">Ghi nhớ đăng nhập</label>
                </div>
                
                <div class="button-group">
                    <a href="#" class="forgot-password">Quên mật khẩu</a>
                    <button class="login-button" type="submit">Đăng nhập</button>
                </div>
            </form>
        </div>
        
        <div class="footer">
            Lập trình web @01/2024
        </div>
    </div>
@endsection
</body>
</html>