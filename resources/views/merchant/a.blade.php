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
    <form  method="post" action="{{ URL('test')  }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="pic">
        <input type="submit">点击
    </form>

</body>
</html>