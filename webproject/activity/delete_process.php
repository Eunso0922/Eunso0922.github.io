<?php
unlink('data/'.$_POST['id']);
header('Location: /webproject/activity/index.php');
?>
