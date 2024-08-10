<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $studentdb=[
        ["SNO","SNAME","DEGREE","PERCENTAGE"], //0
        ["01","SURIYA","BCA","79"],//1
        ["02","Karthi","Bsc cs","80"],//2
        ["03","Keerthi","Bsc cs","78"],//3
    ];

    function genratetable($data){
        echo "<table border='1' cellspacing='0' cellpadding='5'>";
        foreach($data as $row){
            echo"<tr>";
            foreach($row as $cell){
                echo "<td>$cell</td>";
            }echo "</tr>";
        }echo "</table>";
    }

    genratetable($studentdb);
?>
</body>
</html>