<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="/masuk">
        @csrf
        <div>
            <label for="email">email</label>
            <input type="text" id="email" name="email" required>
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" id="password" name="password" required>
        </div>
            <button type="submit">Masuk</button>
        </div>
    </form>
</body>
</html>