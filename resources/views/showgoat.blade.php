 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <td>Name</td>
            <td>Price</td>
            <td>Image</td>
            <td>Make Changes</td>
        </thead>

        <tbody>
            @foreach($items as $goat )
            <td></td>
            @endforeach
        </tbody>
    </table>
</body>
</html>