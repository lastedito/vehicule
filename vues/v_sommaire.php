    <!-- Division pour le sommaire -->
<div id="menuGauche" >
    <div id="infosUtil">

        <h2>

        </h2>
        <?php
        if ($_SESSION['type'] == "client") {
            ?>
        </div>  
        <ul id="menu-deroulant">
            <p>Client :</p>
            <h3><b><?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?></b>
                </br>_________________________</h3>
            <li class="smenu">
                <a title="Modifier mes véhicules" class="cursorA">Modifier mes véhicules</a>
                <ul>
                    <li><a href="index.php?uc=vehicule&action=ajouterVehic" title="Ajouter un véhicule">Ajouter un véhicule</a></li>
                    <li><a href="index.php?uc=vehicule&action=actionModifVehic" title="Modifier un véhicule">Modifier un véhicule</a></li>
                    <li><a href="index.php?uc=vehicule&action=actionSupprVehic" title="Supprimer un véhicule">Supprimer un véhicule</a></li>
                </ul>
            </li>
            <li class="smenu">
                <a title="Modifier mes révisions" class="cursorA">Modifier mes révisions</a>
                <ul>
                    <li><a href="index.php?uc=revision&action=ajouterRev" title="Ajouter une révision">Ajouter une révision</a></li>
                    <li><a href="index.php?uc=revision&action=actionModifRev" title="Modifier une révision">Modifier une révision</a></li>
                    <li><a href="index.php?uc=revision&action=actionSupprRev" title="Supprimer une révision">Supprimer une révision</a></li>
                </ul>
            </li>
            <li class="smenu">
                <a href="index.php?uc=revision&action=isAReviser" title="Verif si besoin de révision">Verif si besoin de révision</a>
            </li>
            <li class="smenu">
                <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
            </li>
        </ul>


    </div>
    <?php
}
if ($_SESSION['type'] == "admin") {
    ?>
    </div>  
    <ul id="menu-deroulant">
        <p>Admin :</p>
        <h3><b><?php echo $_SESSION['prenom'] . "  " . $_SESSION['nom'] ?></b>
            </br>_________________________</h3>
        <li class="smenu">
            <a title="Modifier les clients" class="cursorA">Modifier les clients</a>
            <ul>
                <li><a href="index.php?uc=client&action=ajouterClient" title="<?php echo "Actuellement " . $tab["maximum"] . " clients existants." ?>">Ajouter un client</a></li>
                <li><a href="index.php?uc=client&action=actionModifClient" title="Modifier un client">Modifer un client</a></li>
                <li><a href="index.php?uc=client&action=actionSupprClient" title="Supprimer un client">Supprimer un client</a></li>
                <li><a href="index.php?uc=client&action=listeClients" title="Liste des clients">Liste des clients</a></li>
            </ul>
        </li>
        <li class="smenu">
            <a title="Modifier les véhicules" class="cursorA">Modifier les véhicules</a>
            <ul>
                <li><a href="index.php?uc=vehicule&action=ajouterVehic" title="Ajouter un véhicule">Ajouter un véhicule</a></li>
                <li><a href="index.php?uc=vehicule&action=actionModifVehic" title="Modifer un véhicule">Modifer un véhicule</a></li>
                <li><a href="index.php?uc=vehicule&action=actionSupprVehic" title="Supprimer un véhicule">Supprimer un véhicule</a></li>
                <li><a href="index.php?uc=client&action=listeClients" title="Liste des clients">Liste des clients</a></li>
            </ul>
        </li>
        <li class="smenu">
            <a href="index.php?uc=client&action=listeRev" title="Liste des révisions">Liste des révisions</a>
        </li>
        <li class="smenu">
            <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>



    </div>
    <?php
}
?>