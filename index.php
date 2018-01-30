<?php
require_once("include/fct.inc.php");
require_once ("include/class.inc.php");
include("vues/v_header.php") ;
session_start();
$pdo = connecterServeurBD();
$estConnecte = estConnecte();

$actionClient=new Client();
$tab=$actionClient->getMaxClients($pdo);

$actionVehic =new Vehicule();
$tabVehicMax=$actionVehic->getMaxVehics($pdo);

$actionRev=new Revision();

$uneAction=new actionBDD();

if(!isset($_REQUEST['uc']) || !$estConnecte){
     $_REQUEST['uc'] = 'connexion';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'connexion':{
		include("controleurs/c_connexion.php");break;
	}
	case 'client' :{
		include("controleurs/c_client.php");break;
	}
	case 'vehicule' :{
		include("controleurs/c_vehicule.php");break;
	}
                  case 'revision':{
                      	include("controleurs/c_revision.php");break;
                  }
                  case 'updater':{
                                    include("controleurs/c_updater.php");break;
                  }
}
include("vues/v_footer.php") ;
?>

