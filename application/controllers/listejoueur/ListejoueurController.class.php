<?php

class ListejoueurController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();

        $ListejoueurModel= new PlayerModel();
        $joueur = $ListejoueurModel->getAllPlayer();

        return ['joueurs'=>$joueur];  /*envoie a la vue PHTML*/


    }


    public function httpPostMethod(Http $http, array $formFields)
    {




       // $http->redirectTo("/");

// message d'erreur et redirection sur signup

    }
    /*
    * Méthode appelée en cas de requête HTTP GET
    *
    * L'argument $http est un objet permettant de faire des redirections etc.
    * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    */






}


?>