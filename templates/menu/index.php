<?php require_once _ROOTPATH_.'\templates\header.php'; ?>

<section class="formules">
    
    <?php foreach ($menuTitle as $menuTitles) { ?>
    
        <h1><?= $menuTitles['formule']; ?></h1>
        <h2><?= $menuTitles['plat']; ?></h2>

        <?php foreach ($menu as $menus) {
            if($menuTitles['plat'] == $menus['plat']){ ?>

                <div>
                    <h3><?= $menus['title']; ?></h3>
                    <p><?= $menus['description']; ?></p>
                    <p><?= $menus['price']; ?>€</p>
                </div>
                <hr>

            <?php }
        }     
    } ?>
    
</section>

<?php require_once _ROOTPATH_.'\templates\footer.php'; 