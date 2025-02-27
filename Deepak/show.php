<?php

include 'dbcon.php';

$sql= " SELECT * FROM deep1";
$result = $dbcon->query($sql);
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show</title>
    <link rel="stylesheet" href="insert.css">
</head>
<body>
    <center>
    <table>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>

        <?php
        
        if ($result->num_rows > 0) {
            

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                <td>{$row ['name']}</td>
                <td>{$row ['age']}</td>
                </tr>";

            }
            
        }else{
            echo "No data found";
        }
        $dbcon->close();
        
        
        ?>

    </table>
    </center>
</body>
</html>