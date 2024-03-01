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
<body>

<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database connection file
require_once('includes/connect.php');

// Run queries to pull back content
$query = 'SELECT id, title, project_description, published_date, project_image FROM projects';
$stmt = $connection->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- ==== header ==== -->

<div class="hero-bg"></div>

<header class="site-header">
    <a href="index.php"><img src="images/logo-1.svg" alt="Abdullah Sultan"></a>
    <nav class="site-navigation">
        <ul class="nav">
            <li><a href="about.php">About</a></li> 
            <li><a href="projects.php">Projects</a></li>
        </ul>
    </nav>
</header>


        <div class="bg-1">
      <section class="container" id="hero">
        <h1 class="hidden">Hero Section</h1>
        <h2 id="hero-h2">Creativity Begins Here</h2>
        <h3 id="hero-h3">Get started today!</h3> 
      </section>
       </div>

      <section class="container-2" id="banner-1">
        <h1 class="hidden">Banner 1</h1>
        <h2>Problems Solved</h2>
        <h3>Some projects that I've made or worked on. Have a look!</h3>
      </section>

      <section class="projects-con">
    <?php
    foreach ($results as $row) {
        $encodedImageName = rawurlencode($row['project_image']);

        echo '<div class="book_list"><img src="http://localhost/portfolio/images/' . $encodedImageName . '" alt="' . $row['title'] . '" style="width: auto; height: 270px;"><h2>' . $row['title'] . '</h2><h3>(' . $row['published_date'] . ')</h3><p>' . '&nbsp;<a href="http://localhost/portfolio/study.php?id=' . $row['id'] . '">Learn More</a></p></div>';
    }
    ?>
</section>

      <section class="highlight-sec" >

        <div class="highlight">
          <div class="highlight-box">
            <h2>Code</h2>
            <p>CSS</p>
            <p>HTML</p>
            <p>JavaScript</p>
            <p>PHP</p>
            <p>Pyhton</p>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-box">
            <h2>Design</h2>
            <p>Xd</p>
            <p>Figma</p>
            <p>Illustrator</p>
            <p>InDesign</p>
            <p>Photoshop</p>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-box">
            <h2>Motion</h2>
            <p>Cinema 4D</p>
            <p>Blender</p>
            <p>Unity</p>
          </div>
        </div>
        <div class="highlight">
          <div class="highlight-box">
            <h2>Experties</h2>
            <p>CMS</p>
            <p>Commerce</p>
            <p>CRM</p>
            <p>SEO</p>
          </div>
        </div>
      </div>

    </section>


<!-- ==== testimonials sec ==== -->

      <section class="container-2" id="banner-2">
        <h1 class="hidden">Banner 2</h1>
        <h2>Testimonials</h2>
        <h3>My clients testimonials say it all!</h3>
      </section>

      <section class="container-2" id="test-sec">
        <h1 class="hidden"> Testimonial Section</h1>

      <div class="reviews">
        <div class="testimonial">
          <p>"I hired Abdullah Sultan to redesign my website, and I couldn't be happier with the result. He was also incredibly responsive and patient throughout the entire process, making sure that every detail was perfect.</p>
          <br>
          <br>
          <h2>Alyssa Tale</h2>
        </div>

        <div class="testimonial" id="white-card">
          <p>"I have worked with many web developers over the years, but none have impressed me as much as Abdul. They have an unparalleled ability to bring complex projects to life, and their attention to detail is second to none. </p>
          <br>
          <br>
          <h2>Caleb Brown</h2>
        </div>

        <div class="testimonial">
          <p>"Working with Abdul was an absolute pleasure. From the moment we engaged them to build our website, they were professional, attentive, and detail-oriented. We are glad to have chosen to work with Abdullah.</p>
          <br>
          <br>
          <h2>Jamie A.</h2>
        </div>
      </div>

    </section>


    <section class="container-2" id="gal">
      <div class="gallery">
        <img src="images/ajax.png" alt="">
        <img src="images/3.jpg" alt="">
        <img src="images/phone.png" alt="">
        <img src="images/4.jpg" alt="">
        <img src="images/sweater.png" alt="">
        <img src="images/quatro-1.png" alt="">
        <img src="images/earbuds.png" alt="">
        <img src="images/mindmap-1.png" alt="">
        <img src="images/5.jpg" alt="">
    
    </div>
    </section>


    
<!-- form -->
<section class="container">
  <h1 class="hidden">Contact</h1>
  
<div class="contact-form">
      <h2>Contact Me</h2>
  
      <form action="process-form.php" method="post">

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
        <br>
        <label>
            <input type="checkbox" name="terms">
            I agree to the terms and conditions
        </label>

        <br>

        <button>Send</button>
  
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
        <p><span> 123 Queen Street</span> London, Ontario</p>
      </div>
      <div>
        <i class="fa fa-phone"></i>
        <p> (+1) 226 456 7890</p>
      </div>
      <div>
        <i class="fa fa-envelope"></i>
        <p><a href="#"> a_sultanh@lo.com</a></p>
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
