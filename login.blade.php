<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
 <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #7b2ff7, #feb47b);
}

.login-container {
    background: white;
    width: 700px;
    border-radius: 10px;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    display: flex;
    overflow: hidden;
}

.login-box {
    display: flex;
    width: 100%;
}

.login-left {
    background: #f9f9f9;
    padding: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 40%;
}

.login-image {
    width: 100px;
    height: auto;
}

.login-right {
    width: 60%;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.login-right h2 {
    font-weight: 600;
    margin-bottom: 30px;
    color: #333;
}

.input-group {
    margin-bottom: 20px;
}

.input-group input {
    width: 100%;
    padding: 15px;
    border-radius: 25px;
    border: 1px solid #ddd;
    outline: none;
    font-size: 16px;
    color: #333;
    background: #f7f7f7;
    transition: all 0.3s;
}

.input-group input:focus {
    border-color: #7b2ff7;
    background: #fff;
}

.btn-login {
    width: 100%;
    padding: 15px;
    border-radius: 25px;
    border: none;
    background-color: #28a745;
    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-login:hover {
    background-color: #218838;
}

.links, .create-account {
    text-align: center;
    margin-top: 15px;
}

.links a, .create-account a {
    text-decoration: none;
    color: #555;
    font-size: 14px;
}

.create-account a {
    font-weight: 600;
}

.links a:hover, .create-account a:hover {
    color: #7b2ff7;
}

@media (max-width: 768px) {
    .login-container {
        flex-direction: column;
        width: 90%;
    }

    .login-left, .login-right {
        width: 100%;
    }

    .login-left {
        padding: 20px;
    }
}

 </style>
 <script>
function redirectToHome() {
    window.location.href = "{{ url('/web') }}"; // Redirect to the homepage
}
</script>
<body>

    <div class="login-container">
        <div class="login-box">
            <div class="login-left">
                <img src="images/my-account.png" alt="Login Image" class="login-image">
            </div>
            <div class="login-right">
                <h2>Member Login</h2>
                <form>
                    <div class="input-group">
                        <input type="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" required>
                    </div>
                    <button class="btn-login" type="button" onclick="redirectToHome()">LOGIN</button>
                    <div class="links">
                        <a href="#">Forgot Username / Password?</a>
                    </div>
                    <div class="create-account">
                        <a href="#">Create your Account →</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
