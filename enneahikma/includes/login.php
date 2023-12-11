<?php 

    if(isset($_POST['formlogin'])){
        extract($_POST);

        if(!empty($lemail) && !empty($lpassword))
        {
            $q =$db->prepare("SELECT * FROM users WHERE email = :email");
            $q->execute(['email' => $lemail]);
            $result = $q -> fetch();

            if($result == true)
            {
                //le compte existe bien
                $hashpassword = $result['password'];
                if(password_verify($lpassword, $hashpassword))
                {
                    echo "le mots de passe est bon";

                    $_SESSION['email'] = $result['email'];
                    $_SESSION['date'] = $result['date'];
                }
                else
                {
                    "le mots de passe est incorrect";
                }
            }
            else 
            {
                echo "le compte portant l'email " . $lemail ." n'existe pas ";
            }
        }
        else 
        {
            echo "Completez l'ensemble des champs!";
        }



    }


?>