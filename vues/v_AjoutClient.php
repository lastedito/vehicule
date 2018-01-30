
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form class="form" method="post" action="index.php?uc=updater&action=addClient">
	<h1 class="formulaire">Nouveau Client</h1>
	<fieldset class="left">
            <label class="l1"><b>id du client </b></label><input name="idClient" type="number" size="6" value="<?php print trim($tab['maximum']+1); ?>" readonly="readonly" max="<?php echo$tab2["minimum"]-1?>"/><fieldset class="l2"><label>id du dernier client</label>&nbsp;&nbsp;<input name="name" type="text" size="6" value="<?php echo $tab['maximum']; if($tab['maximum']==0){print 0;} ?>" readonly="readyonly" /></fieldset></br>
                                    <label class="l1"><b>Nom client </b></label><input name="nomClient" type="text" size="10" maxlength="30"/></br>
		<label class="l1"><b>Prenom client </b></label><input name="prenomClient" type="text" size="10" maxlength="30"/></br>
                                    <label class="l1"><b>Login client </b></label><input name="loginClient" type="text" size="10" maxlength="20"/></br>
                                    <label class="l1"><b>Mot de passe client </b></label><input name="mdpClient" type="text" size="10" maxlength="20"/>
                  </fieldset>
        <input type="submit" value="Valider">
</form>