<DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style01.css">
    <script defer src="JS/index.js"></script>
</head>

<body>
    <div class="container">
    
        <form id="form" action="signin.php" method="post">
            <h1>Registration</h1>
            <div class="input-control">
                <label for="username">Username</label>
                <input id="username" name="username" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="email">Email</label>
                <input id="email" name="email" type="text">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password">Password</label>
                <input id="password" name="password" type="password">
                <div class="error"></div>
            </div>
            <div class="input-control">
                <label for="password2">Password again</label>
                <input id="password2" name="password2" type="password">
                <div class="error"></div>
            </div>
            <label for="checkbox"></label>
            <input id="input-control" type="checkbox" name="iagree" >I agree Terms & Conditions
            <div class="error"></div>
            
            <button type="submit">Sign Up</button>
            <p>Already have account?<a href="Login.php">Login</a></p>
        </form>
    </div>
</body>

</html>