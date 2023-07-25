<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif
    <form action="" method='post'>
        @csrf
        <input type="text" placeholder='username' name='name'>
        <input type="password" placeholder='password' name='password'>
        <button>submit</button>
       
    </form>
</body>
</html>