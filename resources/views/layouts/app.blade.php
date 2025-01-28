<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('posts.index') }}">Home</a></li>
            <li><a href="{{ route('posts.create') }}">Create Post</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
