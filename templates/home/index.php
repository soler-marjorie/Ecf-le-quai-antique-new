<?php require_once _ROOTPATH_. '\templates\header.php'; 
/* @var $home \App\Model\Home */

?>

   
<section class="home">
    <h1>Nos spécialités du moment !</h1>
    
    </br>

    <div class="images">

        <?php foreach($home as $homes){ ?>
            <img src="uploads/<?=$homes['src']; ?>" width="250px" title="<?=$homes['title']; ?>"/>
        <?php } ?>

    </div>
</section>
    

<?php require_once _ROOTPATH_. '\templates\footer.php'; ?>

    