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
<form method="post">
    @csrf
    <h3 style="color: red">Calculator</h3>
    <input type="number" name="firstNumber">
    <input type="number" name="secondNumber">
    <br>
    <button type="submit" name="operator" value="+">+</button>
    <button type="submit" name="operator" value="-">-</button>
    <button type="submit" name="operator" value="x">x</button>
    <button type="submit" name="operator" value="/">/</button>
</form>
    @if(!empty($result))
    Result:{{$result}}
    @endif
</body>
</html>