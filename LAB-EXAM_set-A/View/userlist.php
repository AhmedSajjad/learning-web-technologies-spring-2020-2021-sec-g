<?php
    $title = "User List Page";
    session_start();
    if(isset($_SESSION['flag'])){

?>

 

    <a href="adminDashboard.php">Back</a> |
    <a href="../controller/logout.php">logout</a>    
    <br><br>

    
    <h1>User list</h1>

 

    <table border="1" width="800">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
        </tr>
        <?php

 

        $userArr = file_get_contents('../model/user.json');
        $userArr = json_decode($userArr);
        foreach($userArr as $user)
        {
            
            echo "<tr>";
            
            
                 echo "<td>"; echo $user->Id;  echo "</td>";
                 echo "<td>"; echo $user->name;  echo "</td>";
                 echo "<td>"; echo $user->email; echo "</td>"; 
                 echo "<td>"; echo $user->role; echo "</td>";
            echo '
            
                
            </tr>
            
            
            ';

 

        }    

 

        ?>

 

        
        
    </table>
    

<?php
    }else{
        header('location: login.php');
    }



?>