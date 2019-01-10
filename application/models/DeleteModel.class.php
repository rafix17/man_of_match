<?php
/**
 * Created by PhpStorm.
 * User: wabap21
 * Date: 03/01/18
 * Time: 10:52
 */

class DeleteModel
{
    function DelUser($queryFields)
    {
        $id=$queryFields['id'];
        $database = new Database();
        //*connexion database*//
        $query = ('DELETE  FROM joueur
        WHERE id=? ');

        $database->executeSql($query,[$id]);

    }




    function Loadjoueur($id)
    {
        $database = new Database();
        //*connexion database*//
        $query = ('SELECT id, playerNom, playerPrenom,telephone,age,comment,mail ,mdp
                  FROM joueur
                  WHERE id=?');


        return $database->queryOne($query,[$id]);

    }






}
?>