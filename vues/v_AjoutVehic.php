
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form class="form" method="post" action="index.php?uc=updater&action=addVehic">
	<h1 class="formulaire">Nouveau véhicule</h1>
	<fieldset class="left">
            <label class="l1"><b>num véhicule</b></label><input name="num" type="number" size="6" value="<?php print trim($tabVehicMax['maximum']+1); ?>" readonly="readonly"/><fieldset class="l2"><label>num dernier véhicule</label>&nbsp;&nbsp;<input type="text" size="6" value="<?php echo $tabVehicMax['maximum']; if($tabVehicMax['maximum']==0){print 0;} ?>" readonly="readyonly" /></fieldset></br>
                                    <label class="l1"><b>Nombre de km </b></label><input name="km" type="text" size="10" maxlength="30"/></br>
		<label class="l1"><b>Nom du carburant </b></label><input name="carburant" type="text" size="10" maxlength="30"/></br>
                                    <?php
                                    if($_SESSION["type"]=="admin"){
                                        echo'<label class="l1"><b>Id du client </b></label><input name="id" type="text" size="10" maxlength="30"/></br>';
                                    }
                                    ?>
                  </fieldset>
        <input type="submit" value="Valider">
</form>