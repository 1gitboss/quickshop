<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Activity</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: maroon;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        input[type=text],
        input[type=password],
        input[type=email] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: blue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div.form-container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
    
</head>

<body>
    <div class="container">
        <h3>Login Here!</h3>

        <div class="form-container">
            <form action="../actions/login_action.php" method="post">
                <label for="username">Email:</label>
                <input type="text" id="email" name="email" placeholder="Your email.." required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password.." required>

                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>

</html>
