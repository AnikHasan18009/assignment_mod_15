<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
  
        <h1>Edit Post</h1>
   
        <form method="POST" action="{{route('post.update', $post->id)}}">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="name">#Id:</label>
              <input readonly type="text" id="id" name="id" class="form-control" value="{{$post->id}}">
            </div>
            <div class="form-group">
    <label for="name">Author Name:</label>
    <input type="text" id="name" name="author" class="form-control" value="{{$post->author}}">
            </div>
            <div class="form-group">
              <label for="title">Post Title:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{$post->title}}">
            </div>
            <div class="form-group">
              <label for="content">Post Content:</label>
              <input type="text" id="content" name="content" class="form-control" value="{{$post->content}}">
          </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Edit Post</button>
            </div>
        </form>
    </div>
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
</body>
</html>



