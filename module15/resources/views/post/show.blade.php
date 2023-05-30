<!DOCTYPE html>
<html>
<head>
    <title>Show Post</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
  
        <h1>Post</h1>
   
        <form>
            @csrf
            <div class="form-group">
              <label for="name">#Id:</label>
              <input readonly type="text" id="id" name="id" class="form-control" value="{{$post->id}}">
            </div>
            <div class="form-group">
    <label for="name">Author Name:</label>
    <input readonly type="text" id="name" name="author" class="form-control" value="{{$post->author}}">
            </div>
            <div class="form-group">
              <label for="title">Post Title:</label>
                <input readonly type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
              <label for="content">Post Content:</label>
              <input readonly type="text" id="content" name="content" class="form-control" value="{{$post->content}}">
          </div>
            <div class="form-group">
            <a class="btn btn-success stretched-link" href="{{route("post.index")}}">Return</a>
            </div>
        </form>
    </div>
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
</body>
</html>



