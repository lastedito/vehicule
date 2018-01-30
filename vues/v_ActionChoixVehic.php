
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<?php
    if($tache=="modif"){
?>
<form method="post" action="index.php?uc=vehicule&action=modifierVehic">
    <fieldset>
                                        <label>Vehicule : </label>
                                        <select name="numVehic" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionVehic->getVehic($_SESSION["id"],$pdo);
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
    elseif($tache=="revOrNot"){
?>
<form method="post" action="index.php?uc=revision&action=isAReviser">
    <fieldset>
                                        <label>Vehicule : </label>
                                        <select name="num" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionVehic->getVehic($_SESSION["id"],$pdo);
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
    else {
?>
<form method="post" action="index.php?uc=vehicule&action=supprimerVehic">
    <fieldset>
                                        <label>Vehicule : </label>
                                        <select name="numVehic" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionVehic->getVehic($_SESSION["id"],$pdo);
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
