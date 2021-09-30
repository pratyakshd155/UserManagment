<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="conatiner mt-5 text-center">
        <h2>Register YourSelf Here!</h2>
    </div>
    <div class="container">
    <form action=" {{route('register-user')}} " method="POST">
      @if(Session::has('Success'))
      <div class="alert alert-success">{{Session::get('Success')}}</div>
      @endif
      @if(Session::has('Fail'))
      <div class="alert alert-danger">{{Session::get('Fail')}}</div>
      @endif
     @csrf 
  <div class="mb-3">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" class="form-control"  value=" {{old('name')}} "id="name" name="name" >
    <span class="text-danger">@error("name"){{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" value=" {{old('email')}} " id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    <span class="text-danger">@error("email") {{$message}} @enderror</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    <span class="text-danger">@error("password") {{$message}} @enderror</span>
  </div>
  <select name="role" id="role">
    <label for="role" class="form-label">Select Role</label>
    @foreach ($mem as $item)
    <option value=" {{$item->role}} ">{{$item->role}}</option>  
    @endforeach
  </select>
  {{-- <form action=" {{route('role-user')}} ">
      <div class="mb-3"> --}}
       
    {{-- </form> --}}
    <br>
    <button type="submit" class="btn btn-primary">Submit</button>
    <br>
    <a href="login">Already A User !! Login here</a> <br> <br>
    <a href="/deshboard">If You are Already Logged In</a>
  </div>
  




</form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>