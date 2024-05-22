<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<center>
<h1>Data Received !</h1>

<table  border="1px">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Image</th>
        <th>Delete</th>
    </tr>
    @foreach($pro as $pro)
    <tr>
        <td>{{$pro->title}}</td>
        <td>{{$pro->description}}</td>
        <td><img height="200" width="100" src="product/{{$pro->image}}"></td>
        <td>
    <a class="btn btn-danger" href="{{url('delete_add_product',$pro->id)}}">Delete</a>
</td>

    </tr>

</table>
</center>
    @endforeach

   
</body>
</html>