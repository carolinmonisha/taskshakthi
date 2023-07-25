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
    <form action=""  method="post" enctype="multipart/form-data">
        @csrf 
        <input type='text' placeholder='productname' name='name'>
        <input type='number' placeholder='price' name='price'>
        <input type='file' name='file'>
        <button>submit</button>

    </form>
    <button>show</button>
</body>
</html>