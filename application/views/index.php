<!DOCTYPE html>
<html>
<head>
	<title>news</title>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700;900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
		:root {
    --gray: grey;
    --black: #000;
    --white: #fff;
    --green: #91f600;

    // default colors
    --body-background: #fff;
    --hover-color: grey;
    --header-background: #000;
    --anchor-color: #fff;
    --heading-color: #b2b2b2;
    --paragraph-color: #b2b2b2;
    --anchor-active-color: #91f600;
}  

.green {
    color: var(--green);
}

.white {
    color: var(--white);
}

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    background-color: var(--body-background);
    font-family: 'Raleway';
    height: 100%;
}

a {
    text-decoration: none;
}

a.active {
    color: var(--anchor-active-color);
    font-weight: var(--anchor-active-font-weight);
}

a:hover {
    color: var(--hover-color);
}

header {
    display: flex;
    background-color: #7a1b1b;
    padding-top: 18px;
    justify-content: space-around;
    flex-flow: row wrap;
}

.section {
    flex-grow: 1;
}

.section.logo {
    margin-left: 2.5em;
}

.logo {
    font-size: 1.2em;
    font-weight: bold;
    text-transform: uppercase;
}

ul {
    list-style-type: none;
    display: flex;
    flex-flow: row nowrap;
    width: 500px;
    margin: 0;
    padding: 0;
}

ul li {
    flex-grow: 1;
    text-align: center;
    width: 70px;
}

ul li a {
    color: var(--anchor-color);
    font-size: .9rem;
    text-transform: uppercase;
}

header div:nth-child(1) {
    flex-grow: 8;
    padding-bottom: 15px;
}

header div:nth-child(1) img {
    margin-left: 25px;
}

.box-shadow {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

@media all and (max-width: 800px) {
    header {
        justify-content: space-around;
    }

    .container {
        padding: 50px;
    }
}

@media only screen and (max-width:542px) {
    header div:nth-child(1) {
        margin: 0 auto;
        display: block;
        padding-bottom: 0;
    }

    header {
        flex-direction: column;
    }

    .section {
        flex-grow: 1;
        text-align: center;
    }

    .section.logo {
        margin: 0;
    }

    ul {
        background-color: #232323;
        width: 100%;
        margin-top: 15px;
    }

    ul li {
        width: 50%;
        padding: 5px;
    }
}

	</style>
</head>
<body>
	<header class="box-shadow">
    <div class="section logo">
      <span class="white">the</span><span class="green">devplace</span>
    </div>

    <div class="section">
      <ul>
        <li><a class="active" href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
  </header>
<!--navbar end-->

<div class="container">
	<div class="col-md-12 mt-5">
		<div class="row">
            
			
           <?php 
                    
                    $today=date('Y-m-d');
                    $i=1;
                    
                    foreach($user_list as $list)
                    {
                       
                    ?>


            <div class="col-md-4">
                 
				<embed src="<?php echo base_url('uploads/pdf/'.$list->filepdf);?>" width="300px" height="200px" />
				<h3><?php echo $list->headline;?></h3>
				<p><?php echo $list->details;?> <a href="<?php echo base_url('uploads/pdf/'.$list->filepdf);?>"  target=" ">Open pdf</a></p>
                
				
			</div>
			<?php $i++; } ?>
             



		</div>
		
	</div>
	
</div>



<!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #7a1b1b"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer
              content. Lorem ipsum dolor sit amet, consectetur adipisicing
              elit.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">MDBootstrap</a>
            </p>
            <p>
              <a class="text-white">MDWordPress</a>
            </p>
            <p>
              <a class="text-white">BrandFlow</a>
            </p>
            <p>
              <a class="text-white">Bootstrap Angular</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
            <p><i class="fa fa-envelope mr-3"></i> info@gmail.com</p>
            <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fa fa-facebook"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fa fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fa fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fa fa-instagram"></i
              ></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fa fa-linkedin"></i
              ></a>
            <!-- Github -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #333333"
               href="#!"
               role="button"
               ><i class="fa fa-github"></i
              ></a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
         class="text-center p-3"
         style="background-color: rgba(0, 0, 0, 0.2)"
         >
      
      
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

<!-- End of .container -->



</body>
</html>