<?php
session_start();

require_once _ROOTPATH_.'\templates\header.php'; 
?>
<h1>Profil de <?= $_SESSION["user"]["surname"]?></h1>

<p>name : <?= $_SESSION["user"]["name"]?></p>
<p>surname : <?= $_SESSION["user"]["surname"]?></p>
<p>email : <?= $_SESSION["user"]["email"]?></p>


<?php require_once _ROOTPATH_.'\templates\footer.php'; ?>