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
    <h1>Product Form</h1>
    <form method="post" action="{{route('product.store')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Product Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
         
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Descripation</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="descripation">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="number" class="form-control" id="exampleInputPassword1" name="price">
        </div>
       
        <button type="submit" class="btn btn-primary" value="SUBMIT">Submit</button>
      </form>
</body>
</html>