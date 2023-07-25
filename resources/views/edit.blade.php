<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form  method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name='name' value="{{$details[0]['name']}}">
        <input type="number" name='price' value="{{$details[0]['price']}}">
        <img src="{{asset('storage/uploads/'.$details[0]['image'])}}" alt="" width="100px" height="100px">
        <input type="file" name='image' >
        <button>submit</button>
    </form>
    
</body>
</html>