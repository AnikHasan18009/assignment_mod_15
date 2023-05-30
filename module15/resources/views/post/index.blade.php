
<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
  <div class="container p-3">
      <div class="row">
          <div class="col-md-12">
              <div class="row">
                  <div class="col-md-6">
                      <h2>Post Controller</h2>
                  </div>
                  <div class="col-md-6 text-end"> <a href="{{ route('post.create') }}" class="btn btn-info">Create New post</a></div>
              </div>

              @if (session('message'))
                  <h3 style="color:green">{{ session('message') }}</h3>
              @endif
          </div>

          <div class="col-md-12">

              <table class="table">
                  <thead>
                      <tr>
                          <td>#Id</td>
                          <td>title</td>
                          <td>content</td>
                          <td>author</td>
                          <td>action</td>
                      </tr>
                  </thead>
                  <tbody>
                     

                      @foreach ($posts as $post)
                          <tr>
                              <td>{{ $post->id }} </td>
                              <td>{{ $post->title }} </td>
                              <td>{{ $post->content }} </td>
                              <td>{{ $post->author }} </td>
                              <td>
                                  <div class="d-flex">
                                      <a href="{{ route('post.edit', $post->id) }}"
                                          class="btn btn-secondary rounded rounded-pill me-3">Edit</a>

              <form action="{{ route('post.destroy', $post->id) }}" method="post" onsubmit="return confirm('Are you sure you wnt to delete?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-warning rounded rounded-pill">Delete</button>
              </form>
              </div>

              </td>
            </tr>
              @endforeach
              </tbody>
              </table>

          </div>
      </div>

  </div>
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
</body>
</html>