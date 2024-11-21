<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Activity</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://unpkg.com/libphonenumber-js/bundle/libphonenumber-js.min.js"></script>

<style>
         body {
            background-color: blue;
        }
        .container {
            max-width: 600px; 
            margin: auto;
            padding: 20px;
        }

        input[type=text], input[type=password], input[type=email] {
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
        }

        select {
            padding: 10px;
            font-size: 16px; 
            border: 1px solid #ccc;
            border-radius: 5px; 
            margin-bottom: 10px; 
        }


        select option {
            padding: 10px;
        }

        select:focus {
            outline: none; 
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); 
        }

        input[type="file"] {
            margin-top: 10px; 
        }
    </style>
    
</head>

<body>
    <div class="container">
        <h3>Register Here!</h3>

        <div class="form-container">
            <form action="../actions/register_action.php" method="post" onsubmit="return validateForm()">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your email.." pattern="^[a-zA-Z0-9._%+-]+@(ashesi\.edu\.gh|aucampus\.onmicrosoft\.com)$" title="Please enter a valid email ending with '@ashesi.edu.gh' or '@aucampus.onmicrosoft.com'" required>

            <label for="password">Password</label>
            <input type="password" id="pass" name="password" placeholder="Your password.." required>

            <label for="country">Country</label>
            <input type="text" id="country" name="country" placeholder="Your country." required>

            <label for="city">City</label>
            <input type="text" id="city" name="city" placeholder="Your city.." required>

            <label for="contact_no">Contact Number</label>
            <input type="text" id="contact_no" name="contact_no" placeholder="Your contact number.." required>
            <input type="submit" value="Submit">
        </form>

        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('email').value;
            var regex = /^[a-zA-Z0-9._%+-]+@(ashesi\.edu\.gh|aucampus\.onmicrosoft\.com)$/;

            if (!regex.test(email)) {
                alert('Please enter a valid email ending with "@ashesi.edu.gh" or "@aucampus.onmicrosoft.com"');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
