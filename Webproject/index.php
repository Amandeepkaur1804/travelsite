<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Web development</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css/style.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <!--footer-->



  </head>
  <body>
  <!--navigation bar code-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Travelog</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <!--navigation bar code end-->
  <!--carousel code start-->

  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="sea.jpg" alt="sea" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Travel</h3>
        <p>TRAVEL BEFORE YOU RUN OUT OF TIME</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="plane.jpg" alt="plane" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Explore</h3>
        <p>EXPLORE BEFORE YOU DIE </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="boat.jpg" alt="boat" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Vibe</h3>
        <p>PLAN YOUR TRIP AND VIBE</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  <!--carousel code end-->
    <!--About us code -->
<section class="my-5">
  <div class="py-5">
      <h2 class="text-center">About us</h2>
  </div>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="sea.jpg" alt="" class="img-fluid aboutimg">
    </div>

    <div class="col-lg-6 col-md-6 col-12">
      <h2 class="display-4">Travelog</h2>
      <p class="py-3">Travelog is a full administration Inbound, Outbound & Domestic Tour Operator.It is a travel agency
 We can make the majority of your courses of action for lodging, touring, guides, flights,
 trains, autos, drivers, amusement and other tourism related administrations for remote and
national sightseers. We give an incredible level of consideration regarding points of interest
 with the goal that we can offer a dream of what it intends to go to our nation. We put stock
in making you companions of India for your lifetime.We are specialists in the Indian tourism and accommodation industry.
We comprehend the estimation of your well deserved cash & we put significant thought and mind
in arranging your visit to make your fantasies work out as expected. We look’s to comprehend your
desires of your outing and to answer the greater part of the inquiries you might have or worries
about going to our nations.
</p>
      <a href="about.php" class="btn btn-success">Click me</a>
    </div>

  </div>
</div>
</section>
  <!--About us end code -->
    <!--sevices code -->
    <section class="my-5">
      <div class="py-5">
          <h2 class="text-center">Sevices</h2>
      </div>

    <div class="container-fluid">
      <div class="row">
           <div class="col-lg-4 col-md-4 col-12">
                 <div class="card" style="width:400px">
                 <img class="card-img-top" src="surf.jpg" alt="Card image">
                 <div class="card-body">
                 <h4 class="card-title">Bali</h4>
                  <p class="card-text">Surf in Bali</p>
                  <a href="#" class="btn btn-primary">Know more </a>
                </div>
                </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
                <div class="card" style="width:400px">
                <img class="card-img-top" src="dubai.jpg" alt="Card image">
                <div class="card-body">
                <h4 class="card-title">Dubia</h4>
                 <p class="card-text">Burf Khalifa</p>
                 <a href="#" class="btn btn-primary">Know more</a>
               </div>
               </div>
         </div>

         <div class="col-lg-4 col-md-4 col-12">
               <div class="card" style="width:400px">
               <img class="card-img-top" src="scuba.jpg" alt="Card image">
               <div class="card-body">
               <h4 class="card-title">Andaman</h4>
                <p class="card-text">Scuba Diving</p>
                <a href="#" class="btn btn-primary">Know more</a>
              </div>
              </div>
        </div>
     </div>
    </div>

    </section>
  <!--sevices code end -->
    <!-- gallery -->
    <section class="mg-5">
      <div class="py-5">
         <h2 class="text-center">Gallery</h2>
      </div>

      <div class="container-fluid">
        <div class="row">
             <div class="col-lg-4 col-md-4 col-12">
               <img src="view.jpg" alt="" class="img-fluid pb-3">
            </div>

            <div class="col-lg-4 col-md-4 col-12">
              <img src="beach.jpg" alt="" class="img-fluid pb-3">
           </div>

           <div class="col-lg-4 col-md-4 col-12">
             <img src="lakeview.jpg" alt="" class="img-fluid pb-3">
          </div>
          </div>
      </div>
    </section>
  <!-- gallery end-->
    <!-- contact form -->
    <section class="mg-5">
      <div class="py-5">
         <h2 class="text-center">Contact us</h2>
      </div>

         <div class="w-50 m-auto">
           <form class="userinfo.php" method="post">
             <div class="form-group">
               <label for="">Username</label>
               <input type="text" name="user" value="" autocomplete="off" class="form-control">
             </div>

             <div class="form-group">
               <label for="">Email</label>
               <input type="text" name="email" value="" autocomplete="off" class="form-control">
             </div>

             <div class="form-group">
               <label for="">Mobile no.</label>
               <input type="text" name="mobile" value="" autocomplete="off" class="form-control">
             </div>

             <div class="form-group">
               <label for="">comments</label>
               <textarea class="form-control" name="comments"></textarea>
             </div>
               <button class="btn btn-success" type="submit" name="">Submit</button>

           </form>



      </div>
</div>
    </section>
    <!--contact form end-->
    <!--fotter-->
    <footer>
       <h3 class="p-3 bg-dark text-white text-center">@travelog</h3>

<!--new footer start-->




































































    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
