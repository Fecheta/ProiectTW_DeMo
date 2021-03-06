<?php

include_once __DIR__ . "/../models/auth.util.php";
include_once __DIR__ . "/../models/database.util.php";

class Auth extends Controller{
    
    public function login(){
        // if(!isset($_POST["username"]) || !isset($_POST["password"])){
        //     echo "trebuie date pentru a te loga";//un view pentru bad request
        //     return;
        // }

        // $username = $_POST["username"];
        // $password = $_POST["password"];

        // $user = getUser($username, $password);

        // if($user){
        //     login($username, $password);
        //     header("Location: /vizitator/index");
        // }
        // else{
        //     echo "Probleme";
        // }

        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';

        $ok = true;
        $messages = array();

        if(!isset($_POST["username"]) || empty($username)){
            $ok = false;
            $messages[] = 'Username cannot be empty!';
        }
    
        if(!isset($_POST["password"]) || empty($password)){
            $ok = false;
            $messages[] = 'Password cannot be empty!';
        }
    
        if($ok){
            $user = getUser($username, $password);

            if($user){
                login($username, $password, $user->idUser);
                $ok = true;
                $messages[] = 'Successfull login!';
            } else {
                $ok = false;
                $messages[] = 'Incorect user/password combination!';
            }
        }
    
        echo json_encode(
            array(
                'ok' => $ok,
                'messages' => $messages
            )
        );
    }

    public function loginAdmin(){
        $username = isset($_POST["username"]) ? $_POST["username"] : '';
        $password = isset($_POST["password"]) ? $_POST["password"] : '';

        $ok = true;
        $messages = array();

        if(!isset($_POST["username"]) || empty($username)){
            $ok = false;
            $messages[] = 'Username cannot be empty!';
        }
    
        if(!isset($_POST["password"]) || empty($password)){
            $ok = false;
            $messages[] = 'Password cannot be empty!';
        }
    
        if($ok){
            $user = getUserAdmin($username, $password);

            if($user){
                loginAdmin($username, $password, $user->idUser);
                $ok = true;
                $messages[] = 'Successfull login!';
            } else {
                $ok = false;
                $messages[] = 'Incorect user/password combination!';
            }
        }
    
        echo json_encode(
            array(
                'ok' => $ok,
                'messages' => $messages
            )
        );
    }

    public function logout(){
        $_SESSION["username_vizitator"] = null;
        $_SESSION["password_vizitator"] = null;
        $_SESSION["id_vizitator"] = null;
        header("Location: /");
    }

    public function adminLogout(){
        $_SESSION["username_admin"] = null;
        $_SESSION["password_admin"] = null;
        $_SESSION["id_admin"] = null;
        header("Location: /");

        // $admin = getLoggedInAdmin();
        // print_r($admin);
    }

    public function register(){

    }

}

?>