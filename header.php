<?php  $userData = $db->users->findOne( array('_id' => $_SESSION['user']));  ?>

<div>
    <span>Welcome, <?php echo $userData['username']; ?> ! </span></br>
    [<a href="home.php">Home</a>]
    [<a href="profile.php?id=<?php echo $_SESSION['user']; ?>"> View profile</a>]
    [<a href="userlist.php"> View Users List </a>]
    [<a href="logout.php"> Logout </a>]
</div>