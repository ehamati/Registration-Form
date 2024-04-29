<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            color: #666;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            background-color: #f9f9f9;
            color: #333;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus {
            outline: none;
            border-color: #7c4dff;
        }
        input[type="submit"] {
            background-color: #7c4dff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #6a1b9a;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blood Donation Camp</h1>
        <h2>Registration Form</h2>
        <form action="connect.php" method="POST">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" required><br>

            <label for="phone">Phone</label><br>
            <input type="tel" name="phone" id="phone" required><br>

            <label for="bgroup">Blood Group</label><br>
            <input type="text" name="bgroup" id="bgroup" required><br>

            <input type="submit" name="submit" id="submit" value="Submit">
        </form>
    </div>
</body>
</html>
