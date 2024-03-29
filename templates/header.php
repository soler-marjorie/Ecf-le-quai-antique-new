<?php 
@session_start();

require_once 'layout.php' ?>

<body>  

    <!-- header -->

    <header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
        <!-- navigation -->
        <div class="navigation col-md-3 justify-content-start">
            <ul class="nav">
                <li><a href="./index.php?controller=home&action=show" class="nav-link px-2">Accueil</a></li>
                <li><a href="./index.php?controller=menu&action=show" class="nav-link px-2">La carte</a></li>
                <li><a href="./index.php?controller=contact&action=show" class="nav-link px-2">Contact</a></li>
            </ul>
        </div>
        
        

        <!-- logo -->
        <div class="logo col-md-3 justify-content-center">
            <a href="./index.php?controller=home&action=show&id=1" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="./assets/img/logo.png" width="200" height="200"></img>
            </a>
        </div>

        <!-- log in and sign-up buttons -->
        <div class="buttons col-md-3 justify-content-end">
            <div class="connexion">
                <?php if(!isset($_SESSION["user"])) : ?>
                    <a href="./index.php?controller=connexion&action=connexion" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <button type="button" class="btn btn-outline-primary me-2">se connecter</button>
                    </a>
                <?php else: ?>
                    <a href="./index.php?controller=user&action=membre"><button class="btn btn-outline-primary me-2">Mon espace</button></a>
                    <a href="./index.php?controller=connexion&action=deconnexion" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                        <span>se déconnecter</span>  
                    </a>
                <?php endif; ?>
            </div>
              
            <div>
                <a href="./index.php?controller=booking&action=booking" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                    <button type="button" class="btn btn-primary">Réserver</button>
                </a>
            </div>  
        </div>

    </header>
    

    <main>