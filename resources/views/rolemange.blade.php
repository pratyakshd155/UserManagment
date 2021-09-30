<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Role Maagment</title>
</head>
<body>
    
    
<div class="conatiner ">
    
        <h4>Roles in Department</h4>
        <a href="/deshboard" class="btn btn-primary">Dashboard</a>
        @if(Session::has('Fail'))
    <div class="alert alert-danger">{{Session::get('Fail')}}</div>
    @endif
    
    <table class="table">
        <thead>
            <th>No.</th>
            <th>role</th>
            <th>Action</th>
        </thead>
        <tbody>
        
        <?php
        $count = 1;
        ?>
        @foreach ($mem as $item)
        <tbody>
            <tr>
                
                <td> {{$count}}  </td>
                <td>{{$item['role']}}</td>
                
                <td><a href={{'deleterole/'.$item['id']}} class="btn btn-danger">Delete</a>
                    
                    <a href={{'Show/'.$item['id']}} class="btn btn-warning">Show</a>
                    <a href={{'edit/'.$item['id']}} class="btn btn-info">Edit</a></td>
                {{-- <td>{{$mem['email']}}</td> --}}
            </tr>
        </tbody>
        <?php
        $count++;
        ?>
        @endforeach
        
    </table>

</div> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>


</html>