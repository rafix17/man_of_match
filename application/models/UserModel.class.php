<?php
/**
 * Created by PhpStorm.
 * User: wabap21
 * Date: 03/01/18
 * Time: 10:52
 */

class UserModel
{
    function addUser($formFields)
    {

        $database = new Database();
        //*connexion database*//
        $query = ('INSERT INTO joueur (playerNom, playerPrenom,telephone,age,comment,mail ,mdp)
       
  	VALUES(?,?,?,?,?,?,?) ');

        $database->executeSql($query, [$formFields['nom'], $formFields['prenom'],$formFields['telephone'],$formFields['age'],$formFields['textarea'],$formFields['mail'], $formFields['mdp']]);

    }


    function ConnectUser($formFields)
    {

        $mail = $formFields['email'];
        $motdp = $formFields['mdp'];

        $database = new Database();
        //*connexion database*//
        $query = 'SELECT *
                  FROM user
                  WHERE email=? AND mdp=?';



        return $database->queryOne($query,[$mail,$motdp]);

    }

    function addPlayer($formFields)
    {

        $database = new Database();
        //*connexion database*//
        $query = ('INSERT INTO user (userNom, userPrenom,telephone,age,comment,email ,mdp)
       
  	VALUES(?,?,?,?,?,?,?) ');

        $database->executeSql($query, [$formFields['nom'], $formFields['prenom'],$formFields['telephone'],$formFields['age'],$formFields['textarea'],$formFields['mail'], $formFields['mdp']]);

    }

function updateplayer($formFields){


    $id=$formFields['id'];
    $database = new Database();
    //*connexion database*//
    $query = ('UPDATE joueur  SET playerNom=?, playerPrenom=?,telephone=?,age=?,comment=?,mail=?
 where id=?');



    $database->executeSql($query, [$formFields['nom'], $formFields['prenom'],$formFields['telephone'],$formFields['age'],$formFields['textarea'],$formFields['mail'],$formFields['id'] ]);

}




}
?>