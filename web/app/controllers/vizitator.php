<?php

include_once __DIR__ . "/../models/auth.util.php";
require_once __DIR__ . "/../models/database.util.php";

class Vizitator extends Controller{

    public function index1($data = []){
        $view = $this->view('vizitator/index1', $data);
    }

    public function index($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $view = $this->view('vizitator/index', array("user" => $user));
        }
        else{
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function istoric($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $db = new Database();
            $programare = $db->getProgramari($user->idUser);
            $vizita = $db->getVizite($user->idUser);

            $detinut;
            $user1;
            $user2;
            $user3;

            $resultProg = array();
            $resultVis = array();

            while($row = $programare->fetch_assoc()){
                $detinut = $db->findDetinutById($row["id_detinut"]);
                $user1 = $db->findUserById($row["id_user1"]);
                $user2 = $db->findUserById($row["id_user2"]);
                $user3 = $db->findUserById($row["id_user3"]);

                $resultProg[] = ["programare"=>$row, "detinut"=>$detinut, "user1"=>$user1, "user2"=>$user2, "user3"=>$user3];
            }

            while($row = $vizita->fetch_assoc()){
                $detinut = $db->findDetinutById($row["id_detinut"]);
                $user1 = $db->findUserById($row["id_user1"]);
                $user2 = $db->findUserById($row["id_user2"]);
                $user3 = $db->findUserById($row["id_user3"]);

                $resultVis[] = ["vizita"=>$row, "detinut"=>$detinut, "user1"=>$user1, "user2"=>$user2, "user3"=>$user3];
            }

            $view = $this->view('vizitator/istoric', array("programari"=>$resultProg, "vizite"=>$resultVis, "user"=>$user));
        } else {
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function viziteaza($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $view = $this->view('vizitator/viziteaza', array("user"=>$user));
        } else{
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function cauta($data = []){
        $user = getLoggedInUser();

        if($user){
            if(isset($_POST["name_cod"])){
                $name_cod = $_POST["name_cod"];
                $db = new Database();
                $result = $db->selectByNameOrCod($name_cod);
                $view = $this->view('vizitator/cauta', array("user"=>$user, "data"=>$result));
            }

            $view = $this->view('vizitator/cauta', array("user"=>$user));
        }else{
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function despre($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $view = $this->view('vizitator/despre', array("user"=>$user));
        } else {
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function profil($data = []){
        $db = new Database();
        $cod = $_POST["cod"];
        // echo $_POST["cod"];
        // return;
        $res = $db->testFindById($cod);

        $view = $this->view('vizitator/profil', $res);
    }

    public function statistics($data = []){
        $user = getLoggedInUser();

        if ($user) {
            $luna = isset($_POST["mounth"]) ? $_POST["mounth"] : 12;
            $ordinea = isset($_POST["order"]) ? $_POST["order"] : "ASC";
            $tip = isset($_POST["type"]) ? $_POST["type"] : "json";
            $categorie = isset($_POST["chategory"]) ? $_POST["chategory"] : 1;

            $db = new Database();
            $result=$db->makeTop($luna, $ordinea, $tip, $categorie);
            // print_r($result);

            $view = $this->view('vizitator/statistics', array("top"=>$result, "type"=>$tip));
        } else {
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }

    public function detinuti(){
        $user = getLoggedInUser();

        if($user){
            $db = new Database();
            $result = $db->getAllDetinuti();
            $finalResult = array();

            while($row = $result->fetch_assoc()){
                $finalResult[] = $row;
            }

            echo json_encode($finalResult);
            // echo json_encode($result);
        } else {
            $view = $this->view("startPages/LoginPage", $data);
            header("Location: /startPages/LoginPage");
        }
    }
}

?>