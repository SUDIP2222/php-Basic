<?php
   /*
   $rand=rand();
   $getrandmax=getrandmax();

   echo $rand.'/'.$getrandmax; */

    if(isset($_POST['roll'])){
        $rand = rand(1,6);
        echo 'You rolled a '.$rand;
    }

?>

    <form action="60.php" method="POST">
        <input type="submit" name="roll" value="Roll dice.">
    </form>