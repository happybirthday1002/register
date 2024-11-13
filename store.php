
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css">
  <title>Bootstrap 5 Carousel Slider</title>
  <style>
.c-item {
  height: 100vh;
  width: 100%;
  
}
.c-img {
  height: 100%;
  object-fit: cover;
  filter: brightness(0.6);
}
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background: url('background.jpg') no-repeat center center fixed; /* Add your background image */
    background-size: cover;
}

.content {
    margin-top: 80px; /* Space for the fixed navbar */
    text-align: center;
    color: #333;
}
.logo-img {
    height: 100px; /* Adjust logo size */
}
.nav-links {
    list-style: none;
    display: flex;
    gap: 20px; /* Space between links */
}

.nav-links li {
    display: inline;
}

.nav-links a {
    text-decoration: none;
    color: #343a40; /* Text color */
    font-weight: bold;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #007BFF; /* Change color on hover */
}

//*ddddddddddddddddddddddddddddd*/
.product {
  position: relative;
  overflow: hidden;
  padding: 20px;
}

.product-category {
  padding: 0 10vw;
  font-size: 30px;
  font-weight: 500;
  margin-bottom: 40px;
  text-transform: capitalize;
}

.product-container {
  padding: 0 10vw;
  display: flex;
  overflow-x: auto;
  scroll-behavior: smooth;
}

.product-container::-webkit-scrollbar {
  display: none;
}

.product-card {
  flex: 0 0 auto;
  width: 250px;
  height: 450px;
  margin-right: 40px;
}

.product-image {
  position: relative;
  width: 100%;
  height: 350px;
  overflow: hidden;
}

.product-thumb {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.discount-tag {
  position: absolute;
  background: #fff;
  padding: 5px;
  border-radius: 5px;
  color: #ff7d7d;
  right: 10px;
  top: 10px;
  text-transform: capitalize;
}

.card-btn {
  position: absolute;
  bottom: 10px;
  left: 50%;
  transform: translateX(-50%);
  padding: 10px;
  width: 90%;
  text-transform: capitalize;
  border: none;
  outline: none;
  background: #fff;
  border-radius: 5px;
  transition: 0.5s;
  cursor: pointer;
  opacity: 0;
}

.product-card:hover .card-btn {
  opacity: 1;
}

.card-btn:hover {
  background: #ff7d7d;
  color: #fff;
}

.product-info {
  width: 100%;
  height: 100px;
  padding-top: 10px;
}

.product-brand {
  text-transform: uppercase;
}

.product-short-description {
  width: 100%;
  height: 20px;
  line-height: 20px;
  overflow: hidden;
  opacity: 0.5;
  text-transform: capitalize;
  margin: 5px 0;
}

.price {
  font-weight: 900;
  font-size: 20px;
}

.actual-price {
  margin-left: 20px;
  opacity: 0.5;
  text-decoration: line-through;
}

.pre-btn,
.nxt-btn {
  border: none;
  width: 10vw;
  height: 100%;
  position: absolute;
  top: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, #fff 100%);
  cursor: pointer;
  z-index: 8;
}

.pre-btn {
  left: 0;
  transform: rotate(180deg);
}

.nxt-btn {
  right: 0;
}

.pre-btn img,
.nxt-btn img {
  opacity: 0.2;
}

.pre-btn:hover img,
.nxt-btn:hover img {
  opacity: 1;
}

.collection-container {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 10px;
}

.collection {
  position: relative;
}

.collection img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.collection p {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #fff;
  font-size: 50px;
  text-transform: capitalize;
}

.collection:nth-child(3) {
  grid-column: span 2;
  margin-bottom: 10px;
}

  </style>
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

  <div class="container text-center">
  <h3>THE BAND</h3>
  <p><em>We love music!</em></p>
  <p>We have created a fictional band website. Lorem ipsum..</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="image/air1.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Guitarist and Lead Vocalist</p>
        <p>Loves long walks on the beach</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="image/air2.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Drummer</p>
        <p>Loves drummin'</p>
        <p>Member since 1988</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Name</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="image/air3.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bass player</p>
        <p>Loves math</p>
        <p>Member since 2005</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div class="bg-1">
  <div class="container">
    <h3 class="text-center">TOUR DATES</h3>
    <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">November <span class="badge">3</span></li> 
    </ul>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/air4.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/air5.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/air1.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Mike</a></li>
    <li><a data-toggle="tab" href="#menu1">Chandler</a></li>
    <li><a data-toggle="tab" href="#menu2">Peter</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>
    <!-- Overlay Content -->
    <div class="overlay">
        <h1>Welcome to My Website</h1>
        <p>Your tagline goes here.</p>
    </div>
    <section class="product"> 
        <h2 class="product-category">best selling</h2>
        <button class="pre-btn"><img src="image/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="image/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink10.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                    
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink9.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink1.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink2.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink3.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink8.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink7.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink6.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink5.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <img src="image/drink4.jpg" class="product-thumb" alt="">
                    <button class="card-btn">add to wishlist</button>
                </div>
                <div class="product-info">
                    <h2 class="product-brand">brand</h2>
                    <p class="product-short-description">a short line about the cloth..</p>
                    <span class="price">$20</span><span class="actual-price">$40</span>
                </div>
            </div>
        </div>
    </section>
    
    <script src="script.js"></script>
  
</body>
</html>

