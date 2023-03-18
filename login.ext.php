<?php

if (isset($_POST['signin'])) 
{
    require 'principal/config/database.php'; 
    $username=$_POST['username'];
    $password=$_POST['pwd'];
    $sql=$bdd->query("SELECT * from directeur WHERE username='".$username."' OR email='".$username."';");
    if (!$sql) {
                header('Location:index.php?error=sqlerreur');
                exit();
               }  else {
                       $result = $sql->fetch(PDO::FETCH_ASSOC);
                       if ($result) {
                                     $pwdcheck= password_verify($password,$result['pwd']);
                                     if ($pwdcheck==false) {
                                                            header('Location:index.php?error=wrongpassword');
                                                            exit();
                                                           } elseif ($pwdcheck==true) {
                                                                                session_start();
                                                                                $_SESSION['id_d']=$result['id_d'];
                                                                                $_SESSION['nom_d']=$result['nom_d'];
                                                                                $_SESSION['matricule']=$result['matricule'];
                                                                                $_SESSION['prenom']=$result['prenom'];
                                                                                $_SESSION['email']=$result['email'];
                                                                                $_SESSION['whatsapp']=$result['whatsapp'];
                                                                                header("location:principal/?login=success");
                                                                                 }
                                     } else {
                                            header('Location:index.php?error=dontexist');
                                            exit();
                                             }
                       }
                       $result->closeCursor(); 

 } else {
    header('Location:index.php');
    exit();
    }
          
                         
?>