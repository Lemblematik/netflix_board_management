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

    use SInfPaKamd\WESS20\model\MovieModel;

    $movieId = 'movieId';
    for ($i = 0; $i<count($result); $i++){
        $id =  "{$result[$i]->getMovieId()}";
        if(array_key_exists("see$id", $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=get&z=' . $id);
        }
        elseif (array_key_exists("edit$id", $_POST)) {
            header('Location: /netflix-cms/index.php?x=movie&y=edit&z=' .$id);
        }
        elseif (array_key_exists("delete$id", $_POST)) {
            //define id of movie to delete
            //delete on db = $isSuccess
            $movieModell = new MovieModel();
            $isSuccess = $movieModell->deleteMovie($id);
            if($isSuccess){
                header('Location: /netflix-cms/index.php?x=movie&y=add&z=success');
            }else{
                header('Location: /netflix-cms/index.php?x=movie&y=add&z=nosuccess');
            }
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
