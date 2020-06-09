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
    foreach ($result as $key => $value) {
        if(array_key_exists('see', $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=get&z=' . $value->getMovieId());
        }
        elseif (array_key_exists('edit', $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=edit&z=' . $value->getMovieId());
        }
        elseif (array_key_exists('delete', $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=delete&z=' . $value->getMovieId());
        }
        echo '<tr>';
        echo '<td>' . $value->getName() . '</td>';
        echo '<td>' . $value->getProducerName() . '</td>';
        echo '<td>' . $value->getPublishDate() . '</td>';
        echo '<td>' .
            '<form method="post">
                <input  formaction="" type="submit"
                class="button" name="see"
                value="see"> <br>'
                .
                '<input  formaction="" type="submit"
                class="button" name="edit"
                value="edit"> <br>'
                .
                '<input  formaction="" type="submit"
                class="button" name="delete"
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
