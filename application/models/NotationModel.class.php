<?php
/**
 * Created by PhpStorm.
 * User: wabap21
 * Date: 03/01/18
 * Time: 10:52
 */

class NotationModel
{


    function addNote($formFields, $id,$vote)
    {

        $database = new Database();
        //*connexion database*//
        $query = ('INSERT INTO notation (offensif,defensif,pressing,tactique,endurance,agressivité, joueurId,votant)
       
  	VALUES(?,?,?,?,?,?,?,?) ');

        $lastid = $database->executeSql($query, [$formFields['off'], $formFields['def'], $formFields['pres'],$formFields['tac'],$formFields['end'],$formFields['agr'],$id,$vote]);


        $moyenne = (


        (  intval($formFields["off"])   +   intval($formFields["pres"])   + intval($formFields['def']) +  intval($formFields["tac"]) + intval($formFields["end"])

                        + intval($formFields["agr"])  )/ 6
        );




        $query = ('INSERT INTO historique (moyenne,notationId,joueurId,dateMatch)
       
  	VALUES(?,?,?,NOW())');

        $database->executeSql($query,[$moyenne,$lastid,$id]);




    }

}








?>