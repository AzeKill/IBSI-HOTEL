<?php 
    session_start(); // Démarrage de la session
    require_once 'config.php'; // On inclut la connexion à la base de données

    if(!empty($_POST['adminName']) && !empty($_POST['passwordAdmin'])) // Si il existe les champs email, passwordAdmin et qu'il sont pas vident
    {
        // Patch XSS
        $adminName = htmlspecialchars($_POST['adminName']); 
        $passwordAdmin = htmlspecialchars($_POST['passwordAdmin']);
                
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        $check = $bdd->prepare('SELECT adminName, passwordAdmin, token FROM admin WHERE adminName = ?');
        $check->execute(array($adminName));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        // Si > à 0 alors l'utilisateur existe
        if($row > 0)
        {
                // Si le mot de passwordAdmine est le bon
                if(password_verify($passwordAdmin, $data['passwordAdmin']))
                {
                    // On créer la session et on redirige sur landing.php
                    $_SESSION['user'] = $data['adminName'];
                    header('Location: home.php');
                    die();
                }else{ 
                    header('Location: indexAdmin.php?login_err=passwordAdmin'); 
                    die(); 
                }
        }else{ 
            header('Location: indexAdmin.php?login_err=already'); 
            die(); 
        }
    }else{ 
        header('Location: indexAdmin.php'); // si le formulaire est envoyé sans aucune données
        die();
    } 
?>