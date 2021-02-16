<?php 
            $students = ['Sajjad' ,'Ahmed' ,'CSE'];
            $search='CSE';
            for ( $i=0; $i<sizeof($students); $i++)
            {
                if ($students[$i] == $search)
                {
                    echo $search."  Found It !!";
                 }                
            }
           
           
?>