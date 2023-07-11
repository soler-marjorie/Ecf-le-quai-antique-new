<?php 
    session_start();

    use App\Db\Mysql;

    $mysql = Mysql::getInstance();
    $pdo = $mysql->getPDO();

    $query = $pdo->prepare('SELECT * FROM home');
    $query->execute();
    $pictures = $query->fetchAll($pdo::FETCH_ASSOC);

    

?>

<section class="container">
    <div class="row">
        <div class="col-12">
            <h1>Détail du produit : <?= $pictures['title'] ?></h1>
            <p>ID : <?= $pictures['id'] ?></p>
            <p>Titre : <?= $pictures['title'] ?></p>
            <p>Src : <?= $pictures['src'] ?></p>
        </div>
    </div>
</section>