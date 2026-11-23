<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Player Profile</h2>
<br>

<a href='/Ct-1/p_add.php'>Add Player</a>

<br><br>

    <table>

        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Country Name</th>
                <th>Club Name </th>
                <th>
                    Action
                </th>
            </tr>
        </thead>

        <tbody>

        <?php

            $servername = 'localhost' ;
            $username = 'root' ;
            $password = '' ;
            $database = 'cricket' ;

            $connection = new mysqli($servername, $username , $password , $database) ;

            $sql = "SELECT *FROM PLAYER" ;
            
            if(!$connection){
                echo "Connection failed" ;
                exit ;
            }

            $result = $connection->query($sql) ;

            if(!$result){
                echo "Something Wrong in query" ;
                exit ;
            }

            while($row = $result ->fetch_assoc()){
                echo "
            <tr>
            <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[country]</td>
            <td>$row[c_name]</td>
            <td>
                <a href='/Ct-1/p_edit.php?id=$row[id]'>Edit</a>
                <a href='/Ct-1/p_delete.php?id=$row[id]'>Delete</a>

            </td>
        </tr>
                ";
            }



        ?>

        

        </tbody>

    </table>
</body>
</html>