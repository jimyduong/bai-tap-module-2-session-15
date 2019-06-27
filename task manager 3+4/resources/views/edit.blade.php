<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div style="width: 300px; height: auto" >
<form method="post" action="{{route('show.update',$customer->id)}}">
    @csrf
    <span>Name Customer:</span>
    <input type="text" name="name" value="{{$customer->name}}">
    <br>
    <span>Email:</span>
    <input type="text" name="email" value="{{$customer->email}}">
    <br>
    <span>Addess:</span>
    <input type="text" name="address" value="{{$customer->address}}">
    <br>
    <button type="submit">Edit</button>
</form>
</div>
<style>
    span {
        min-width: 120px;
        display: inline-block;
        margin-bottom: 5px;
    }
</style>
</body>
</html>