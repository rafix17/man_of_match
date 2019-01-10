<?php

class DeleteController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();
        /*
         * Méthode appelée en cas de requête HTTP GET
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
         */

        $ListejoueurModel= new DeleteModel();
        $joueur = $ListejoueurModel->DelUser($queryFields);

        $http->redirectTo("/");
        return ['joueur'=>$joueur];  /*envoie a la vue PHTML*/



    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        /*
         * Méthode appelée en cas de requête HTTP POST
         *
         * L'argument $http est un objet permettant de faire des redirections etc.
         * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
         */
    }
}