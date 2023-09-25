<!DOCTYPE html>
<html lang="en">
<head>
    @extends('/components/app')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Tweeter von Alex Iordachel</title>
    @vite('resources/css/app.css')
</head>
<body>

    

    <div class="container">

        <h1>Welcome to Mini-Tweeter</h1>

        <a href="{{url('create')}}">Submit Message</a>
        <a href="{{url('show')}}">View/Delete Messages</a>

    </div>

    @foreach ($tweets as $tweet)
        <div class="container">

            <h3>{{ $tweet->title }}</h3>
            <p>{{ $tweet->text }}</p>
            <p>Updated at {{ $tweet->updated_at }}</p>

            <a href="/tweets/{{$tweet->id}}">
                <button class="viewButton">View complete Message</button>
            </a>
            
        </div>
    @endforeach

</body>
</html>

