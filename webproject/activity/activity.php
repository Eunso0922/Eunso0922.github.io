<?php
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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <style>
      h3{
        display: inline;
        float: right;
      }

      .logo{
        display: inline;
        float: right;
        margin: 5px;
      }

      * {
          box-sizing: border-box;
      }
      body {
          margin: 0;
      }
      .header { /*상단 메뉴*/
          background-color: #f1f1f1;
          padding: 3px;
          padding-left: 70px;
      }
      .header  ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
      }
      .header  ul:after {
          content:'';
          display: block;
          clear:both;
      }
      .header  li {
          float: left;
      }
      .header  li a {
          display: block;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }
      .dropbtn {
          padding: 16px;
          font-size: 16px;
          border: none;
          cursor: pointer;
      }
      .dropdown {
          position: relative;
          display: inline-block;
      }
      .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
      }
      .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
      }
      .dropdown-content a:hover {
          background-color: #f1f1f1
      }
      .dropdown:hover .dropdown-content {
          display: block;
      }
      .dropdown:hover .dropbtn {
          background-color: yellowgreen;
          color:white;
      }
      .column { /* 사이드 메뉴 + 본문*/
          float: left;
          padding: 10px;
      }
      .column.side { /*사이드 메뉴*/
          width: 25%;
      }
      #sideMenu {
          text-align: center;
      }
      .column.side ul {
          list-style-type: none;
      }
      .column.side li a{ /*사이드 메뉴 목록*/
          text-align: center;
          text-decoration: none;
          height: 30px;
          line-height:30px;
          display:block;
          padding:0 20px;
          font-size: 12px;
          color: #555;
      }
      .column.side a:hover { /*사이드 메뉴 active*/
          background-color : yellowgreen;
          color:white;
      }
      .column.middle { /*본문*/
          width: 70%;
      }
      #title {
          text-align: center;
      }
      .row:after { /* Clear floats after the columns */
          content: "";
          display: table;
          clear: both;
      }
      @media screen and (max-width: 600px) { /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
          .column.side, .column.middle {
              width: 100%;
          }
      }
      .footer { /* Style the footer */
          background-color: #f1f1f1;
          padding: 10px;
          text-align: center;
      }
    </style>

    <title>대외 활동</title>
  </head>

  <body>
    <h1>대외 활동</h1>

    <div class="header">
        <ul>
            <li>
                <a href="/webproject/main.php">
                    <img id="logo" width=43.2px height=43.2px src="/webproject/images/logos/logolock.png">
                </a>
            </li>
            <li>
                <div class="dropdown">
                    <button class="dropbtn">직군</button>
                    <div class="dropdown-content">
                        <a href="/webproject/joblist/job1.html">모의 해킹 전문가</a>
                        <a href="/webproject/joblist/job2.html">보안 기술 영업</a>
                        <a href="/webproject/joblist/job3.html">보안 컨설턴트</a>
                        <a href="/webproject/joblist/job4.html">보안 관제사</a>
                        <a href="/webproject/joblist/job5.html">사이버 수사관</a>
                        <a href="/webproject/joblist/job6.html">악성 코드 분석가</a>
                        <a href="/webproject/joblist/job7.html">인증 심사원</a>
                        <a href="/webproject/joblist/job8.html">정보 보호 최고 책임자</a>
                        <a href="/webproject/joblist/job9.html">DB 보안 전문가</a>
                    </div>
                </div>
            </li>
                <li><a href="">로드맵</a></li>
                <li><a href="/webproject/activity/activity.php">대외활동</a></li>
                <li><a href="/webproject/news/news.php">News</a></li>
                <li><a href="/webproject/community/community.php">커뮤니티</a></li>
            </ul>
        </h3>
    </div>

    <div class="row">
        <div class="column side">
            <nav>
                <h4 id="sideMenu">카테고리</h4>
                <ul>
                  <?php
                  print_list();
                  ?>
                </ul>
            </nav>
        </div>

    <div class="logo">
    <a href="/webproject/activity/activitycreate.php"><img width=43.2px height=43.2px src="/webproject/images/logos/create.png"></a>
    </div>

    <h3>글 생성</h3>

  </body>
</html>
