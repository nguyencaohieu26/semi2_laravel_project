<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dang ky</title>
</head>
<body>
    <div>
        <form action="{{route('get-info')}}" method="post" class="d-flex">
            @csrf
            <div>
                Email <input type="text" name="email" aria-label="username">
            </div>
            <div>
                Password <input type="password" name="password" aria-label="password">
            </div>
            <button>Submit</button>
        </form>
    </div>
</body>
</html>
