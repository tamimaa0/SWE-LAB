<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add a player </h2>

    <form method = 'POST' >

    <div >
        <label >ID</label>
        <input type="text" name = 'id'>
    </div>

     <div >
        <label >Name</label>
        <input type="text" name = 'name'>
    </div>

     <div >
        <label >Country name</label>
        <input type="text" name = 'country'>
    </div>

     <div >
        <label >Club Name </label>
        <input type="text" name = 'c_name'>
    </div>

    <button>Submit</button>
    <a href='/Ct-1/player.php'>Back</a>



    </form>

</body>
</html>

<?php

     $servername = 'localhost' ;
            $username = 'root' ;
            $password = '' ;
            $database = 'cricket' ;

            $connection = new mysqli($servername, $username , $password , $database) ;

            
            
            if(!$connection){
                echo "Connection failed" ;
                exit ;
            }

    
     
     if(isset($_POST['id'] ,$_POST['name'], $_POST['country'], $_POST['c_name'])){
     $id = $_POST['id'] ;
     $name =$_POST['name'];
     $country =  $_POST['country'] ;
     $c_name = $_POST['c_name'] ;

     $sql = "INSERT INTO PLAYER VALUES ('$id' , '$name' , '$country' , '$c_name')" ;
     
     $result = $connection->query($sql) ;

     if($result){
        echo "Added Successfully" ;
     }

     }else {
        echo "Input All field " ;
     }


?>