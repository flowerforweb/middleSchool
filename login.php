<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8c35e77f87.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/accuil/header.css">
    <link rel="stylesheet" href="auth/auth.css">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div class="header  pos-rel">
            <div class="inner">
                <div class="brand">
                    <i>
                        <em>F</em>lower <em>S</em>pring
                    </i>
                </div>
                <nav class="nav">
                    <ul class="main-nav">
                        <li>
                            <a href="/" class="li-link">
                                <i class="fas fa-home"></i> Accuil
                            </a>
                        </li>
                        <li class="drop-li">
                            <div class="drop niveau">
                                <div class="toggle">
                                    <span>
                                        <i class="fas fa-users"></i> Cours
                                    </span>
                                    <span>
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                                <div class="list" >
                                    <ul>
                                        <li>
                                            <a href="{{route('coursesView')}}">
                                                Deuxieme
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                troisieme
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('coursesView')}}">
                                                Tous
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="drop-li">
                            <div class="drop categories">
                                <div class="toggle">
                                    <span>
                                        <i class="fas fa-atom"></i> Categorie
                                    </span>
                                    <span>
                                        <i class="fas fa-caret-down"></i>
                                    </span>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Science
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                mathimatiques
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="/" class="li-link">
                                <i class="fas fa-envelope"></i> Contact us
                            </a>
                        </li>
                        <li>
                            <a href="#" class="li-link">
                                About us
                            </a>
                        </li>
                    </ul>
                    <div class="sec-nav">
                        <div class="auth">
                            <button id="logDrop">
                                connexion or inscrire <i class="fas fa-caret-down"></i>
                            </button>
                            <div class="auth-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('login')}}" class="log">
                                            Connexion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}" class="log">
                                            s'inscrire
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="auth-container log-con">
            <div class="inner">
                <div class="auth-header">
                    <i class="fas fa-sign-in-alt"></i>
                    <h2>
                        Connexion
                    </h2>
                </div>
                
                <form action="/login" class="log-form" method="post">
                    <div class="errors">
                        <ul>
                        </ul>
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
                    <div class="already">
                        tu n'a pas un conte? <a href="#">inscrire</a>
                    </div>
                    <div class="sub">
                        <button type="submit">
                            connexion
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