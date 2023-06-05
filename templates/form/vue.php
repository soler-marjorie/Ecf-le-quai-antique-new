<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<form method="post">
    <h2 class="text-center">Connexion</h2>    

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
    </div>
</br>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
    </div>   

</form>

<p class="text-center"><a href="./index.php?controller=user&action=inscription&id=1">Inscription</a></p>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>