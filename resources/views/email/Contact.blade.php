<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>{{$subject}}</title>
</head>
<body>
    <div class="bg">
        <h1>{{$name}}</h1>
        <br>
        <h2>{{$email}}</h2>
        <div class="content">
            <p>{{$messages}}</p>
        </div>
    </div>
</body>
</html>