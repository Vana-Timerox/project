<?php
    //Laboratory 1 Chessboard
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChessBoard</title>
</head>
<body>
    <?php
        
        echo"<div style='display:inline-grid ;grid-template-columns:repeat(8, 70px); border:3px solid #343434'>";

        for ($row = 1; $row <= 8; $row++) {
            for ($col = 1; $col <= 8; $col++) {
                $color = ($col + $row);

                if($color % 2 == 0){
                echo "<div style='width: 70px; height: 70px; background-color: #343a40'></div>";
                }
                else{
                    echo "<div style='width: 70px; height: 70px; background-color: #f8f9a'></div>";
                }

            }
        }
        echo"</div>";
    ?>
</body>
</html>