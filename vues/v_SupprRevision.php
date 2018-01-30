
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form method="post" action="index.php?uc=updater&action=delRev">
	<h1 class="formulaire">Supprimer révision</h1>

	<fieldset>
                                    <label class="l1"><b>Date de révision </b></label><input name="date" type="date"  value="<?php echo trim($infosRev["date"]) ?>" readonly="readonly"/></br>
                                    <label class="l1"><b>Km du véhicule </b></label><input name="km" type="text" size="10" value="<?php echo trim($infosRev["km"]) ?>" readonly="readonly"/></br>
		<label class="l1"><b>Num du véhicule</b></label><input name="numVehic" type="text" size="10" value="<?php echo trim($infosRev["numVehic"]) ?>" readonly="readonly"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>