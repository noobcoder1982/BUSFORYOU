<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url('signupback.jpg') no-repeat;
    background-size: cover;
    background-position: center;
}

.wrapper {
    width: 420px;
    background: transparent;
    border: 1.5px solid rgba(255, 255, 255, .2);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    backdrop-filter: blur(100px);
    color: #fff;
    border-radius: 10px;
    padding: 30px 40px;
}

.wrapper h1 {
    font-size: 36px;
    text-align: center;
    margin-bottom: 30px;
}

.wrapper .otp {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.wrapper .input-box {
    width: 100%;
    margin: 20px 0;
}

.input-box input[type="text"] {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: #fff;
    padding-right: 40px;
    padding-left: 20px;
}

.input-box input[type="text"]::placeholder {
    color: #fff;
}

.input-box input[type="submit"] {
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}

.login-link {
    font-size: 14.5px;
    text-align: center;
    margin-top: 20px;
}

.login-link p, .login-link a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
}

.login-link a:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="wrapper">
        <div class="ot">
            <form action="" method=post>
                <div class="input-box">
                    <input type="text" name="op" placeholder="Enter OTP" autocomplete="off" required>

                </div>
                <div class="input-box">
                    <input type="submit" value="verify" name="verify">
                </div>
            </form>
        </div>
    </div>
</body>
</html>