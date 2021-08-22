

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" type="text/css" href="css/teststyle.css" />
    <!--Favicon-->
    
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <script src="https://use.fontawesome.com/releases/v5.8.2/js/all.js"></script>
    <script src="js/script.js"></script> 
    <title>Jacob Arrowsmith - Computer Science Graduate & Developer</title>
</head>
<body>
      <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #141628">

    <a class="navbar-brand" href="index.html"><img id="logo" src="img/JCUBB Dev Logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#about">About <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="#projects">
            Projects
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#connect">Connect</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>

    </div>
  </nav>


  <div class="container-fluid text-center content" id="about">
    <div class="row welcome padding" id="">
      <div class="col-sm-12 col-md-6 col-lg-5 text-lg-start">
        <h1 class="display-4">Hi, I'm Jacob Arrowsmith.</h1>
      </div>
      <div class="row" id="">
        <div class="col-md-6">
          <p class="welcome_text" id="">
            I am a <span>Computer Science Graduate</span> who has a passion for front-end and software development.
          </p>
        </div>

        <div class="col-md-6">
            <img class="about_graphic" src="img/hero-graphic.png"/>
        </div>

      </div>
    </div>
    
    <div class="row text-center skills padding" id="skills">
      <div class="col-12">
        <h2 class="display-4">Skills</h2>
      </div>
      <div class="container skill-icons"> 

        <div class="col-sm-12 col-md-4 col-lg-4 d-md-inline">
          <a><i class="fas fa-code" alt="programming languages"></i></a>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-md-inline">
          <a><i class="fas fa-book" alt="libraries"></i></a>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-md-inline">
          <a><i class="fas fa-database" alt="database technologies"></i></a>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 d-md-inline">
          <a><i class="fas fa-desktop" alt="misc"></i></a>
        </div>

      </div>

      
      
    </div>

    <div class="container-fluid text-center projects padding" id="projects">
      <div class="col-12 padding">
        <h2 class="display-4 ">Projects</h2>
      </div>
      <!--Card 1-->
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
        <div class="col mb-4">
          <div class="card h-100">
            <img src="img/html-code-stock.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Personal Portfolio</h5>
              <p class="card-text">My code for this website is uploaded on Github. I used HTML, Bootstrap CSS and some JavaScript. This is my first website outside of University work.</p>
              <a href="https://github.com/jarrowsmith17/jarrowsmith17.github.io" class="neon-button">Github</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="img/python-stock.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">A-Level Electronics Quiz</h5>
              <p class="card-text">For my final A-Level project, I created a quiz for WJEC Electronics A-level questions. The project uses Python, TKinter and SQLite.</p>
              <a href="https://github.com/jarrowsmith17/A-Level-Final-Project" class="neon-button">GitHub</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="img/html-code-stock.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lorem, ipsum dolor.</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsam provident dolore tenetur nobis molestiae beatae alias optio doloremque magni.</p>
              <a href="#" class="neon-button">Open</a>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card h-100">
            <img src="img/html-code-stock.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Lorem, ipsum.</h5>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum error consequatur quos velit nihil molestiae voluptatem facilis itaque provident nam!</p>
              <a href="#" class="neon-button">Open</a>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="row text-center connect padding" id="connect">
      <div class="col-12">
        <h2 class="display-4">Connect</h2>
      </div>
      <div class="col-12 social">

        <a href="https://www.github.com/jarrowsmith17"><i class="fab fa-github" ></i></a>
        <a href="https://www.linkedin.com/in/jacob-arrowsmith-705525188/"><i class="fab fa-linkedin"></i></a>
      </div>
    </div>
 
    <div class="container-fluid padding contact" id="contact">
      <div class="row text-center">
        <div class="col-12">
          <h2 class="display-4">Contact</h2>
        </div>
        <div class="col-12 contact padding" id="contact">
          <form id="contactForm" action="mailto:jacob.arrowsmith17@gmail.com"
          method="POST"
          enctype="multipart/form-data"
          name="EmailForm">

            <!-- Name input -->
            <div class="mb-3">
              <label class="form-label" for="name">Name</label>
              <input class="form-control" id="name" type="text" placeholder="Name" />
            </div>
        
            <!-- Email address input -->
            <div class="mb-3">
              <label class="form-label" for="emailAddress">Email Address</label>
              <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
            </div>
        
            <!-- Message input -->
            <div class="mb-3">
              <label class="form-label" for="message">Message</label>
              <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
            </div>
        
            <!-- Form submit button -->
            <div class="d-grid">
              <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>
        
          </form>
        </div>
      </div>
    </div>
  </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
</body>
</html>