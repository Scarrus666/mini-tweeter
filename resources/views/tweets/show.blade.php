<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View/Delete Messages - Mini-Tweeter</title>
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
        .message {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #fff;
        }
        .message h2 {
            margin-top: 0;
        }
        .deleteButton {
            background-color: #ff6f61;
            border: none;
            color: #fff;
            padding: 8px 16px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
        }
        .deleteButton:hover {
            background-color: #ff4d3d;
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>View/Delete Messages</h1>

        <!-- Example Message -->
        <div class="message">
            <h2>Title of Message</h2>
            <p>Content of the message goes here.</p>
            <button class="deleteButton">Delete</button>
        </div>

        <!-- Add more messages as needed -->

    </div>

    <script>
        // JavaScript for handling message deletion
        document.querySelectorAll('.deleteButton').forEach(button => {
            button.addEventListener('click', function() {
                this.parentNode.remove();
            });
        });
    </script>

</body>
</html>
