  
<?php 
            $num1=2000;
            $num2=3000;
            $num3=4000;

            if ($num1 > $num2 && $num1>$num3)
            {
                $large=$num1;
            }
            else if ($num2 > $num1 && $num2>$num3)
            {
                $large=$num2;
            }
            else if ($num3 > $num1 && $num3>$num2)
            {
                $large=$num3;
            }


            echo $large. "  Is biggest Number";
?>