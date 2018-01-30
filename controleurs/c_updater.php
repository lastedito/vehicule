<?php
$action = $_REQUEST['action'];
switch($action){
    //--------------------------------------------------------------------------------------------------------CLIENT--------------------------------------------------------------------------------------------
            case"addClient":{
                $unClient=new Client($_POST["idClient"],$_POST["nomClient"],$_POST["prenomClient"],$_POST["loginClient"],$_POST["mdpClient"]);
                $uneAction->insertNewClient($unClient,$pdo);
                include("vues/v_sommaire.php");break;
            }
            case"MAJclient":{
                $unClient=new Client($_POST["idClient"],$_POST["nomClient"],$_POST["prenomClient"],$_POST["loginClient"],$_POST["mdpClient"]);
                $uneAction->updateInfosClient($unClient,$pdo);
                include("vues/v_sommaire.php");break;
            }
            case"delClient":{
                $unClient=new Client($_POST["idClient"],$_POST["nomClient"],$_POST["prenomClient"],$_POST["loginClient"],$_POST["mdpClient"]);
                $uneAction->deleteClient($unClient,$pdo);
                include("vues/v_sommaire.php");break;
            }
    //-------------------------------------------------------------------------------------------------------VEHICULE----------------------------------------------------------------------------------------
            case"addVehic":{
                if(empty($_POST["id"])){
                $unVehic=new Vehicule($_POST["num"],$_POST["km"],$_POST["carburant"],$_SESSION["id"]);
                $uneAction->insertNewVehic($unVehic,$pdo);
                include("vues/v_sommaire.php");break;
                }
                else{
                $unVehic=new Vehicule($_POST["num"],$_POST["km"],$_POST["carburant"],$_POST["id"]);
                $uneAction->insertNewVehic($unVehic,$pdo);
                include("vues/v_sommaire.php");break;
                }
            }
            case"MAJvehic":{
                $unVehic=new Vehicule($_POST["num"],$_POST["km"],$_POST["carburant"],$_SESSION["id"]);
                $uneAction->updateInfosVehic($unVehic,$pdo);
                include("vues/v_sommaire.php");break;
            }
            case"delVehic":{
                $unVehic=new Vehicule($_POST["num"],$_POST["km"],$_POST["carburant"],$_SESSION["id"]);
                $uneAction->deleteVehic($unVehic,$pdo);
                include("vues/v_sommaire.php");break;
            }
    //-------------------------------------------------------------------------------------------------------REVISION----------------------------------------------------------------------------------------
            case"addRev":{
                $km=$actionVehic->getInfosVehic($_POST["numVehic"],$pdo);
                echo $_POST["numVehic"];
                $uneRev=new Revision($_POST["date"],$km["km"],$_POST["numVehic"]);
                $uneAction->insertNewRev($uneRev,$pdo,$km["carburant"]);
                include("vues/v_sommaire.php");break;
            }
            case"MAJrev":{
                $km=$actionVehic->getInfosVehic($_POST["numVehic"],$pdo);
                $uneRev=new Revision($_POST["date"],$km["km"],$_POST["numVehic"]);
                $uneAction->updateInfosRev($uneRev,$pdo);
                include("vues/v_sommaire.php");break;
            }
            case"delRev":{
                $km=$actionVehic->getInfosVehic($_POST["numVehic"],$pdo);
                $uneRev=new Revision($_POST["date"],$km["km"],$_POST["numVehic"]);
                $uneAction->deleteRev($uneRev,$pdo);
                include("vues/v_sommaire.php");break;
            }
}
?>