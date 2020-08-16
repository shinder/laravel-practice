<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title') my website @show</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
</head>
<body>
@section('navbar')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/customer/create">新增客戶</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/customer">客戶列表</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@show
<div class="container">
    @section('content')
        <p>hi</p>
    @show
</div>
<script src="/js/jquery-3.5.1.js"></script>
<script src="/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
