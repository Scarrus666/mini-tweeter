<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    @vite('resources/css/app.css')
    <title>Message Form</title>
</head>
<body>

    <div class="container">

        <h1>Message Form</h1>

        <form action="/tweets/store" method="post">
            @csrf

            <label for="title">Title:</label>
            <input type="text" id="title" name="title">

            <label for="text">Message:</label>
            <textarea id="text" name="text" rows="4" cols="50" ></textarea><br>

            <button class="viewButton" type="submit" value="Submit">Post Tweet</button>
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


</body>
</html>