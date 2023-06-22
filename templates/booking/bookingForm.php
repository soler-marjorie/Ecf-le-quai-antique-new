<?php 

require_once _ROOTPATH_.'\templates\header.php'; 

use App\Db\Mysql;

//on récupère une instance de mysql 
$mysql = Mysql::getInstance();
$pdo = $mysql->getPDO();

$query = $pdo->prepare('SELECT * FROM allergy');
$query->execute();
$allergies = $query->fetchAll(); 

$query = $pdo->prepare('SELECT * FROM day');
$query->execute();
$days = $query->fetchAll();

$query = $pdo->prepare('SELECT * FROM momentmorning');
$query->execute();
$morning = $query->fetchAll();

$query = $pdo->prepare('SELECT * FROM momentnight');
$query->execute();
$night = $query->fetchAll();
?>

<form class="container booking">

    <div class="row block">
        <div class="col-sm-3 groups">
            <div class="form-group name">
                <label for="form-name">Nom</label>
                <input id="form-name" name="name" class="form-control" type="text" placeholder="Entrez votre nom" required="required" data-error="name is required." autocomplete="off">
            </div>

            <div class="form-group surname">
                <label for="form-surname">Prénom</label>
                <input id="form-surname" name="surname" class="form-control" type="text" placeholder="Entrez votre prénom" required="required" data-error="surname is required.">
            </div>

            <div class="form-group email">
                <label for="form-email">Email</label>
                <input id="form-email" name="email" class="form-control" type="email" placeholder="Entrez votre email" required="required" data-error="email is required." autocomplete="off">
            </div>

            <div class="form-group people">
                <label for="form-numberPeople">Nombre de personnes</label>
                <input id="form-numberPeople" name="numberPeople" class="form-control" type="number" placeholder="Entrez le nombre de personnes" required="required" data-error="number of people is required.">
            </div>

            <div class="form-group allergies">
                <span>Selectionnez vos allergies</span>

                <div id="reservation_form_allergy">
                    <?php foreach($allergies as $allergy){ ?>
                        <div>
                            <input type="checkbox" id="form_<?php echo $allergy['name']; ?>" name="<?php echo $allergy['name']; ?>" value="<?php echo $allergy['id']; ?>">
                        </div>
                        <div>
                            <label for="form_<?php echo $allergy['name']; ?>"><?php echo $allergy['name']; ?></label>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="form-group date">
                <label for="form-date">Choisissez une date</label>
                <input id="form-date" name="date" class="form-control" type="date" placeholder="Entrez une date" required="required" data-error="date is required.">
            </div>

            <div class="form-group days">
                <span>Selectionnez une horaire</span>

                <div id="reservation_form_day">
                    <select name="form-day" id="form-day">
                        <?php foreach($days as $day){ ?>
                            <option value="<?php echo $day['name']; ?>"><?php echo $day['name']; ?></option>
                            
                            <?php if($day['name'] === "Midi"){ 
                                foreach($morning as $momentmorning){?>
                                    <option value="<?php echo $momentmorning['time']; ?>"><?php echo $momentmorning['time']; ?></option>
                                <?php }
                            }else{ 
                                foreach($night as $momentnight){?>
                                    <option value="<?php echo $momentnight['time']; ?>"><?php echo $momentnight['time']; ?></option>
                                <?php } 
                            } ?>
                        <?php } ?>
                    </select>
                </div>
            </div>

            <div class="form-group button">
                <button type="button" class="btn btn-primary">Réserver</button>
            </div>
        </div>

    </div>

</form>

<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>