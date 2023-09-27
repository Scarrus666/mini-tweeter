
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
    <div class="container">

        <h1>Message Form</h1>

        <form action="/tweets/update/{{ $tweet->id }}" method="POST">
            @csrf

            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $tweet->title }}">

            <label for="text">Message:</label>
            <textarea id="text" name="text" rows="4" cols="50" >{{ $tweet->text }}</textarea><br>

            <button class="viewButton" type="submit" value="Submit">Post Tweet</button>
        </form> 
    </div>
</body>
</html>

