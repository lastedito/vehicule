<?php

//-------------------------------------------------------------------------------------------------------------------------CLASSE USER--------------------------------------------------------------------------
class User {

    private $id;
    private $nom;
    private $prenom;
    private $type;

    private function getInfosVisiteur($login, $mdp, $pdo) {
        $req = "select user.id as id, user.nom as nom, user.prenom as prenom, user.type as type from user 
		where user.login='$login' and user.mdp='$mdp'";
        $rs = $pdo->query($req);
        return $ligne = $rs->fetch();
    }

    public function __construct($login, $mdp, $pdo) {
        $infos = User::getInfosVisiteur($login, $mdp, $pdo);
        $this->id = $infos["id"];
        $this->nom = $infos["nom"];
        $this->prenom = $infos["prenom"];
        $this->type = $infos["type"];
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getType() {
        return $this->type;
    }

}

//------------------------------------------------------------------------------------------------------------------------CLASS CLIENT---------------------------------------------------
class Client {

    private $id;
    private $nom;
    private $prenom;
    private $login;
    private $mdp;

    public function __construct() {
        $ctp = func_num_args();
        $args = func_get_args();
        switch ($ctp) {
            case 0:
                Client::construct();
                break;
            case 5:
                Client::construct2($args[0], $args[1], $args[2], $args[3], $args[4]);
                break;
        }
    }

    public function construct() {
        
    }

    public function construct2($id, $nom, $prenom, $login, $mdp) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->login = $login;
        $this->mdp = $mdp;
    }

    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getLogin() {
        return $this->login;
    }

    public function getMdp() {
        return $this->mdp;
    }

    public function getClients($pdo) {
        // on propose tous les clients
        $req = "select * from user where type='client'";
        $resultat = $pdo->query($req);
        $clients = $resultat->fetch();
        while (is_array($clients)) {
            $cli = $clients["nom"] . " " . $clients["prenom"];
            ?>    
            <option value="<?php echo $clients["id"]; ?>"><?php echo $cli ?></option>
            <?php
            $clients = $resultat->fetch();
        }
        $resultat->closeCursor();
    }

    public function getMaxClients($pdo) {
        $resultat = $pdo->query('select max(id) as maximum from user where type="client" ');
        return $tab = $resultat->fetch();
    }

    public function getInfosClient($id, $pdo) {
        $resultat = $pdo->query('select * from user where id="' . $id . '" ');
        return $tab = $resultat->fetch();
    }

    public function listeAReviser($pdo) {
        $resultat = $pdo->query('select *  from revision');
        $ligne2 = 0;
        while ($row = $resultat->fetch()) {
            $rows[$ligne2++] = $row;
        }
        echo '<table bgcolor="grey" width="100%" border="1">';
        foreach (array('date') as $champ) {
            ?><tr><?php
                echo "<th>Date</th>";
                foreach ($rows as $row)
                    echo "<td>" . $row[$champ] . "</td>";
                ?></tr><?php
        }
        foreach (array('km') as $champ) {
            ?><tr><?php
                    echo "<th>KM du vehic</th>";
                    foreach ($rows as $row)
                        echo "<td>" . $row[$champ] . "</td>";
                    ?></tr><?php
        }
        foreach (array('numVehic') as $champ) {
            ?><tr><?php
                    echo "<th>Num du vehic</th>";
                    foreach ($rows as $row)
                        echo "<td>" . $row[$champ] . "</td>";
                    ?></tr><?php
        }
    }
        public function listeClients($pdo) {
        $resultat = $pdo->query('select *  from user where type="client"');
        $ligne2 = 0;
        while ($row = $resultat->fetch()) {
            $rows[$ligne2++] = $row;
        }
        echo '<table bgcolor="grey" width="100%" border="1">';
        foreach (array('id') as $champ) {
            ?><tr><?php
                echo "<th>Id</th>";
                foreach ($rows as $row)
                    echo "<td>" . $row[$champ] . "</td>";
                ?></tr><?php
        }
        foreach (array('nom') as $champ) {
            ?><tr><?php
                    echo "<th>Nom</th>";
                    foreach ($rows as $row)
                        echo "<td>" . $row[$champ] . "</td>";
                    ?></tr><?php
        }
        foreach (array('prenom') as $champ) {
            ?><tr><?php
                    echo "<th>Prenom</th>";
                    foreach ($rows as $row)
                        echo "<td>" . $row[$champ] . "</td>";
                    ?></tr><?php
        }
        foreach (array('login') as $champ) {
            ?><tr><?php
                    echo "<th>Login</th>";
                    foreach ($rows as $row)
                        echo "<td>" . $row[$champ] . "</td>";
                    ?></tr><?php
        }
        foreach (array('mdp') as $champ) {
            ?><tr><?php
                    echo "<th>Mdp</th>";
                    foreach ($rows as $row)
                        echo "<td>" . $row[$champ] . "</td>";
                    ?></tr><?php
        }
    }
}

//----------------------------------------------------------------------------------------------------------------------------CLASS Vehicule---------------------------------------------------------------------
    class Vehicule {

    private $num;
    private $km;
    private $carburant;
    private $id;

    public function __construct() {
        $ctp = func_num_args();
        $args = func_get_args();
        switch ($ctp) {
            case 0:
                Vehicule::construct();
                break;
            case 4:
                Vehicule::construct2($args[0], $args[1], $args[2], $args[3]);
                break;
        }
    }

    public function construct() {
        
    }

    public function construct2($num, $km, $carburant, $id) {
        $this->num = $num;
        $this->km = $km;
        $this->carburant = $carburant;
        $this->id = $id;
    }

    public function getNum() {
        return $this->num;
    }

    public function getKm() {
        return $this->km;
    }

    public function getCarburant() {
        return $this->carburant;
    }

    public function getId() {
        return $this->id;
    }

    public function getMaxVehics($pdo) {
        $resultat = $pdo->query('select max(num) as maximum from vehicule ');
        return $tab = $resultat->fetch();
    }

    public function getInfosVehic($num, $pdo) {
        $resultat = $pdo->query('select * from vehicule where num="' . $num . '" ');
        return $tab = $resultat->fetch();
    }

    public function getVehic($id, $pdo) {
        // on propose tous les clients
        if($id>=100000000){
            $req = "select * from vehicule";
        }else{
        $req = "select * from vehicule where id='" . $id . "'";
        }
        $resultat = $pdo->query($req);
        $clients = $resultat->fetch();
        while (is_array($clients)) {
            $cli = "Véhicule numéro : " . $clients["num"] . " et a " . $clients["km"] . " km";
            ?>    
            <option value="<?php echo $clients["num"]; ?>"><?php echo$cli ?></option>
            <?php
            $clients = $resultat->fetch();
        }
        $resultat->closeCursor();
    }

    public function aReviser($num,$pdo){
        $req="select revision.kmRev,vehicule.km from revision,vehicule where vehicule.num='".$num."'";
        $resultat=$pdo->query($req);
        $tab=$resultat->fetchAll();
        if($tab[0]["kmRev"]<$tab[0]["km"]){
            return True;
        }
        else{ 
            return False;
        }
    }
}

//-------------------------------------------------------------------------------------------------------------------------------------------CLASS Revision---------------------------------------------------------------------
class Revision {

    private $date;
    private $km;
    private $numVehic;

    public function __construct() {
        $ctp = func_num_args();
        $args = func_get_args();
        switch ($ctp) {
            case 0:
                Revision::construct();
                break;
            case 3:
                Revision::construct2($args[0], $args[1], $args[2]);
                break;
        }
    }

    public function construct() {
        
    }

    public function construct2($date, $km, $num) {
        $this->date = $date;
        $this->km = $km;
        $this->numVehic = $num;
    }

    public function getNum() {
        return $this->numVehic;
    }

    public function getKm() {
        return $this->km;
    }

    public function getDate() {
        return $this->date;
    }

    public function getInfosRev($num, $pdo) {
        $resultat = $pdo->query('select * from revision where numVehic="' . $num . '" ');
        return $tab = $resultat->fetch();
    }

    public function getRev($pdo) {
        // on propose tous les clients
        $req = "select revision.date,revision.km,revision.numVehic from revision,vehicule,user where user.id='" . $_SESSION["id"] . "' and user.id=vehicule.id and revision.numVehic=vehicule.num";
        $resultat = $pdo->query($req);
        $clients = $resultat->fetch();
        while (is_array($clients)) {
            $cli = "Véhicule numéro : " . $clients["numVehic"] . " sera révisé le : " . $clients["date"];
            ?>    
            <option value="<?php echo $clients["numVehic"]; ?>"><?php echo$cli ?></option>
            <?php
            $clients = $resultat->fetch();
        }
        $resultat->closeCursor();
    }

}

//-------------------------------------------------------------------------------------------------------------------------------------------CLASS actionBDD---------------------------------------------------------------------
class actionBDD {

    public function getMinAdmin($pdo) {
        $resultat = $pdo->query('select min(id) as minimum from user where type="admin" ');
        return $tab = $resultat->fetch();
    }

    //CLIENT                                                                                //
    public function updateInfosClient($client, $pdo) {
        $pdo->query("update user set nom='" . $client->getNom() . "',prenom='" . $client->getPrenom() . "' ,login='" . $client->getLogin() . "',mdp='" . $client->getMdp() . "' where id='" . $client->getId() . "' ");
    }

    public function insertNewClient($client, $pdo) {
        $pdo->query("insert into user values('" . $client->getId() . "','" . $client->getNom() . "','" . $client->getPrenom() . "','" . $client->getLogin() . "','" . $client->getMdp() . "','client')");
    }

    public function deleteClient($client, $pdo) {
        $pdo->query("delete from user where id='" . $client->getId() . "'");
    }

    //VEHICULE                                                                          //
    public function updateInfosVehic($vehic, $pdo) {
        $pdo->query("update vehicule set km='" . $vehic->getKm() . "' ,carburant='" . $vehic->getCarburant() . "' where num='" . $vehic->getNum() . "'");
    }

    public function insertNewVehic($vehic, $pdo) {
        $pdo->query("insert into vehicule values('" . $vehic->getNum() . "','" . $vehic->getKm() . "','" . $vehic->getCarburant() . "','" . $vehic->getId() . "')");
    }

    public function deleteVehic($vehic, $pdo) {
        $pdo->query("delete from vehicule where num='" . $vehic->getNum() . "'");
    }

    //REVISION
    public function updateInfosRev($rev, $pdo) {
        $pdo->query("update revision set date='" . $rev->getDate() . "'where numVehic='" . $rev->getNum() . "'");
    }

    public function insertNewRev($rev, $pdo, $carb) {
        if($carb=="e"){
            $urant=10000;
        }
        else $urant=20000;
        echo $urant;
        $pdo->query("insert into revision(date,km,numVehic,kmRev) values('" . $rev->getDate() . "','" . $rev->getKm() . "','" . $rev->getNum() . "',".$urant.")");
    }

    public function deleteRev($rev, $pdo) {
        $pdo->query("delete from revision where numVehic='" . $rev->getNum() . "'");
    }

}
?>
