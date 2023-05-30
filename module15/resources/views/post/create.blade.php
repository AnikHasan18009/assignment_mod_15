<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
  
        <h1>Create Post</h1>
   
        <form method="POST" action="{{route('post.store')}}">
  
            @csrf
  
            <div class="form-group">
                <label for="name">Author Name:</label>
                <input type="text" id="name" name="author" class="form-control" placeholder="Author Name">
            </div>
            <div class="form-group">
              <label for="title">Post Title:</label>
                <input type="text" id="title" name="title" class="form-control" placeholder="Post Title">
            </div>
            <div class="form-group">
              <label for="content">Post Content:</label>
              <input type="text" id="content" name="content" class="form-control" placeholder="Post content">
          </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Add Post</button>
            </div>
        </form>
    </div>
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
</body>
</html>



