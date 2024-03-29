<?php

class LogoutController
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

        session_destroy();

        $http->redirectTo("/");

    }


    public function httpPostMethod(Http $http, array $formFields)
    {

    }
}


?>