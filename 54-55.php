
<?php


    $offset = 0;

    if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])){
        $text = $_POST['text'];
        $search = $_POST['searchfor'];
        $replace = $_POST['replacewith'];

        if(!empty($text)&&!empty($search)&&!empty($replace)){
            while($strpos = strpos($text, $search, $offset)){

            }


        }else{
            echo 'Please fill in all fields.';
        }

    }


?>

<form action="54-55.php" method="POST">

    <textarea name="text" rows="6" cols="30"></textarea><br><br>
    Search for:<br>
    <input type="text" name="searchfor"><br><br>

    Replace with:<br>
    <input type="text" name="replacewith"><br><br>

    <input type="submit" value="Find and Replace">


</form>