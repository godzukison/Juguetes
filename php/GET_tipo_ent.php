<?php
    include 'conexion.php' ;

      //  $q = "CALL Listar(1, 2016)"; 
$q = "select Id,Tipo from tipo;"; 
       //ESTE ARRAY ALMACENARA LOS REGISTROS
       $datos = array(array("Id"=>"0", "Tipo" =>"Todos los tipos"));

        //REALIZA CONSULTA
        if($result = $mysqli->query($q)){
           
            //ITERAMOS TODOS LOS REGISTROS DEVUELTOS Y LLENAMOS EL ARRAY
            while($row = $result->fetch_array(MYSQLI_ASSOC)){
                $datos[] = $row;
             
            }
          
           echo  json_encode(array("data"=>$datos));
              
            
        }
        $result->close();
        $mysqli->close();
?>