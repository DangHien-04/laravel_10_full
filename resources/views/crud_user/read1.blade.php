@extends('dashboardlist')
@section('content')
<div class="container">
    <div class="nav-bar">
        <a href="#">Home</a> | <a href="#">Đăng xuất</a>
    </div>

    <div class="detail-container">
        <h2>Màn hình chi tiết</h2>

        <div class="detail-row">
            <div class="detail-label">Username</div>
            <div class="detail-value"><td>{{$messi->name}}</td></div>
        </div>

        <div class="detail-row">
            <div class="detail-label">Email</div>
            <div class="detail-value">  <td>{{$messi->email}}</td></div>
        </div>

        
      

        <button class="edit-button">Chỉnh sửa</button>
    </div>

    <div class="footer">
        Lập trình web @01/2024
    </div>
</div>
@endsection