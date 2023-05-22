<?php
   require _ROOTPATH_.'\templates\header.php';
?>

<div class="container-login">
    <div class="wrapper-login">
        <h2>Inscription</h2>

        <form id="register-form" method="POST" action="">

        <div>
            <div>
                <label for="surname"></label>
                <input type="text" placeholder="Nom de famille" name="surname" id="surname">
            </div>
            
            <div>
                <label for="name"></label>
                <input type="text" placeholder="Prénom" name="name" id="name">
            </div>
        </div>
            
        <div>
            <label for="email"></label>
            <input type="email" placeholder="Email" name="email">
        </div>
            
        <div>
            <label for="password"></label>
            <input type="password" placeholder="Mot de passe" name="password">
        </div>
           

        <button id="submit" type="submit" value="submit">Envoyer</button>

        </form>
    </div>
</div>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>