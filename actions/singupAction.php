<?php
    require('actions/database.php');

    if (isset($_POST['submit'])){

        if(!empty($_POST['pseodo']) AND !empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['pwd'])){

            $user_pseodo = htmlspecialchars($_POST['pseodo']);
            $user_name = htmlspecialchars($_POST['name']);
            $user_email = htmlspecialchars($_POST['email']);
            $user_pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

            $verifieUser = $db -> prepare('SELECT pseodo FROM users WHER pseodo = ?');
            $verifieUser -> execute(array($user_pseodo));

            if($verifieUser->rowCount() == 0){
                $ajoutUser = $db -> prepare('INSERT INTO user(pseodo, nom, email, mdp) VALUES(?,?,?,?)');
                $ajoutUser-> execute(array($user_pseodo, $user_name, $user_email, $user_pwd));
            }else{
                $errorMsg = "l'utilisateur existe déja";
            }

        }else{
            $errorMsg = "veuillez remplir tous les champs";
        }
    }
?>