<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}
function print_description(){
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  echo file_get_contents("data/".$id);
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"/webproject/activity/index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="/webproject/activity/activity.php">대외 활동</a></h1>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="/webproject/activity/activitycreate.php">대외 활동 글 생성</a>
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>
  </body>
</html>
