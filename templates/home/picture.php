<?php require_once _ROOTPATH_. '\templates\header.php'; 
/* @var $home \App\Model\Home */

?>

   
<section class="home">
    <h1>Nos spécialités du moment !</h1>
    </br>
    <img src="uploads/<?=$homes->getSrc(); ?>" width="250px" title="<?=$homes->getTitle(); ?>"/>
    <div class="images">

        <?php foreach($home as $homes){ ?>
            <img src="uploads/<?=$homes->getSrc(); ?>" width="250px" title="<?=$homes->getTitle(); ?>"/>
        <?php } ?>
            
      

    </div>
</section>
    

<?php require_once _ROOTPATH_. '\templates\footer.php'; ?>

    