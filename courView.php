<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <x-require-links/>
    <link rel="stylesheet" href="{{asset('./css/accuil/header.css')}}">
    <link rel="stylesheet" href="{{asset('./css/auth/courView.css')}}">
    <title>View Cour</title>
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
                                            <a href="courses">
                                                Deuxieme
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                troisieme
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/courses">
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
                                        <a href="/auth/login" class="log">
                                            Connexion
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/auth/register" class="log">
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

        <div class="cour-details">
            <div class="detail">
                <span class="key">
                    Added :
                </span>
                <span class="value">
                    21/21/2002
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    niveau :
                </span>
                <span class="value">
                    deuxieme
                </span>
            </div>
            <div class="detail">
                <span class="key">
                    enseignant :
                </span>
                <span class="value">
                    dr. Jack Sparo
                </span>
            </div>
        </div>
        <div class="cour-content">
            <div class="cour-header">
                <h4>
                    Cour Content
                </h4>
            </div>
            <div class="cour-body">
                <div class="cour-section">
    <div class="toggler">
        <span>
            1
        </span>
        <h4>
            Name of a lesson
        </h4>
        <i class="fas fa-plus toggle"></i>
        <i class="fas fa-minus toggle"></i>
    </div>
    <div class="content">
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
    </div>
    
</div>
<div class="cour-section">
    <div class="toggler">
        <span>
            1
        </span>
        <h4>
            Name of a lesson
        </h4>
        <i class="fas fa-plus toggle"></i>
        <i class="fas fa-minus toggle"></i>
    </div>
    <div class="content">
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
    </div>
    
</div>
<div class="cour-section">
    <div class="toggler">
        <span>
            1
        </span>
        <h4>
            Name of a lesson
        </h4>
        <i class="fas fa-plus toggle"></i>
        <i class="fas fa-minus toggle"></i>
    </div>
    <div class="content">
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
    </div>
    
</div>
<div class="cour-section">
    <div class="toggler">
        <span>
            1
        </span>
        <h4>
            Name of a lesson
        </h4>
        <i class="fas fa-plus toggle"></i>
        <i class="fas fa-minus toggle"></i>
    </div>
    <div class="content">
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
        <div class="lesson-video">
            <div class="vid-header">
                <h4>
                    Title  : 
                    <span>
                        This is a title for video
                    </span>
                </h4>
            </div>
            <div class="vid-body">
                <div class="vid-pic">
                    <img src="https://www.gettyimages.fr/gi-resources/images/500px/983703508.jpg" alt="/">
                    <i class="fas fa-play"></i>
                </div>
                <div class="vid-details">
                <div class="vid-detail">
                        <span>
                            type : 
                        </span>
                        <span>
                            video
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>
                            vu : 
                        </span>
                        <span>
                            100
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>duree : </span>
                        <span>
                            02:25
                        </span>
                    </div>
                    <div class="vid-detail">
                        <span>size : </span>
                        <span>
                            10mo
                        </span>
                    </div>
                </div>
            </div>
            <div class="down">
                <a href="#">
                    Watch
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    Download
                </a>
            </div>
        </div>
    </div>
    
</div>
            </div>
        </div>
        <div class="test">
            <div class="go">
                <h4>
                    Do the QCM test 
                </h4>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fa-brands fa-golang"></i>
                </a>
            </div>
        </div>
        <footer>
    <div class="left-footer">
        left
    </div>
    <div class="right-footer">
        right
    </div>
</footer>
    </div>
    <script src="./public/js/header.js')}}"></script>
    <script>
        $(function(){
            $('.fa-plus').click(function(){
                $('.cour-section').removeClass('show');
                $(this).parent().parent().addClass('show');
            })
            $('.fa-minus').click(function(){
                $(this).parent().parent().removeClass('show');
            })
        })
    </script>
</body>
</html>