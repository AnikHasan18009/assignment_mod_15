<!DOCTYPE html>
<html>
<head>
    <title>create product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
  
        <h1>Create Product</h1>
   
        <form method="POST" action="../products/store">
  
            @csrf
  
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
            </div>
         
            <div class="form-group">
              <label for="description">Description:</label>
              <textarea id="description" name="description" class="form-control" placeholder="Write Something.....">
              </textarea>
          </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>