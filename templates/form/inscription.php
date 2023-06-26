<?php
   require _ROOTPATH_.'\templates\header.php';
?>

<section class="container register">
    <h2>Inscription</h2>

    <form class="row" id="register-form" method="POST" action="">

        <div class="form-group col-md-3">
            <label for="surname">Nom</label>
            <input type="text" placeholder="Nom de famille" name="surname" id="surname" class="form-control" required="required" autocomplete="off">
        </div>
        
        <div class="form-group col-md-3">
            <label for="name">Prénom</label>
            <input type="text" placeholder="Prénom" name="name" id="name" class="form-control" required="required" autocomplete="off">
        </div>

        <div class="form-group col-md-3">
            <label for="email">Email</label>
            <input type="email" placeholder="Email" name="email" class="form-control" required="required" autocomplete="off">
        </div>
            
        <div class="form-group col-md-3">
            <label for="password">Mot de passe</label>
            <input type="password" placeholder="Entrez le mot de passe" name="password" class="form-control" required="required" autocomplete="off">
        </div>

        <div class="button">
            <button id="submit" type="submit" value="submit" class="btn btn-primary">Envoyer</button>
        </div>

    </form>

    
        
</section>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>