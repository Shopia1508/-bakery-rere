<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
</head>
<body>
    <h2>Login Admin</h2>

    <form action="/admin/index" method="GET">
        @csrf
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Login</button>

        @if ($errors->any())
            <p style="color:rgb(255, 237, 176)">{{ $errors->first() }}</p>
        @endif
    </form>

</body>
</html>
