<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<section class="container connexion">
    <div class="row picture">
        <img src="assets\img\fondSiteAccueil.jpg" alt="">
    </div>

    <div class="row form">
        <form method="post" class="">

            <h2 class="text-center">Connexion</h2>    

            <div class="form-group col-md-8">
                <label for="form-email">Email</label>
                <input id="form-email" type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>

            <div class="form-group col-md-8">
                <label for="form-password">Mot de passe</label>
                <input id="form-password" type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
            </div>

            <div class="form-group button">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div> 

        </form>
    </div>
</section>

<div class="text-center inscription">
    <a href="./index.php?controller=user&action=inscription&id=1" class="btn btn-primary">S'inscrire</a>
</div>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>