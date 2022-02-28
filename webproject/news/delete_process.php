<?php
unlink('data/'.$_POST['id']);
header('Location: /webproject/news/index.php');
?>
