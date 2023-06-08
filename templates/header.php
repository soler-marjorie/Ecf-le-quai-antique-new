<?php 
@session_start();

require_once 'layout.php' ?>

<body>  

    <!-- header -->
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">

            <!-- navigation -->
            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="./index.php?controller=home&action=show&id=1" class="nav-link px-2">Accueil</a></li>
                <li><a href="./index.php?controller=menu&action=show&id=1" class="nav-link px-2">La carte</a></li>
                <li><a href="./index.php?controller=contact&action=show&id=1" class="nav-link px-2">Contact</a></li>
            </ul>

            <!-- logo -->
            <div class="logo col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="./assets/img/logo.png" width="200" height="200"></img>
                </a>
            </div>

            <!-- log in and sign-up buttons -->
            <div class="col-md-3 text-end">
                <?php if(!isset($_SESSION["user"])) : ?>
                    <a href="./index.php?controller=user&action=connexion&id=1" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <button type="button" class="btn btn-outline-primary me-2">se connecter</button>
                    </a>
                <?php else: ?>
                    <a href="./index.php?controller=user&action=membre&id=1"><span>Mon profil</span></a>
                    <a href="./index.php?controller=user&action=deconnexion&id=1" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <button type="button" class="btn btn-outline-primary me-2">se déconnecter</button>  
                    </a>
                <?php endif; ?>
                
            </div>        
        </header>


        <!-- book button -->
        <div class="py-3 mb-4 ">
            <div class="container d-flex flex-wrap justify-content-center">
                <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                    <button type="button" class="btn btn-primary">Réserver</button>
                </a>
            </div>
        </div>
        
    </div>
<main>