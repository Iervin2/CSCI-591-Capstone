<html>

<head>
    <meta charset="UTF-8">
    <title>GenCyber Login Page</title>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <style>
        body {
            font-family: 'Open Sans';
            font-size: 22px;
        }
    </style>
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <form>
                <div class="logo">
                    <img src="img/UofSC_Aiken_primary_RGB.png" alt="UofSC Aiken logo">
                </div>
                <div id="username" class="input-box">
                    <header class="u_name_hr">Username/Email:</header>
                    <br>
                    <input type="text" name="u_name" id="u_name" required>
                </div>
                <div id="password" class="input-box">
                    <header class="p_word_hr">Password:</head>
                        <br>
                        <input type="text" name="p_word" id="p_word" required>
                </div>
                <div id="forgot">
                    <a href="#">Forgot Password?</a>
                </div>
                <div id="log_in" class="input-box">
                    <input type="button" class="btn" name="login" id="login" value="Login">
                </div>
            </form>
        </div>
    </div>
    </div>
</body>

</html>