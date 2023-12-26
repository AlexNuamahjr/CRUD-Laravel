<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Home Page</h1>
    <div class="container">
        <table class="table table-hover">
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Username</th>
                <th>Age</th>
            </tr>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->first_name}}</td>
                    <td>{{$client->lastname}}</td>
                    <td>{{$client->user_name}}</td>
                    <td>{{$client->age}}</td>
                    <td><a href="{{route('clients.edit', ['client' => $client])}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Edit</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
