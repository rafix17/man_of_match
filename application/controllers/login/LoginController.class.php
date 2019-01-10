<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        /*
        * Méthode appelée en cas de requête HTTP GET
        *
        * L'argument $http est un objet permettant de faire des redirections etc.
        * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
        */
        session_start();

    }


    public function httpPostMethod(Http $http, array $formFields)
    {

        $userconnect = new UserModel();

        $user=$userconnect->ConnectUser($formFields);
        if ($user != false){
// ouverture de session
// redirection sur la page d'accueil
            session_start();
            $_SESSION["isConnected"] = true;

            $_SESSION["firstName"] = $user["userNom"];
            $_SESSION["prenom"] = $user["userPrenom"];

            $_SESSION["id"] = $user["id"];
            $_SESSION["statut"] = $user["statut"];
            $http->redirectTo("/");
        }
        else{
// message d'erreur et redirection sur signup
            $http->redirectTo("/login");
        }
        /*
        * Méthode appelée en cas de requête HTTP GET
        *
        * L'argument $http est un objet permettant de faire des redirections etc.
        * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
        */
    }
}


?>