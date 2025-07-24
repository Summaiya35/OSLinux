<!DOCTYPE html>
<html>
<head>
  <title>Youtube.clone</title>
  <style>
    .pic1 {
      width: 300px;
      display: block;
    }

    .search {
      display: block;
      margin: 20px auto;
      width: 300px;
      padding: 8px;
      font-size: 14px;
    }

    .video_section {
      max-width: fit-content;
      margin: 0 auto 30px auto;
    }

    .channel-info {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .pic2 {
      height: 40px;
      border-radius: 50%;
    }

    .videotitle {
      width: 300px;
      text-align: left;
      margin-bottom: 0;
    }

    .titlediv {
      margin-left: -50px;
      text-align: left;
    }

    .author1, .stats1 {
      margin: 2px 0;
    }

    .author, .stats {
      margin: 2px 0;
      margin-left: -50;
    }

    .combined {
      text-align: center;
    }

    .channel-text
    {
      text-align: left;
    }

    .section1, .section2, .section3 {
      width: 300px;
      display: inline-block;
      margin-left: 17px;
      vertical-align: top;
    }

    .side-bar{
      position: fixed;
      left: 0;
      bottom: 0;
      top: 55px;
      width: 100px;
    }
    .side-bar-link
    {
      background-color: rgba(11, 0, 0, 0.932);
      height: 50px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>
<p>Designed BY: Ammarah Mirani.
  </p>
<div style="text-align: right;">
  <a href="sql.php" target="_blank" style="font-size: 20px; color: rgb(3, 0, 4); text-decoration: none;"> <strong>SQL Database 
    Next Page ➡️</strong></a>
    </div>
    <?php
    
    ?>
  <!-- Search Bar -->
  <input class="search" type="text" placeholder="Search">

  <!-- Top Video Section -->
  <div class="video_section">
    <a href="https://www.youtube.com/watch?v=G3e-cpL7ofc&list=PPSV&ab_channel=SuperSimpleDev"  target="_blank">
    <img class="pic1" src="pics/vido_image.png"  width="400px">
  </a>
    <div class="channel-info">
      <img class="pic2" src="pics/unnamed.jpg" alt="Channel Picture">
      <div class="channel-text">
        <p class="videotitle">
          HTML & CSS Full <strong>Course</strong> - Beginner to Pro
        </p>
        <p class="author1">SuperSimpleDev</p>
        <p class="stats1">15M views &#183; 5 years ago</p>
      </div>
    </div>
  </div>

  <!-- 3 Video Suggestions -->
  <div class="combined">

    <div class="section1">
      <img class="pic1" src="pics/A.jpg">
      <div class="channel-info">
        <img class="pic2" src="pics/profile.jpg">
        <div class="channel-text">
          <p class="videotitle">The Evening in Newyork, USA <strong>view</strong> Helicopter!</p>
          <p class="author">Nida Ahmed</p>
          <p class="stats">3.4M views &#183; 6 months ago</p>
        </div>
      </div>
    </div>

    <div class="section2">
      <img class="pic1" src="pics/insideumbrella.jpg" height="168.75">
      <div class="channel-info">
        <img class="pic2" src="pics/profile.jpg">
        <div class="channel-text">
          <p class="videotitle">The Colors can make your <strong>life</strong> live!</p>
          <p class="author">Bhaktawar Fatima</p>
          <p class="stats">9.4M views &#183; 6 months ago</p>
        </div>
      </div>
    </div>

    <div class="section3">
      <img class="pic1" src="pics/E.jpg" height="168.75">
      <div class="channel-info">
        <img class="pic2" src="pics/profile.jpg">
        <div class="channel-text">
          <p class="videotitle">Ralph Breaks the Internet | <strong>Are you a Princess?</strong></p>
          <p class="author">Ammarah Mirani</p>
          <p class="stats">4.4M views &#183; 2 months ago</p>
        </div>
      </div>
    </div>

    

  </div>
<div class="side-bar">

      <div class="side-bar-link"> <img src="pics/G.jpg" height="40" width="40"></div>
      <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
      <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
      <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
      <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
      <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
       <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
        <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
         <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
          <div class="side-bar-link"><img src="pics/G.jpg" height="40" width="40"></div>
      </div>
</body>
</html>
