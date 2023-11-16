<?php 
    @session_start();
    require_once _ROOTPATH_.'\templates\header.php'; 

    use App\Db\Mysql;

    //on récupère une instance de mysql 
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM allergy');
    $query->execute();
    $allergies = $query->fetchAll(); 

    $query = $pdo->prepare('SELECT * FROM momentmorning');
    $query->execute();
    $morning = $query->fetchAll();

    $query = $pdo->prepare('SELECT * FROM momentnight');
    $query->execute();
    $night = $query->fetchAll();
?>

<form class="container booking" method="post">

    <div class="row block">
        <div class="col-sm-3 groups">
            <div class="form-group name">
                <label for="name">Nom</label>
                <input id="name" name="name" class="form-control" type="text" placeholder="Entrez votre nom" required="required" data-error="name is required." autocomplete="off">
            </div>

            <div class="form-group surname">
                <label for="surname">Prénom</label>
                <input id="surname" name="surname" class="form-control" type="text" placeholder="Entrez votre prénom" required="required" data-error="surname is required.">
            </div>

            <div class="form-group email">
                <label for="email">Email</label>
                <input id="email" name="email" class="form-control" type="email" placeholder="Entrez votre email" required="required" data-error="email is required." autocomplete="off">
            </div>

            <div class="form-group people">
                <label for="nbrPeople">Nombre de personnes</label>
                <input id="nbrPeople" name="nbrPeople" class="form-control" type="number" placeholder="Entrez le nombre de personnes" required="required" data-error="number of people is required.">
            </div>

            <div class="form-group allergies">
                <span>Selectionnez vos allergies</span>
                <select name="ingredients">
                    <?php foreach($allergies as $allergy){ ?>
                        <option value="<?php echo $allergy['ingredients']; ?>"><?php echo $allergy['ingredients']; ?></option>
                    <?php } ?>
                    
                </select>
                <p>(Veuillez téléphoner ou envoyer un mail pour renseigner plus d'allergies)</p>
            </div>

            <div class="form-group date">
                <label for="date">Choisissez une date</label>
                <input id="date" name="date" class="form-control" type="date" placeholder="Entrez une date" required="required" data-error="date is required.">
            </div>

            <div class="form-group days">
                <span>Selectionnez une horaire</span>

                <select name="time">
                    <optgroup label="Matin">
                        <?php foreach($morning as $momentmorning){?>
                            <option value="<?php echo $momentmorning['time']; ?>"><?php echo $momentmorning['time']; ?></option>
                        <?php } ?>
                    </optgroup>
                    <optgroup label="Soir">
                        <?php foreach($night as $momentnight){?>
                            <option value="<?php echo $momentnight['time']; ?>"><?php echo $momentnight['time']; ?></option>
                        <?php } ?>
                    </optgroup>
                </select>
                
            </div>

            <div class="form-group button">
                <button id="submit" type="submit" class="btn btn-primary">Réserver</button>
            </div>
        </div>

    </div>

</form>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>