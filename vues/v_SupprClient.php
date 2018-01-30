
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="styles/styles.css">

<form method="post" action="index.php?uc=updater&action=delClient">
	<h1 class="formulaire">Supprimer Client</h1>

	<fieldset>
                                    <label class="l1"><b>id du client </b></label><input name="idClient" type="text" size="6" value="<?php echo trim($infosClient["id"]) ?>" readonly="readonly"/></br>
                                    <label class="l1"><b>Nom client </b></label><input name="nomClient" type="text" size="10" value="<?php echo trim($infosClient["nom"]) ?>" readonly="readonly"/></br>
		<label class="l1"><b>Prenom client </b></label><input name="prenomClient" type="text" size="10" value="<?php echo trim($infosClient["prenom"]) ?>" readonly="readonly"/></br>
                                    <label class="l1"><b>Login client </b></label><input name="loginClient" type="text" size="10" value="<?php echo trim($infosClient["login"]) ?>" readonly="readonly"/></br>
                                    <label class="l1"><b>Mot de passe client </b></label><input name="mdpClient" type="text" size="10" value="<?php echo trim($infosClient["mdp"]) ?>" readonly="readonly"/>
                  </fieldset>
        <input type="submit" value="Valider">
</form>