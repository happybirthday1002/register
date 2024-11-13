<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
	    /* General body styles */
body, html {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: Arial, sans-serif;
}

/* Video background styling */
.video-background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow: hidden;
  z-index: -1; /* Ensures content is above the video */
}

.video-background video {
  width: 100%;
  height: 100%;
  object-fit: cover; /* Ensures the video covers the entire screen */
  object-position: center;
}

/* Content styles */
.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: white;
  z-index: 1; /* Ensures content is above the video */
}

h1 {
  font-size: 3em;
  margin: 0;
}

p {
  font-size: 1.5em;
}

</style>
<body>
    
  <!-- Video Background -->
  <div class="video-background">
    <video autoplay loop muted playsinline>
      <source src="buyshoes.mp4" type="video/mp4">
      <!-- Fallback content for browsers that don't support the video tag -->
      Your browser does not support the video tag.
    </video>
  </div>

  <!-- Content on top of the video -->
  <div class="content">
  <div class="d-flex justify-content-center align-items-center vh-100">
    	<form class=" w-450 p-3" 
    	      action="php/login.php" 
    	      method="post">

    		<h4 class="display-4  fs-1">LOGIN</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		  <div class="mb-3">
		    <input type="text"
			    placeholder="Username" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <input type="password" 
			        placeholder="Password"
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="btn btn-primary">Login</button>
		  <a href="index.php" class="link-secondary">Sign Up</a>
		</form>
    </div>
  </div>
    
</body>
</html>