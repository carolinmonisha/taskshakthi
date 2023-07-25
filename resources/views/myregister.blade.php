<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/api/users" method='post'>
        @csrf
        <input type="text" placeholder='username' name='username'>
        <input type="email" placeholder='email' name='email'>
        <input type="password" placeholder='password' name='password'>
        <button>submit</button>

    </form>
</body>
</html>