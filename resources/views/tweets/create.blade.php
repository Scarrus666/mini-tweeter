<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message Form</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container 
        {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        h1 
        {
            color: #333;
        }
        label, textarea, input 
        {
            display: block;
            margin: 10px 0;
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] 
        {
            background-color: #4caf50;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="submit"]:hover 
        {
            background-color: #45a049;
        }
        @media (max-width: 600px) 
        {
            .container {
                padding: 20px;
            }
            label, textarea, input {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="container">

        <h1>Message Form</h1>

        <form action="/tweets" method="post">
            @csrf
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="text">Message:</label>
            <textarea id="text" name="text" rows="4" cols="50" required></textarea><br>

            <button type="submit" value="Submit">
        </form>

    </div>

</body>
</html>