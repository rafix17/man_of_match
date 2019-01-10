<?php

class HomeController
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

        $ListejoueurModel= new PlayerModel();
        $joueur = $ListejoueurModel->getAllPlayerRand(4);
        $moyennes = $ListejoueurModel->getMoyenne();
        $response = $this->viewApi();


        return ['joueur'=>$joueur,
                "moyennes"=>$moyennes,
            "response"=>$response];  /*envoie a la vue PHTML*/
    }


    public function viewApi(){
        $curl=  curl_init();


        $opts = [
            CURLOPT_URL => 'https://newsapi.org/v2/top-headlines?country=fr&category=sports&apiKey=3e5fed1342614bfbbe3985d69a4ecdf2',
            CURLOPT_RETURNTRANSFER => true ];

        curl_setopt_array($curl, $opts);

        $response = json_decode(curl_exec($curl), true);
        return $response;
    }


        /*public function viewApi(){
            $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'https://newsapi.org/v2/everything?sources=lequipe&apiKey=3e5fed1342614bfbbe3985d69a4ecdf2');

        return json_decode($res->getBody());
            $articles = $this->viewApi();*/











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