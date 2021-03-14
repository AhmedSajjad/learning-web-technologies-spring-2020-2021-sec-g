  
<?php
    $title = "User List Page";

?>

 

    <a href="AdminDashboard.php">Back</a> |
    <a href="../controller/logout.php">logout</a>    
    <br><br>


 
    
    <h1>User list</h1>

 

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>ACTION</th>
        </tr>
        <?php

 

        $userArr = file_get_contents('../model/users.json');
        $userArr = json_decode($userArr);
        foreach($userArr as $user)
        {
            
            echo "<tr>";
            
            
                 echo "<td>"; echo $user->Id;  echo "</td>";
                 echo "<td>"; echo $user->name;  echo "</td>";
                 echo "<td>"; echo $user->email; echo "</td>"; 
                 echo "<td>"; echo $user->role; echo "</td>";
            echo '
            
                <td>
                    <a href="edit.php?id=1"> EDIT</a> |
                    <a href="delete.php?id=1"> DELETE</a>
                </td>
            </tr>
            
            
            ';

 

        }    

 

        ?>

 

        
        
    </table>