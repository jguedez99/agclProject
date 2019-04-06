<?php

class RepositorioUsuario {
    
    public static function get_all($connection){
        
        $usuarios = array();
        
        if (isset($connection)){
            
            try {
                
                include_once 'Usuario.inc.php';
                
                $sql = 'SELECT * FROM usuarios';
                
                $sentencia = $connection -> prepare($sql);
                $sentencia -> execute();
                $resultados = $sentencia -> fetchAll();
                
                if (count($resultados)) {
                    foreach ($resultados as $fila) {
                        $usuarios[] = new Usuario(
                                 $fila['id'],$fila['nombre'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila['activo']
                        );
                    }
                } else {
                    print 'No hay usuarios';
                } 
            } catch (PDOException $ex) {
                print 'ERROR' . $ex -> getMessage();   
            }
        }
        return $usuarios;
        
    }

}
