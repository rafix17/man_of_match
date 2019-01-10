<?php
/**
 * Created by PhpStorm.
 * User: wabap21
 * Date: 03/01/18
 * Time: 10:52
 */

class PlayerModel
{
    function getAllPlayerRand($limit = false)
    {

        $database = new Database();

        $query = "SELECT * FROM joueur ORDER BY RAND()";

        if($limit)
            $query .= " LIMIT ".$limit;

        return $database->query($query);
    }


    function getAllPlayer()
    {

        $database = new Database();

        $query = "SELECT * FROM joueur ";


        return $database->query($query);
    }



        function getMoyenne()
        {

            //*connexion database*//
            $database = new Database();
            $query = "SELECT joueurId, playerNom,playerPrenom,photo, AVG (moyenne) AS noteGeneral FROM joueur
        INNER JOIN historique ON joueur.id = historique.joueurId
        WHERE joueur.id = historique.joueurId
        GROUP BY JoueurId
        
        
        ";

            return $database->query($query);

        }



        function getOnePlayer($id)
        {

            $database = new Database();
            //*connexion database*//
            $query = "SELECT * FROM joueur WHERE id= ?";

            return $database->queryOne($query, [$id]);

        }


    }

?>