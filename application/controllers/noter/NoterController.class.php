<?php

class noterController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        session_start();



    }


    public function httpPostMethod(Http $http, array $formFields)
    {

        session_start();


        $id = $formFields["idJoueur"];

        $vote=$_SESSION["id"];
        $notationModel = new NotationModel();
        $notationModel->AddNote($formFields, $id,$vote);




        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Port = 25;
        $mail->Username = "raphaeltest51@gmail.com";
        $mail->Password = "";
        $mail->IsHTML(true);
        $mail->CharSet = "utf-8";
        $mail->SetFrom('apple@apple.com', 'apple@apple.com');
        $mail->Subject = 'Objet de lemail';

        $mail->Body ='
<style>
.customail{

color: yellow;
}

</style>



<div class="customail"><h1>Mail type</h1>

<video src="https://vimeo.com/3363671"></video>



    
            <p> Pour plus de details contactez nous</p></div>'

            /*. (  intval($formFields["off"])   +   intval($formFields["pres"])   + intval($formFields['def']) +  intval($formFields["tac"]) + intval($formFields["end"])

                + intval($formFields["agr"])  )/ 6 ."de moyenne"*/;

        $mail->AddAddress('dand95880@gmail.com');
        $mail->AddAddress('raphaeltest51@gmail.com');

        if(!$mail->Send()) {
            echo 'Message was not sent.';
            echo 'Mailer error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }
        // Redirection vers la page d'accueil.
        $http->redirectTo('/recap');


    }
    /*
    * Méthode appelée en cas de requête HTTP GET
    *
    * L'argument $http est un objet permettant de faire des redirections etc.
    * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    */






}


?>