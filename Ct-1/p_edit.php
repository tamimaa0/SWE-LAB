
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

        

        $id = $_GET['id']    ;
        $sql = "SELECT *FROM PLAYER WHERE ID = '$id' " ;

        $result = $connection->query($sql) ;

        if($result){
            $row = $result->fetch_assoc() ;

        }
     
    if(isset($_POST['id'] ,$_POST['name'], $_POST['country'], $_POST['c_name'])){
    
     $name =$_POST['name'];
     $country =  $_POST['country'] ;
     $c_name = $_POST['c_name'] ;

     $sq = "UPDATE PLAYER SET ID = '$id' , name = '$name' , country = '$country' , c_name = '$c_name' WHERE ID = '$id' " ;
     
     $result = $connection->query($sq) ;

     if($result){
        echo "Updated Successfully" ;
        header("Location: player.php");
        exit;
     }

     }else {
        echo "Input All field " ;
     }
    
   


?>

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
        <input type="text" name = 'id' value = "<?php echo htmlspecialchars($row['id']); ?>">
    </div>

     <div >
        <label >Name</label>
        <input type="text" name = 'name' value = "<?php echo htmlspecialchars($row['name']); ?>">
    </div>

     <div >
        <label >Country name</label>
        <input type="text" name = 'country' value = "<?php echo htmlspecialchars($row['country']); ?>">
    </div>

     <div >
        <label >Club Name </label>
        <input type="text" name = 'c_name' value = "<?php echo htmlspecialchars($row['c_name']); ?>">
    </div>

    <button>Submit</button>
    <a href='/Ct-1/player.php'>Back</a>



    </form>

</body>
</html>


