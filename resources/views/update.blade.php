<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Update</title>
</head>
<body>
    <div class="container mt-5 ">
        <h2>Update </h2>
    </div>
    <div class="container mt-2">
        <form action="/edit" method="POST">
            @csrf
            <input type="hidden" name="id" value={{$data['id']}}>
            <input type="name" name="name" value={{$data['name']}}> <br> <br>
            <input type="email" name="email" value={{$data['email']}}> <br> <br>
                <select name="role" id="role">
                    @foreach ($mem as $item)
                    <option value="{{$item->role}}">{{$item->role}}</option>  
                    @endforeach
                </select>
            
            <button class="btn btn-primary">Submit</button> <br> <br>
            <a href="/deshboard" class="btn btn-dark">Close</a>

        </form>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</html>