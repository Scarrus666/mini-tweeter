<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succulent Massage Appointment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            margin-top: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        label, textarea, input {
            display: block;
            margin: 10px 0;
            width: calc(100% - 20px);
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        @media (max-width: 600px) {
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

        <h1>Succulent Massage Appointment</h1>

        <form action="#" method="post">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="time">Preferred Time:</label>
            <input type="time" id="time" name="time" required>

            <label for="message">Special Requests:</label>
            <textarea id="message" name="message" rows="4" cols="50"></textarea>

            <input type="submit" value="Submit">
        </form>

    </div>

</body>
</html>