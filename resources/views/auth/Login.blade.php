<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="conatiner mt-5 text-center">
        <h2>Login YourSelf Here!</h2>
    </div>
    <div class="container">
    <form action=" {{route('login-user')}} " method="POST">
      @if(Session::has('Success'))
      <div class="alert alert-success">{{Session::get('Success')}}</div>
      @endif
      @if(Session::has('Fail'))
      <div class="alert alert-danger">{{Session::get('Fail')}}</div>
      @endif
      @csrf
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email"id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="email">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <br>
  <a href="registration">New User!!! Click here for registration</a>
</form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>