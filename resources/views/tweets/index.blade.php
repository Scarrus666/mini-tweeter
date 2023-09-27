<!DOCTYPE html>
<html lang="en">
<head>
    @extends('/components/layout')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Tweeter von Alex Iordachel</title>
    @vite('resources/css/app.css')
</head>
<body>

    @section('header')
    @endsection

{{--        OLD CODE 
            <div class="container">
            <h1>Welcome to Mini-Tweeter</h1>
            <a href="{{url('create')}}">Submit Message</a>
            <a href="{{url('show')}}">View/Delete Messages</a>
        </div> --}}

    @section('content')

        <div class="user">
            <p>FEED VON</p>
            <h1>Alexandru Iordachel</h1>
        </div>

        @foreach ($tweets as $tweet)
        <div class="container">
            
            <p class="date">{{ $tweet->updated_at }}</p>
            <h3>{{ $tweet->title }}</h3>
            <p>{{ $tweet->text }}</p>
            
            <a href="/tweets/{{$tweet->id}}">
                <button class="viewButton">View complete Message</button>
            </a>
            
        </div>
        @endforeach
    @endsection

    @section('footer')
    @endsection

</body>
</html>

