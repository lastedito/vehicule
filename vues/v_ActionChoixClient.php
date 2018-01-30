
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<?php
    if($tache=="modif"){
?>
<form method="post" action="index.php?uc=client&action=modifierClient">
    <fieldset>
                                        <label>Clients : </label>
                                        <select name="idClient" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionClient->getClients($pdo);
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
    else {
?>
<form method="post" action="index.php?uc=client&action=supprimerClient">
    <fieldset>
                                        <label>Clients : </label>
                                        <select name="idClient" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionClient->getClients($pdo);
                                        ?>
                                        </select>
     </fieldset>
<input type="submit" value="Valider">
</form>
<?php
    }
