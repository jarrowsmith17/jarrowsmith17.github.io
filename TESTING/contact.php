

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
<div class="container">
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