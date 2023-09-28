
<!DOCTYPE html>
<html lang="en">
<head>
    @extends('/components/layout')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="user">
        <br><br>
        <h1>Edit Tweet</h1>
    </div>

    <div class="container">

        <form action="/tweets/update/{{ $tweet->id }}" method="POST" class="form">
            @csrf

            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ $tweet->title }}">

            <label for="text">Text</label>
            <textarea id="text" name="text" rows="4" cols="50" >{{ $tweet->text }}</textarea><br>

            <button class="create-button" type="submit" value="Submit">Post Tweet</button>
        </form> 
    </div>
</body>
</html>

