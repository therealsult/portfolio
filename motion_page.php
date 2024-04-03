<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Work</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet"/>
  </head>


  <?php
require_once('includes/connect.php');

$projectId = $_GET['id'];

// First query to fetch project details
$queryProject = "SELECT title, project_description, project_image, published_date, video
                FROM motion
                WHERE motion.id = ?";

$stmtProject = $connection->prepare($queryProject);
$stmtProject->bindParam(1, $projectId, PDO::PARAM_INT);
$stmtProject->execute();

$rowProject = $stmtProject->fetch(PDO::FETCH_ASSOC);

$title = $rowProject["title"];
$des = $rowProject["project_description"];
$img = $rowProject["project_image"];
$vid = $rowProject["video"]


?>



<body>

<!-- ==== header ==== -->


<header class="site-header">

  <a href="index.html"><img src="images/logo-1.svg" alt="Abdullah Sultan"></a>
  <nav class="site-navigation">
          <ul class="nav">
          <li><a href="about.html">About</a></li>
          <li><a href="projects.php">Projects</a></li>
          </ul>
        </nav>
        
</header>

<div class="bg-study">
  
<!-- <img src="images/<?= $img ?>" alt="Project Image">  -->
<!-- image wont show properly -->

    <section class="container" id="hero">
        <h1 class="hidden">Hero Section</h1>
        <h2 class="hero-h2"><?= $title ?></h2>
    </section>
</div>


<section class="container-2" id="banner-1">
    <h1 class="hidden">Banner 1</h1>
    <h3><?= $des ?></h3>
</section>

<div class="video-container">
        <video src="video/<?=$vid?>" controls max-width="50%"></video>
</div>






<!-- ===== footer sec ===== -->

<footer>

  <div class="map">
    <div id="map"></div>
  </div>
  
  <div class="row-footer wrapper-footer">
    
  <div class="column-footer middle">
      <div>
        <i class="fa fa-map-marker"></i>
        <p>London, Ontario</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p>(226) 456 0120</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#">asultan.london@gmail.com</a></p>
      </div>
    </div>

    <div class="column-footer right">
      <a href="index.html"><img style="height: 150px; width: 150px;" src="images/logo-1.svg" alt="Abdullah Sultan"></a>
    </div>

  </div>

    <div class="footer-bottom">
      <p>Copyright &copy <span id="year"></span> <a href="index.html">Abdullah Sultan</a> </p>
    </div>

</footer>

  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js" integrity="sha512-7Au1ULjlT8PP1Ygs6mDZh9NuQD0A5prSrAUiPHMXpU6g3UMd8qesVnhug5X4RoDr35x5upNpx0A6Sisz1LSTXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/split-type"></script>


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOVRTzClCZIK37o28OfnZ_7ukciHE4eJI&callback=initMap" async defer></script>
    <script src="js/main.js"></script>
  </body>
</html>
