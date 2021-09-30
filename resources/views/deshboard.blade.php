<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
            <h4>WELCOME to Dashboard</h4>
        </div>
        <table class="table">
            <thead>
                {{-- <th>Id</th> --}}
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
                
            </thead>
            <tbody>
                <tr>
                    {{-- <td>{{$data->id}}</td> --}}
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td><a href="logout" class="btn btn-dark">logout</a></td>
                    {{-- <td><a href="logout">logout</a></td> --}}
                </tr>
            </tbody>
        </table>
        <br>
        <br>
        
        <h4>Memebers in Department</h4>
        <div class="container">
            <a href="/registration" class="btn btn-primary">Create</a>
            <a href="/CreateRole" class="btn btn-primary">New Role</a>
            <a href="/rolesmanagment" class="btn btn-primary">Roles Management</a>
        </div>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>role</th>
                <th>Action</th>
                
            </thead>
            <tbody>
            
            @foreach($User as $mem)
            <tbody>
                <tr>
                    <td>{{$mem['id']}}</td>
                    <td>{{$mem['name']}}</td>
                    <td>{{$mem['email']}}</td>
                    <td>{{$mem['role']}}</td>
                    <td><a href={{'delete/'.$mem['id']}} class="btn btn-danger">Delete</a>
                        
                        <a href={{'Show/'.$mem['id']}} class="btn btn-warning">Show</a>
                        <a href={{'edit/'.$mem['id']}} class="btn btn-info">Edit</a></td>
                    {{-- <td>{{$mem['email']}}</td> --}}
                </tr>
            </tbody>
            @endforeach

            
            
  
    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</html>