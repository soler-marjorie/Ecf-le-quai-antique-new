<?php
   require _ROOTPATH_.'\templates\header.php';
?>

<section class="container register">
    <h2>Inscription</h2>

    <form class="row" id="register-form" method="POST" action="">

        <div class="form-group col-md-3">
            <label for="surname">Nom</label>
            <input type="text" name="surname" id="surname" class="form-control" placeholder="Nom de famille" required="required" autocomplete="off">
        </div>
        
        <div class="form-group col-md-3">
            <label for="name">Prénom</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
        </div>

        <div class="form-group col-md-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
            
        <div class="form-group col-md-3">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" class="form-control" placeholder="Entrez le mot de passe" required="required" autocomplete="off">
        </div>

        <div class="form-group col-md-3">
            <label for="confpassword">Confirmation du mot de passe</label>
            <input type="password" name="confpassword" class="form-control" placeholder="Confirmez le mot de passe" required="required" autocomplete="off">
        </div>

        <div class="button">
            <button id="submit" type="submit" value="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    
        
</section>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>