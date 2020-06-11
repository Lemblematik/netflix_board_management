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



<h2>All Movies</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Producer's Name</th>
        <th>Publishing Date</th>
        <th>Action</th>
    </tr>
    <?php

    for ($i = 1; $i<=count($result); $i++){


        if(array_key_exists("see$i", $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=get&z=' . $i);
        }
        elseif (array_key_exists("edit$i", $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=edit&z=' .$i);
        }
        elseif (array_key_exists("delete$i", $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=delete&z=' .$i);
        }
    }
    foreach ($result as $value) {
        echo '<tr>';
        echo '<td>' . $value->getName() . '</td>';
        echo '<td>' . $value->getProducerName() . '</td>';
        echo '<td>' . $value->getPublishDate() . '</td>';
        echo '<td>' .
            '<form method="post">


                <input  formaction="" type="submit"
                class="button" name="see'.$value->getMovieId().'"
                value="see"> <br>'
                .
                '<input  formaction="" type="submit"
                class="button" name="edit'.$value->getMovieId().'"
                value="edit"> <br>'
                  .
                '<input  formaction="" type="submit"
                class="button" name="delete'.$value->getMovieId().'"
                value="delete"> <br>'
                .
            '</form>'
            .
            '</td>';
        echo '</tr>';
    }
    ?>
</table>
<?php
if(array_key_exists('addMovie', $_POST)) {
    header('Location: /netflix-cms/index.php?x=movie&y=add&z=');
}
?>
<form method="post">
    <input  formaction="" type="submit"
            class="button" name="addMovie"
            value="Add new Movie"> <br>
</form>
<!--//header('Location: /netflix-cms/index.php?x=movie&y=edit&z='.'movieId'); -->
</body>
</html>
