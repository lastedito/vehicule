
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form class="form" method="post" action="index.php?uc=updater&action=addRev">
	<h1 class="formulaire">Nouvelle révision</h1>
	<fieldset class="left">
            <label class="l1"><b>Date de revision</b></label><input name="date" type="date" /><fieldset class="l2"></br>
		<select name="numVehic" title="Sélectionnez le visiteur souhaité pour la fiche de frais">
                                        <?php 
                                        $actionVehic->getVehic($_SESSION["id"],$pdo);
                                        ?>
                                        </select>
                  </fieldset>
        <input type="submit" value="Valider">
</form>