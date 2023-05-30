<!DOCTYPE html>
<html>
<head>
    <title>edit product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
  
        <h1>Edit Product</h1>
   
        <form method="POST" action="../{{$product->id}}?_method=PUT">
  
            @csrf
            <div class="form-group">
              <label for="name">Id:</label>
              <input readonly type="text" id="id" name="id" class="form-control" value="{{$product->id}}">
          </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" value="{{$product->name}}">
            </div>
         
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea id="description" name="description" class="form-control">{{$product->description}}</textarea>
          </div>
            <div class="form-group mt-2">
                <button class="btn btn-success btn-submit">Update</button>
            </div>
        </form>
    </div>
</body>
</html>