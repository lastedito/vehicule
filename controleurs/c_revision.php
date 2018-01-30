<?php
$action = $_REQUEST['action'];
include("vues/v_sommaire.php");
echo "<br>";
switch($action){
                  case"ajouterRev":{
                      include("vues/v_AjoutRevision.php");
                      break;
                  }
                  case"actionModifRev":{
                      $tache="modif";
                      include("vues/v_ActionChoixRev.php");
                      break;
                  }
                  case"modifierRev":{
                      $infosRev= $actionRev->getInfosRev($_POST["numRev"],$pdo);
                      include("vues/v_ModifRevision.php");
                      break;
                  }
                  case"actionSupprRev":{
                      $tache="suppr";
                      include("vues/v_ActionChoixRev.php");
                      break;
                  }
                  case"supprimerRev":{
                      $infosRev= $actionRev->getInfosRev($_POST["numRev"],$pdo);
                      include("vues/v_SupprRevision.php");
                      break;
                  }
                  case"isAReviser":{
                      if(empty($_POST["num"])){
                          $tache="revOrNot";
                          include("vues/v_actionChoixVehic.php");
                          break;
                      }
                      if($actionVehic->aReviser($_POST["num"],$pdo)){
                          echo "<p style='text-align:center'><b>Votre véhicule doit être réviser, veuillez ajouter une révision.</b></p>";
                      }
                      else{
                          echo "<p style='text-align:center'><b>Votre véhicule n'a pas besoin d'être réviser, à bientôt.</b></p>";
                      }
                  }
}
?>