  
<?php

                if(isset($_POST['submit']))
                {
                    $atext = array ('jpg','jpeg','png');                 
                    $files=$_FILES['ufile']['name'];                    
                    $extn=pathinfo($files,PATHINFO_EXTENSION);          
                    
                   
                    if( ($_FILES['ufile']['size'])> 4194304 || !in_array($extn,$atext) )     

                    {    
                        echo "The file is large or the format is not correct...";

                    }
                    else
                    {
                        echo"Accepted !";
                    }

                }
                
?>