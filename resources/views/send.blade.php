<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <form action="">
        <input type="text" placeholder='name' id='name'>
        <input type="password" placeholder='password' id='password'>
        <button type="button" onclick="myfun()">submit</button>
    </form>
    
</body>
<script>


function myfun(){
    
    $.ajax({
    url:'http://127.0.0.1:8000/api/users',
    type:'POST',
    data:{name:document.getElementById('name').value,
        password:document.getElementById('password').value},
    // dataType:'json',
    success:function(response){
        console.log(response)
    },
    error:function(xhr,status,error){
        console.log(status,error)
    }
})

}
$.ajax({
    url:'http://127.0.0.1:8000/api/users',
    type:'get',
    success:function(response){
        console.log(response)
    }
})


</script>
</html>