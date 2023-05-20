<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<!-- action désigne la page qui recoit pour traiter les informations-->
<form method="post" action="infosContact.php">
 
    <div class="form-row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nom">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Prénom">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Entrer un message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
 
</form>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>