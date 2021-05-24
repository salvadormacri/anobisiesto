<html>
   <body>

     Detectamos que<br>

     <?php
        $año = $_POST["año"];

        if( ($año%4 == 0 && $año%100 != 0) || $año%400 == 0 )
        {
            echo "es bisiesto", $año; 
        }
        else
        {
            echo  "no es bisiesto", $año;
        }
     
     ?>
     
   </body>
</html>