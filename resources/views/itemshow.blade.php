<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table border=2 align=center>
    <thead>
        <tr>
            <th>name</th> 
            <th>price</th> 
            <th>image</th>  
            <th>action</th>  
        </tr>
    </thead>
    <tbody>
        @foreach($items as $i)

            <tr>

            <td>{{$i->name}}</td>
            <td>{{$i->price}}</td>
            <td><img src="{{asset('storage/uploads/'.$i->image)}}" alt="" height="100px" width="100px"></td>
            <td>
            <a href="/edititem/{{$i->id}}"><button>edit</button></a>
               <a href="/deleteitem/{{$i->id}}"><button>delete</button></a>
            </tr>


        @endforeach
    </tbody>


</table>


</body>
</html>