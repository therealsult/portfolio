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
    <link href="css/main.css" rel="stylesheet">
   </head>


<?php
require_once('includes/connect.php');

// Run queries to pull back content
$query = 'SELECT id, title, project_description, published_date, project_image FROM projects';
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


$query2 = 'SELECT id, title, project_description, published_date, project_image FROM design';
$stmt = $connection->prepare($query2);
$stmt->execute();
$results2 = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query3 = 'SELECT id, title, project_description, published_date, project_image FROM development';
$stmt = $connection->prepare($query3);
$stmt->execute();
$results3 = $stmt->fetchAll(PDO::FETCH_ASSOC);


$query4 = 'SELECT id, title, project_description, published_date, project_image FROM motion';
$stmt = $connection->prepare($query4);
$stmt->execute();
$results4 = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

<div class="projects-hero" style="background-image: url(images/projects.jpg); background-size:cover; background-repeat:no-repeat; background-position: center center; ">
      <section class="container" id="hero">
        
        <h1 class="hidden">Hero Section</h1>
        <h2 id="hero-h2">See More</h2>
      </section>
       </div>

       <section class="container-2" id="projects-title">
        <br>
        <br>
        <br>
       <h2>Branding</h2>
       </section>

       <section class="projects-con">
       <?php
    foreach ($results as $row) {
        $encodedImageName = rawurlencode($row['project_image']);

        echo '<div class="book_list"><img src="http://localhost/portfolio/images/' . $encodedImageName . '" alt="' . $row['title'] . '" style="width: auto; height: 270px;"><h2>' . $row['title'] . '</h2><h3>(' . $row['published_date'] . ')</h3><p>' . '&nbsp;<a href="http://localhost/portfolio/study.php?id=' . $row['id'] . '">Learn More</a></p></div>';
    }
    ?>
</section>


<section class="container-2" id="projects-title">
       <h2>Design</h2>
       </section>

<section class="projects-con">
       <?php
    foreach ($results2 as $row) {
        $encodedImageName = rawurlencode($row['project_image']);

        echo '<div class="book_list"><img src="http://localhost/portfolio/images/' . $encodedImageName . '" alt="' . $row['title'] . '" style="width: auto; height: 270px;"><h2>' . $row['title'] . '</h2><h3>(' . $row['published_date'] . ')</h3><p>' . '&nbsp;<a href="http://localhost/portfolio/design_page.php?id=' . $row['id'] . '">Learn More</a></p></div>';
    }
    ?>
</section>


<section class="container-2" id="projects-title">
       <h2>Development</h2>
       </section>

<section class="projects-con">
       <?php
    foreach ($results3 as $row) {
        $encodedImageName = rawurlencode($row['project_image']);

        echo '<div class="book_list"><img src="http://localhost/portfolio/images/' . $encodedImageName . '" alt="' . $row['title'] . '" style="width: auto; height: 270px;"><h2>' . $row['title'] . '</h2><h3>(' . $row['published_date'] . ')</h3><p>' . '&nbsp;<a href="http://localhost/portfolio/development_page.php?id=' . $row['id'] . '">Learn More</a></p></div>';
    }
    ?>
</section>


<section class="container-2" id="projects-title">
       <h2>Motion Graphics</h2>
       </section>

<section class="projects-con">
       <?php
    foreach ($results4 as $row) {
        $encodedImageName = rawurlencode($row['project_image']);

        echo '<div class="book_list"><img src="http://localhost/portfolio/images/' . $encodedImageName . '" alt="' . $row['title'] . '" style="width: auto; height: 270px;"><h2>' . $row['title'] . '</h2><h3>(' . $row['published_date'] . ')</h3><p>' . '&nbsp;<a href="http://localhost/portfolio/motion_page.php?id=' . $row['id'] . '">Learn More</a></p></div>';
    }
    ?>
</section>
 

<
<!-- form -->
<section class="container">
  <h1 class="hidden">Contact</h1>

  <div class="contact-form">
    <h2>Contact Me</h2>

    <form action="https://formsubmit.co/asultan.london@gmail.com" method="POST">

      <label for="name">Name</label>
      <input type="text" id="name" name="name">

      <label for="email">Email</label>
      <input type="email" id="email" name="email">

      <label for="message">Message</label>
      <textarea id="message" name="message"></textarea>

      <label for="priority">Priority</label>
      <select id="priority" name="priority">
        <option value="1">Low</option>
        <option value="2" selected>Medium</option>
        <option value="3">High</option>
      </select>

      <fieldset>
        <legend>Select which best applies</legend>

        <label>
          <input type="radio" name="type" value="1" checked>
          New startup
        </label>
        <br>
        <label>
          <input type="radio" name="type" value="2">
          Rebranding
        </label>
        <br>
        <label>
          <input type="radio" name="type" value="3">
          Graphic design
        </label>
        <br>
        <label>
          <input type="radio" name="type" value="4">
          Motion design
        </label>
        <br>
        <label>
          <input type="radio" name="type" value="5">
          Marketing solutions
        </label>
        <br>
        <label>
          <input type="radio" name="type" value="6">
          Client support
        </label>
      </fieldset>

      <button type="submit">Send</button>

    </form>

  </div>
</section>





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
      <a href="index.html"><img style="height: 150px; width: 150px;" src="images/logo-1.svg"
          alt="Abdullah Sultan"></a>
    </div>

  </div>

  <div class="footer-bottom">
    <p>Copyright &copy <span id="year"></span> <a href="index.html">Abdullah Sultan</a> </p>
  </div>

</footer>



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"
  integrity="sha512-7Au1ULjlT8PP1Ygs6mDZh9NuQD0A5prSrAUiPHMXpU6g3UMd8qesVnhug5X4RoDr35x5upNpx0A6Sisz1LSTXA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/split-type"></script>



<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOVRTzClCZIK37o28OfnZ_7ukciHE4eJI&callback=initMap"
  async defer></script>
<script src="js/main.js"></script>
</body>

</html>