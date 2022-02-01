<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <?php include 'partials/stylesheets.php'; ?>
    
    <link rel="stylesheet" href="css/style.css">
    <title>Furni - Home</title>
  </head>
  <body>
    <!-- navigation -->
    <?php 
    
    include 'partials/navigation.php';

    ?>

    <!--bg-carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/nathan-oakley-gj1dnc7yRG0-unsplash.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Decor the dreams with<br>wood beauty</h1>
                    <p>Transforming furniture with creativity and wood that enhances the beauty of your home</p>
                    <a href="#" class="btn animate__animated animate__fadeIn" style="animation-delay: 1.5s;">Shop now &#8594</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/sidekix-media-wRzBarqn3hs-unsplash.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Because furniture says a lot<br> about you</h1>
                    <p>Exceptional designs for your exception ideas. Unique designs, because just ordinary is not our thing</p>
                    <a href="#" class="btn animate__animated animate__fadeIn" style="animation-delay: 1.5s;">Shop now &#8594</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- top categories -->
    <div class="container-fluid">
        <div class="title"><h1>Top Categories</h1></div>
        <div class="row">
            <div class="col-md item">
                <div class="inner">
                    <img src="images/FOPL.jpg">
                </div>
                <p>LIVING ROOM</p>
            </div>
            <div class="col-md item">
                <div class="inner">
                    <img src="images/office.png">
                </div>
                <p>OFFICE</p>
            </div>
            <div class="col-md item">
                <div class="inner">
                    <img src="images/bathroom.jfif">
                </div>
                <p>BATHROOM</p>
            </div>
            <div class="col-md item">
                <div class="inner">
                    <img src="images/seating.jpg">
                </div>
                <p>SEATING</p>
            </div>
            <div class="col-md item">
                <div class="inner">
                    <img src="images/lightning.png">
                </div>
                <p>LIGHTNING</p>
            </div>
        </div>
    </div>

    <!-- collection -->
    <div class="collection container-fluid">
        <div class="title"><h1 class="text-white">Collection</h1></div>
            <div class="row">
                <div class="col-md-4 mb-5">
                    <div class="card p-3" style="width: 410px;">
                    <div class="inner">
                        <img src="images/francesca-tosolini-tDVvS8eOMig-unsplash.jpg" class="card-img-top shadow bg-white">
                    </div>                
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn">Read More...</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="card p-3" style="width: 410px;">
                        <div class="inner">
                            <img src="images/jonathan-borba-Ya5YWy5qGsQ-unsplash.jpg" class="card-img-top shadow bg-white">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn">Read More...</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-5">
                    <div class="card p-3" style="width: 410px;">
                        <div class="inner">
                            <img src="images/roberto-nickson-h1_ILkb9tLo-unsplash.jpg" class="card-img-top shadow bg-white">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Title</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <button type="button" class="btn">Read More...</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- featured product -->
    <div class="featured-product container-fluid">
        <div class="title"><h1>Featured Product</h1></div>
        <div class="row">
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
            <div class="col-md">
                <img src="images/seating.jpg">
                <h5>Wingback White Chair</h5>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>₱500.00</p>
            </div>
        </div>
    </div>

    <!-- shop by style -->
    <div class="shop-by-style container-fluid">
        <div class="title"><h1>Shop By Style</h1></div>
        <div class="row">
            <div class="col-sm">
                <div class="overlay">
                    <img src="images/traditional.jpg">
                    <div class="text text-center"><h2>Traditional</h2></div> 
                </div>
            </div>

            <div class="col-sm">
                <div class="overlay">
                    <img src="images/contemporary.jpeg">
                    <div class="text text-center"><h2>Contemporary</h2></div>
                </div>
            </div>

            <div class="col-sm">
                <div class="overlay">
                    <img src="images/modern.jpg">
                    <div class="text text-center"><h2>Modern</h2></div>
                </div>
            </div>
        </div>
    </div>

    <!-- socials -->

    <?php include 'partials/footer.php' ?>

    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <?php include 'partials/bootstrap_script.php' ?>

  </body>
</html>