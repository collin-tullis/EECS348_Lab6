<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $size = intval($_POST["size"]);
    echo "<table border=1>";
    echo "<tr><td></td>";

    for($col = 1; $col <= $size; $col++){
        echo "<td>$col</td>";
    }
    echo "</tr>";
    
    for($row = 1; $row <= $size; $row++){
        echo "<tr><td>$row</td>";
        for($col = 1; $col <= $size; $col++){
            $result = $row * $col;
            echo "<td>$result</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    }
?>