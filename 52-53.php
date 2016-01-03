<?php
    $find = array('alex','billy','dale');
    $replace = array('a**x','b***y','d**e');
    if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
        $user_input = $_POST['user_input'];
        $user_input_lc = strtolower($user_input);
        $user_input_new = str_ireplace($find, $replace, $user_input_lc);
        echo $user_input_new;
    }
?>


<form action="52-53.php" method="POST">
    <textarea name="user_input" rows="6" cols="30"><?php echo $user_input; ?></textarea>
    <input type="submit" name="submit" value="submit">
</form>




