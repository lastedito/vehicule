
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form method="post" action="index.php?uc=updater&action=MAJvehic">
	<h1 class="formulaire">Modifier véhicule</h1>

	<fieldset>
                                    <label class="l1"><b>Num du vehic </b></label><input name="num" type="text" size="6" value="<?php echo trim($infosVehic["num"]) ?>"  readonly="readonly"/></br>
                                    <label class="l1"><b>Km du vehic</b></label><input name="km" type="text" size="10" value="<?php echo trim($infosVehic["km"]) ?>" maxlength="30"/></br>
		<label class="l1"><b>Type de carburant </b></label><input name="carburant" type="text" size="10" value="<?php echo trim($infosVehic["carburant"]) ?>" maxlength="30"/></br>
                  </fieldset>
        <input type="submit" value="Valider">
</form>