<!DOCTYPE html>
<html>
<head>
    <style>
table {
    font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
    border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>All Viewer</h2>

<table>
    <tr>
        <th>Username</th>
    </tr>
    <?php

    foreach ($viewers as $key => $value){
        echo '<tr>';
        echo '<td>' . $value->getUsername() . '</td>';
        echo '</tr>';
    }
    ?>
</table>
</body>
</html>
