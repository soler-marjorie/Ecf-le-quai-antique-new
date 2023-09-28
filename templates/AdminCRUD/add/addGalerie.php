<?php 
@session_start();

require_once _ROOTPATH_.'\templates\header.php'; 

?>

<section class="container">
    <div class="row">
        <div class="col-6">
            <h1>Ajouter une image</h1>
            <form method="post">
                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="src">Src</label>
                    <input type="text" id="src" name="src" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit" value="addGalerie" name="addGalerie">Envoyer</button>
            </form>
        </div>
    </div>
</section>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>