<?php require_once '\templates\header.php'; ?>

<form action="App/Controller/Controller.php" method="post">
    <h2 class="text-center">Connexion</h2>    

    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">Connexion</button>
    </div>   

</form>

<p class="text-center"><a href="inscription.php">Inscription</a></p>

<?php require_once '\templates\footer.php'; ?>