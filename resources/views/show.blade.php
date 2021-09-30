<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Show</title>
</head>
<body>
    <div class="container mt-5">
        <h4>Details</h4>
        <table class="table">
            <thead>
                {{-- <th>Id</th> --}}
                <th>Name</th>
                <th>Email</th>
                <th>role</th>
                {{-- <th>Action</th> --}}
                
            </thead>
            <tbody>
                <tr>
                    {{-- <td>{{$data->id}}</td> --}}
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->role}}</td>
                   
                    <td><a href="/deshboard" class="btn btn-dark">Close</a></td>
                    {{-- <td><a href="logout">logout</a></td> --}}
                </tr>
            </tbody>
        </table>
    </div>


    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>