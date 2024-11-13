<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) {
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/home.css">
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" >
        <div class="container">
        <div class="logo">
            <a href="#"><img src="image/logo.png" alt="Logo" class="logo-img"></a>
        </div>
        <ul class="nav-links">
          <li class="btn-close-white"><a href="">View Menu</a></li>
          <li class="btn-close-white"><a href="">View Order</a></li>
          <li class="btn-close-white"><a href="">Service</li>
          <li class="btn-close-white"><a href="">Contack</li>
        </ul>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
     


  <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="image/air5.jpg" class="d-block w-100 c-img" alt="Slide 1" alt="Full Size" class="img-fluid">
        <div class="carousel-caption" >
        <h1  class="display-1 fw-bolder text-capitalize">Air Jordan Retro 6 G</h1>
        <p>Using the ‘Chicago’ colour blocking, white pebbled leather makes up the base with Yellow Ochre nubuck placed on the overlays. 
          The ankle collar and Swoosh are seen in black giving the sneaker slight Bruce Lee vibes, with traditional AJ 1 branding seen on the ankle 
          collar and Nike Air tongue tag. The Sail midsole softens the sneaker with a Yellow Ochre outsole finishing off the sneaker.</p>
          <p class=" fs-4 text-uppercase" >₱10,970.03</p>
          <button  class="btn btn-primary px-4  fs-5 " >Add to Cart</button>
        </div>
      </div>

      <div class="carousel-item c-item">
        <img src="image/air2.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption">
        <h1  class="display-1 fw-bolder text-capitalize">Air Jordan 1 Zoom</h1>
        <p>Paying homage to sisterhood within sneaker culture, the AJ1 Zoom Comfort is composed in black, white, ‘Monarch’, and ‘Opti Yellow’.
           Manufactured with a black suede base, the Swoosh is rendered in deconstructed white mesh, while ‘Wheat’ overlays give a further 
           visual hierarchy to the design. Notably, padded foam tongues also pay homage to the Nike Blazer.</p>
          <p class=" fs-4 text-uppercase" >₱8,751.45</p>
          <button  class="btn btn-primary px-4  fs-5 " >Add to Cart</button>
        </div>
      </div>

      <div class="carousel-item c-item">
        <img src="image/air3.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption">
        <h1  class="display-1 fw-bolder text-capitalize">Air Jordan 3 'Fire White'</h1>
        <p>The Air Jordan 3 is one of the most important silhouettes in basketball shoe history. When it debuted back in 1987,
           it saved Michael Jordan's relationship with Nike, established Tinker Hatfield as the torchbearer for Air Jordan design,
            introduced elephant print to Jordan Brand's lexicon and struck a perfect balance between sport and style that the world's 
            biggest sneaker brands are still trying to nail down today. Its influence and impact are hard to overstate, and that's why the
             return of its OG 'Fire Red' colourway is such big news. Today, official images of the 'Fire Red' retro have surfaced, and they 
             provide the true-to-the-original details that Jumpman junkies crave.</p>
             <p class=" fs-4 text-uppercase" >₱6,707.87</p>
          <button  class="btn btn-primary px-4  fs-5 " >Add to Cart</button>
        </div>
      </div>

      <div class="carousel-item c-item">
        <img src="image/air4.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption">
        <h1  class="display-1 fw-bolder text-capitalize">Air Jordan XXXIX</h1>
        <p>Before MJ stepped on the court in red and black, he was making championship-winning jump shots wearing blue and white. We're celebrating 
          MJ's college days with a blue so crisp it might look better today than it did 40 years ago. But while the design of this AJ39 throws it back, 
          these shoes are anything but old-school. Engineered for today's game, they come packed with court-ready tech to help you start building a legacy 
          all your own.</p>
        <p class=" fs-4 text-uppercase" >₱11,668.90</p>
          <button  class="btn btn-primary px-4  fs-5 " >Add to Cart</button>
        </div>
      </div>

      <div class="carousel-item c-item">
        <img src="image/air1.jpg" class="d-block w-100 c-img" alt="Slide 2">
        <div class="carousel-caption">
        <h1  class="display-1 fw-bolder text-capitalize">Air Jordan 1 High OG</h1>
        <p>Feel unbeatable from the tee box to the final putt in a design is pure early MJ: speed, class and laden with true early '90s touches like 
          visible Air and a translucent rubber sole that continue to stand the test of time. This model fuses the strut of 1st MJ’s championship with 
          some of our best golf technology, helping you make a statement of confidence when it comes time to tame the course.</p>
          <p class=" fs-4 text-uppercase" >₱14,668.90</p>
          <button  class="btn btn-primary px-4  fs-5 " >Add to Cart</button>
        </div>
      </div>





    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>

  </div>

  <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<div class="shadow w-450 p-3 text-center">
            <h3 class="display-4 ">Hello, <?=$_SESSION['fname']?></h3>
            <a href="logout.php" class="btn btn-warning">
            	Logout
            </a>
		</div>
    </div>

</body>
</html>

<?php }else {
	header("Location: login.php");
	exit;
} ?>