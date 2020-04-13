<?php 
/*
userlistpage
*/

    session_start();
    require_once('dbconnect.php');

    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }

    function get_user_list($db){
        $result = $db -> users -> find();
        $users  = iterator_to_array($result);
        return $users;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Twitter Clone</title>
</head>
<body>
    <?php include('header.php'); ?>

    <div>
        <p><b>List of users:</b></p>
        <?php
        $user_list = get_user_list($db);
        foreach ($user_list as $user) {
            echo '<span>' . $user['username'] . '</span>';
            echo '[<a href="profile.php?id=' . $user['_id'] .'">Visit Profile</a>]';
            echo '[<a href="follow.php?id=' . $user['_id'] .'">Follow</a>]';
            echo "<hr>";
            # code...
        }
        ?>
    </div>

</body>
</html>