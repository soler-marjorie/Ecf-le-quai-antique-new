<?php 
    @session_start();
    use App\Db\Mysql;
    require_once _ROOTPATH_.'\templates\header.php'; 

    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM user WHERE id = :id');
    $query->bindValue(':id', $_SESSION['user'], PDO::PARAM_INT);
    $query->execute();

    $user = $query->fetch();
    ?>

        
    <h1>Profil de <?= $_SESSION["user"]["surname"]?></h1>
        <p>name : <?= $_SESSION["user"]["name"]?></p>
        <p>surname : <?= $_SESSION["user"]["surname"]?></p>
        <p>email : <?= $_SESSION["user"]["email"]?></p>
    
<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>