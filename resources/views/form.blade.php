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
    <form action="/submit" method="post" enctype="multipart/form-data">
        @csrf 
        <input type="text" placeholder="Name" name='name'>
        <input type="email" placeholder="Mail" name='email'>
        <input type="file" name='file' >
        <!-- <input type="text" placeholder="gender">
        <input type="number" placeholder="age">
         -->


        <button>Submit</button>

    </form>
</body>
</html>