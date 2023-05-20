<?php require_once _ROOTPATH_.'\templates\header.php';

    foreach ($homes as $home) {
    ?>
        <div>
            <img src="uploads/<?php echo $home['src']; ?>" width="200px" title="<?php echo $home['title']; ?>"/>
        </div>
        
    <?php
    }

require_once _ROOTPATH_.'\templates\footer.php'; ?>