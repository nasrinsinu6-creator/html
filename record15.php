<?php

$players = [
    "Rohit Sharma",
    "Virat Kohli",
    "Ravindra Jadeja",
    "Jasprit Bumrah",
    "KL Rahul"
];

$positions = [
    "Batsman (Captain)",
    "Batsman",
    "All-Rounder",
    "Bowler",
    "Wicket Keeper/Batsman"
];

?>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 60%;
            margin: auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid black;
            text-align: center;
        }
        th {
            background-color: #0275d8;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center; color:green;">Indian Cricket Players & Positions</h2>

<table>
    <tr>
        <th>SI No.</th>
        <th>Player Name</th>
        <th>Position</th>
    </tr>

    <?php
    for ($i = 0; $i < count($players); $i++) {
        echo "<tr>";
        echo "<td>" . ($i + 1) . "</td>";         
        echo "<td>" . $players[$i] . "</td>";     
        echo "<td>" . $positions[$i] . "</td>";  
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
