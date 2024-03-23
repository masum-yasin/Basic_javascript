<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Product Name</th>
            <th scope="col">Descripation</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                
        
          <tr>
            <th scope="row">1</th>
            <td>{{$product->name}}</td>
            <td>{{$product->descripation}}</td>
            <td>{{$product->price}}</td>
            <td class="d-flex justify-between gap-2">
                <a href="{{route('product.edit',$product->id)}}"><i class="btn btn-success p-2">Edit</i></a>
                <a href="{{route('product.delete',$product->id)}}"><i class="btn btn-success p-2">Delete</i></a>
            </td>
          </tr>
          @endforeach
        
        </tbody>
      </table>
</body>
</html>