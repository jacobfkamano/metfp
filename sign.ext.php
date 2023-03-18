<?php
if(isset($_POST["signup"])){
require 'principal/config/database.php'; 
$name=$_POST['nom_d'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$matricule=$_POST['matricule'];
$username=$_POST['username'];
$password=$_POST['pwd'];
$password2=$_POST['re-pwd'];
if (!filter_var($email,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username))
   {
    header('Location:sign_up.php?error=invalidusername&email');
    exit();
    } elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
        {
        header('Location:sign_up.php?error=invalidemail');
        exit();
        } elseif (!preg_match("/^[a-zA-Z0-9]*$/",$username)) 
                {
                    header('Location:sign_up.php?error=invalidusername');
                    exit();
                } elseif ($password!==$password2) 
                    {
                        header('Location:sign_up.php?error=pwddontmatch');
                        exit();
                    } else {
                        
                            $sql=$bdd->query("SELECT COUNT(*) from directeur WHERE username='".$username."';");
                            if (!$sql) {
                                        header('Location:sign_up.php?error=sqlerreur');
                                        exit();
                                       } else {
                                                
                                        
                                        $num_rows = $sql->fetchColumn();
                                              if($num_rows>0){
                                                header('Location:sign_up.php?error=usernametaken');
                                                exit();
                                               
                                                  } else {
                                                    $req = $bdd->prepare('INSERT INTO directeur(matricule,nom_d, prenom, username, email,pwd)
                                                    VALUES(:matricule,:nom_d, :prenom, :username,  :email, :pwd)');
                                                    $req->execute(array(
                                                        'matricule' => $matricule,
                                                        'nom_d' => $name,
                                                        'prenom' => $prenom,
                                                        'username' => $username,
                                                        'email' => $email,
                                                        'pwd' => password_hash($password, PASSWORD_BCRYPT),
                                                       
                                        
                                                        ));
                                                        if(!$req){
                                                                header('Location:sign_up.php?error=sqlerreur');
                                                                exit();
                                                                 } else {
                                                                    header('Location:sign_up.php?signup=success'); 
                                                                    exit();
                                                                         }
                                                         }
                                              }

                            }
                            $req->closeCursor(); 

} else {
    header('Location:sign_up.php');
    exit();
}


?>