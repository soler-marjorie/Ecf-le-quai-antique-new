<?php require_once _ROOTPATH_. '\templates\header.php'; 

    use App\Db\Mysql;

    //on récupère une instance de mysql 
    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM home');
    $query->execute();
    //fetch pour récuperer qu'un seul livre
    $homes = $query->fetchAll(); //renvoi un tableau associatif juste avec les valeurs nécessaires
?>
<section>
    <h1>Nos spécialités du moment !</h1>
    </br>

    <div class="images">

        <?php foreach ($homes as $home) { ?>
            <img src="uploads/<?php echo $home['src']; ?>" width="200px" title="<?php echo $home['title']; ?>"/>
        
        <?php } ?>

    </div>
</section>
    

<?php require_once _ROOTPATH_. '\templates\footer.php'; ?>

    