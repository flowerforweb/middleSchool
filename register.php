<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8c35e77f87.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="./public/css/accuil/header.css">
    <link rel="stylesheet" href="auth/auth.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <x-header a="guest"/>
        <div class="auth-container reg-con">
            <div class="inner">
                <div class="auth-header">
                    <i class="fas fa-sign-in-alt"></i>
                    <h2>
                        creé nouveau compte
                    </h2>
                </div>
                
                <form action="/register" class="reg-form" method="post">
                    <div class="errors">
                        <ul>
                        </ul>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" id="name" placeholder="Ton Nom" required>
                        <span style="font-family : cursive">X</span>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="Ton Email" required>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Ton Password" required>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="inpt">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                        <i class="fas fa-check i"></i>
                    </div>
                    <div class="already">
                        tu a un conte? <a href="#">connexion</a>
                    </div>
                    <div class="sub">
                        <button type="submit">
                            inscrire
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./public/js/header.js"></script>
    <script src="./public/js/helpers.js"></script>
</body>
</html>