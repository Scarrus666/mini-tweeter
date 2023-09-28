<!DOCTYPE html>
<html lang="en">
<head>
    @extends('/components/layout')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Form</title>
    @vite('resources/css/app.css')
</head>
<body>

    @section('header')
    @endsection

    @section('content')

    <div class="user">
        <br><br>
        <h1>Post a Tweet</h1>
        <h6>What do you want to Tweet?</h6>
    </div>

    <div class="container">
        <form action="/tweets/store" method="post" class="form">
            @csrf
            <label for="title">Title</label>
            <input type="text" id="title" name="title">

            <label for="text">Text</label>
            <textarea id="text" name="text" rows="4" cols="50" ></textarea>

            <button class="create-button" type="submit" value="Submit">Post Tweet</button>
        </form>

    </div>

    @if ($errors->any())
        <div class="container">
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @endsection

    @section('footer')
    @endsection
    
</body>
</html>