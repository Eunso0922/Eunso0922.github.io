<?php
function print_title(){
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  echo $id;
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
          echo "<li><a href=\"/webproject/community/index.php?id=$list[$i]\">$list[$i]</a></li>\n";
        }
      }
      $i = $i + 1;
    }
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      커뮤니티 글 생성
    </title>
  </head>
  <body>
    <h1><a href="/webproject/community/community.php">커뮤니티</a></h1>

    <ol>
      <?php
      print_list();
      ?>
    </ol>

    <a href="/webproject/community/create.php">커뮤니티 글 생성</a>

    <h2>
      <?php
      print_title();
      ?>
    </h2>

    <?php
    print_description();
     ?>

    <form action="/webproject/community/create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="Title">
      </p>
      <p>
        <textarea name="description" placeholder="Description"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>
