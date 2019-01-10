<?php

class ModifeController
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

        $id = $queryFields['id'];

        $joueur = $ListejoueurModel->Loadjoueur($id);;



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


        $UserModel = new UserModel();

        $UserModel->updateplayer($formFields);

        $http->redirectTo("/admin");
    }
}

?>