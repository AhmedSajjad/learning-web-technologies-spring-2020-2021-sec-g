<?php


        if(isset($_POST['submit']))
        {
           $f_name = $_FILES['myFile']['name'];
           $f_tmp = $_FILES['myFile']['tmp_name']; 
           $store = "upload/".$f_name; 
           $f_size = $_FILES['myFile']['size'];
           $f_extension = explode('.', $f_name); 
           $f_extension = strtolower(end($f_extension)) ;
           if($f_extension == 'jpeg' or $f_extension == 'jpg' or $f_extension == 'png')
           {
               if($f_size <= 4194304)
               {
                   echo "File Uploaded Successfully";
               }

               else
               {
                   echo "Size Should Not Exceed 4 mb";
               }
           }

           else
           {
               if(move_uploaded_file($f_tmp, $store))
               {
                 echo "<p style = 'color:green'>Uploaded Successfully!</p>";   
               }
           }   
         
        }

        else
        {
            echo "<p style = 'color:red'>Please select a photo first</p>";

        }

?>