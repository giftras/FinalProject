<?php include("header.php") ?>
<br />
<section>
<div class="container">
<div class="row">
<div class="col-md-12">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" ></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2" ></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="img/B_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/B_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="img/B_3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</div>
</section>


<br />
<section id="Game Products">
         <div class="section-content">
             <div class="container">
        <h1 style="font-size: 20px">New release</h1>
<hr />
<div class="row">
    <div class="col-sm-12">
            <div class="card-group" id="product_form">
      <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
           <div class="card" style="width: 20rem;">
           <img class="card-img-top" src="img/2.jpg" alt="Card image cap">
             <div class="card-block">
              <h4 class="card-title">TOM CLANCY'S GHOST RECON WILDLANDS</h4>
              <p class="card-text">Price: 1,790 Baths</p>
              <input type="hidden" name="cmd" value="_cart" />
              <input type="hidden" name="add" value="1" />
              <input type="hidden" name="business" value="payment@nextlevel.com" />
              <input type="hidden" name="item_name" value="TOM CLANCY'S GHOST RECON WILDLANDS" />
              <input type="hidden" name="quantity" value="1" />
              <input type="hidden" name="amount" value="1790.00" />
              <input type="hidden" name="currency_code" value="THB" />
              <input type="hidden" name="no_note" value="1">
              <input type="hidden" name="shipping" value="50">
              <input type="submit" name="submit" value="Add to cart" class="btn btn-primary" />
             </div>
           </div>
         </form>
          </div></div></div></div></div></section>
          </div>
	 
<?php include("footer.php") ?>

<script type="text/javascript" src="js/productIndex.js"></script> 
 <script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
 <script>
  paypal.minicart.render();

        
        </script>
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

