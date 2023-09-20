<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Tweeter</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        a {
            display: block;
            margin: 20px 0;
            font-size: 18px;
            text-decoration: none;
            color: #4caf50;
        }
    </style>

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
            <p>{{ $tweet->text }}
        </div>
    @endforeach

</body>
</html>

