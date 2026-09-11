<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        username:
        <input type="text" name="username">
        password:
        <input type="password" name="pass" id="">
        <br>
        <button type="submit">Send</button>
    </form>
</body>
</html>