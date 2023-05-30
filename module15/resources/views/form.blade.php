<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">

</head>
<body>
    <div class="container">
  
        <h1>Registration Form</h1>
   
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        <h2>{{session('success')}}</h2>
    </div>
      @endif
   
        <form method="POST" action="form/submit">
  
            @csrf
  
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="pass">Password:</label>
              <input type="password" id="pass" name="password" class="form-control" placeholder="Password">
          </div>
            <div class="form-group">
                <button class="btn btn-success btn-submit">Submit</button>
            </div>
        </form>
    </div>
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
</body>
</html>