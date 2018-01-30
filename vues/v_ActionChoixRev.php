
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<?php
    if($tache=="modif"){
?>
<form method="post" action="index.php?uc=revision&action=modifierRev">
    <fieldset>
                                        <label>Révision : </label>

                                        <select name="numRev" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionRev->getRev($pdo)
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
    else {
?>
<form method="post" action="index.php?uc=revision&action=supprimerRev">
    <fieldset>
                                        <label>Révision : </label>
                                        <select name="numRev" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionRev->getRev($pdo)
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
