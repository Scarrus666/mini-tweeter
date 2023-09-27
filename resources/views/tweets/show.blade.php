<!DOCTYPE html>
<html lang="en">
<head>
    @extends('/components/layout')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View/Delete Messages - Mini-Tweeter</title>
    @vite('resources/css/app.css')
</head>
<body>

    @section('header')
    @endsection

    @section('content')
    <div class="user">
        <p>TWEET FROM {{ $tweet->updated_at }}</p>
        <br>
        <h1>{{ $tweet->title }}</h1>
        <p style="font-size: 24px;">{{ $tweet->text }} and this here is just some further text to see how long the line can get.</p>
        <button class="editButton" onclick="window.location='/tweets/edit/{{$tweet->id}}'">
            Edit Tweet
        </button>
        <form action="/tweets/{{$tweet->id}}" method="POST">
            <button class="editButton" onclick="window.location='/tweets/edit/{{$tweet->id}}'">
                Edit Tweet
            </button>
            @csrf
            @method('DELETE')
            <button type="submit" class="deleteButton">Delete Tweet</button>
        </form>
    </div>
    @endsection

    @section('footer')
    @endsection

{{--     <script>
        // JavaScript for handling message deletion
        document.querySelectorAll('.deleteButton').forEach(button => {
            button.addEventListener('click', function() {
                this.parentNode.remove();
            });
        });
    </script> --}}

</body>
</html>
