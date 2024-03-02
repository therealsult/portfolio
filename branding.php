<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Abdullah Sultan</title>
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

// Run queries to pull back content
$query = 'SELECT id, title, project_description, published_date, project_image FROM projects';
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<body>

<!-- ==== header ==== -->

<div class="hero-bg"></div>

<header class="site-header">

  <a href="index.html"><img src="images/logo-1.svg" alt="Abdullah Sultan"></a>
  <nav class="site-navigation">
        <ul class="nav">
        <li><a href="about.html">About</a></li>
        <li><a href="projects.php">Projects</a></li>
        </ul>
      </nav>
      
</header>

<div class="branding-hero">
      <section class="container" id="hero">
        <h1 class="hidden">Hero Section</h1>
        <h2 id="hero-h2">Branding</h2>
      </section>
       </div>
      <section class="container-2" id="banner-1">
        <h1 class="hidden">Banner 1</h1>
        <h2>All brands have unique identities. Branding projects I worked on.</h2>
       </section>




       <section class="projects-con">
       <?php
    foreach ($results as $row) {
        $encodedImageName = rawurlencode($row['project_image']);

        echo '<div class="book_list"><img src="http://localhost/portfolio/images/' . $encodedImageName . '" alt="' . $row['title'] . '" style="width: auto; height: 270px;"><h2>' . $row['title'] . '</h2><h3>(' . $row['published_date'] . ')</h3><p>' . '&nbsp;<a href="http://localhost/portfolio/study.php?id=' . $row['id'] . '">Learn More</a></p></div>';
    }
    ?>
</section>
 


<!-- ===== footer sec ===== -->

<footer>
  
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


    <script src="js/main.js"></script>
  </body>
</html>
