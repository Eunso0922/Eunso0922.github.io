<?php
unlink('data/'.$_POST['id']);
header('Location: /webproject/community/index.php');
?>
