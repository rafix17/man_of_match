<?php

class PlayerController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();


        $playerModel= new PlayerModel();
        $PlayerResponse = $playerModel->getOnePlayer($queryFields["id"]);


        $http->SendJsonResponse($PlayerResponse);


    }


    public function httpPostMethod(Http $http, array $formFields)
    {

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