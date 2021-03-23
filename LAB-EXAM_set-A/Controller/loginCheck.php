<?php

    session_start();

    if(isset($_POST['submit'])){
        $users = file_get_contents('../Model/user.json');
        $users = json_decode($users);


        $username = $_POST['email'];
        $password = $_POST['password'];

        if($username == "" || $password == ""){
            echo "null input...";
        }else{


            foreach($users as $user)
            {
                if($user->email == $username && $user->password == $password && $user->role == "admin"){
                    
                    $_SESSION['flag'] = true;
                    header('location: ../View/adminDashboard.php');
                    break;
                }
                else if($user->email == $username && $user->password == $password && $user->role == "admin"){
                    $_SESSION['flag'] = true;
                    header('location: ../View/userDashboard.php');
                    break;
                }
                
                else
                {
                    echo "Invalid Password or User";
                    break;
                }
            }

            
        }
    }


?>