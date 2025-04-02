<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách user</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .container {
            width: 100%;
            max-width: 800px;
            border: 1px solid #ccc;
            padding: 20px;
        }
        
        .nav-bar {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 15px;
            text-align: center;
        }
        
        .nav-bar a {
            text-decoration: none;
            color: #000;
            margin: 0 5px;
        }
        
        .user-list-title {
            text-align: center;
            color: #555;
            margin: 20px 0;
        }
        
        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        
        .user-table th, .user-table td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        
        .user-table th {
            background-color: #f2f2f2;
        }
        
        .user-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        
        .action-links a {
            text-decoration: none;
            color: #000;
            margin: 0 5px;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }
        
        .pagination a, .pagination span {
            padding: 8px 12px;
            margin: 0 5px;
            border: 1px solid #ddd;
            color: #0d6efd;
            text-decoration: none;
        }
        
        .pagination span.active {
            background-color: #0d6efd;
            color: white;
            border-color: #0d6efd;
        }
        
        .footer {
            border: 1px solid #ccc;
            padding: 10px;
            margin-top: 15px;
            text-align: center;
            font-size: 14px;
            color: #555;
            width: 100%;
        }
    </style>
</head>
<body>
<!-- <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">
        <a class="navbar-brand mr-auto" href="#">Laravel Training</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.createUser') }}">Create user</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> -->
@yield('content')
</body>
</html>
