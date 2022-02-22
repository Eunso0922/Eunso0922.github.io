<?php
file_put_contents('webproject/activity/'.$_POST['title'], $_POST['description']);
header('Location: /webproject/activity/activity.php?id='.$_POST['title']);
?>
