
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form method="post" action="index.php?uc=updater&action=delVehic">
	<h1 class="formulaire">Supprimer véhicule</h1>

	<fieldset>
                                    <label class="l1"><b>Num du véhicule </b></label><input name="num" type="text" size="6" value="<?php echo trim($infosVehic["num"]) ?>" readonly="readonly"/></br>
                                    <label class="l1"><b>Km du véhicule </b></label><input name="km" type="text" size="10" value="<?php echo trim($infosVehic["km"]) ?>" readonly="readonly"/></br>
		<label class="l1"><b>Carburant du véhicule </b></label><input name="carburant" type="text" size="10" value="<?php echo trim($infosVehic["carburant"]) ?>" readonly="readonly"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>