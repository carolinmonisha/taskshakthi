<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""  method="post" enctype="multipart/form-data">
        @csrf
        <input type='text' name='name' placeholder='name'>
        <input type='number' name='price' placeholder='price'>
        <input type='file' name='image'>
        <button>submit</button>
    </form>
    <a href="/showgoat"><button>SHOW</button></a>
    
</body>
</html>