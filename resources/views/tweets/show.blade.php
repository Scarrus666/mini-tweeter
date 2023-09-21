<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View/Delete Messages - Mini-Tweeter</title>
    @vite('resources/css/app.css')
</head>
<body>

    <div class="container">

        <h1>View/Delete Message</h1>

        <div class="message">
            <h2>{{ $tweet->title }}</h2>
            <p>{{ $tweet->text }}</p>

            <form action="/tweets/{{$tweet->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="deleteButton">Delete Tweet</button>
            </form>
        </div>

    </div>

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
