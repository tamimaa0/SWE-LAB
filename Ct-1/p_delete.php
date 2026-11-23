<?php


            $servername = 'localhost' ;
            $username = 'root' ;
            $password = '' ;
            $database = 'cricket' ;

            $connection = new mysqli($servername, $username , $password , $database) ;

            $id = $_GET['id'] ;

            $sql = "DELETE FROM PLAYER WHERE ID ='$id' " ;

            $result = $connection->query($sql) ;

            if($result){
                header("Location: player.php") ;
                exit;
            }
?>