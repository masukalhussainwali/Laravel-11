<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Default Title')</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
            position: relative;
            display: inline-block;
        }
        .close-btn {
            cursor: pointer;
            color: #900;
            margin-left: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>@yield('header')</h1>
    @yield('content')
</div>
</body>
</html>
