<?php include 'header.php';?>

<!-- Slider -->
<section class="slider">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>See imagination on display</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>See imagination on display</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>See imagination on display</h5>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

<!-- popularProducts -->
<section class="popularProducts container  text-center">
  <h2>What's popular</h2>
  <article class="row">
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="img/pop1.jpg" alt="">
        <h5>Product 1</h5>
      </div>
      <div class="item">
        <img src="img/pop2.jpg" alt="">
        <h5>Product 2</h5>
      </div>
      <div class="item">
        <img src="img/pop3.jpg" alt="">
        <h5>Product 3</h5>
      </div>
      <div class="item">
        <img src="img/pop4.jpg" alt="">
        <h5>Product 4</h5>
      </div>
      <div class="item">
        <img src="img/pop1.jpg" alt="">
        <h5>Product 1</h5>
      </div>
      <div class="item">
        <img src="img/pop2.jpg" alt="">
        <h5>Product 2</h5>
      </div>
      <div class="item">
        <img src="img/pop3.jpg" alt="">
        <h5>Product 3</h5>
      </div>
      <div class="item">
        <img src="img/pop4.jpg" alt="">
        <h5>Product 4</h5>
      </div>
  </div>
  </article>
</section>

<!-- New products -->
<section class="newProducts container text-center">
  <h2>New products</h2>
  <article class="row justify-content-center">
    <div><a href=""><i class="fas fa-mobile-alt"></i>&nbsp; Mobile & tablet</a></div>
    <div><a href=""><i class="fas fa-mobile-alt"></i>&nbsp; Computer</a></div>
    <div><a href=""><i class="fas fa-laptop"></i>&nbsp; Laptop</a></div>
    <div><a href=""><i class="fas fa-mouse-pointer"></i>&nbsp; Mouse</a></div>
    <div><a href=""><i class="fas fa-tv"></i>&nbsp; Smart Watches</a></div>
    <div><a href=""><i class="fas fa-headphones-alt"></i>&nbsp; Accesories</a></div>
  </article>
  <article class="owl-carousel owl-theme">
    <div class="card item">
      <img src="img/tablet-samsung.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 1</h5>
        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <p class="card-text"> <span>100</span> 80</p>
      </div>
    </div>
    <div class="card item">
      <img src="img/tablets.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 2</h5>
        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <p class="card-text"> <span>100</span> 80</p>
      </div>
    </div>
    <div class="card item" >
      <img src="img/camera.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 3</h5>
        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <p class="card-text"> <span>100</span> 80</p>
      </div>
    </div>
    <div class="card item">
      <img src="img/phones.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Product 4</h5>
        <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
        <p class="card-text"> <span>100</span> 80</p>
      </div>
    </div>
  </article>
</section>

<!-- product -->
<section class="product container">
  <article class="row justify-content-between">
    <div class="col-md-6">
      <div class="text">
        <h6 class="text-primary">Good to go</h6>
        <p>Your headphones are an ectension of you, they go 
          with you everywhere</p>
          <a href=""><i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="text">
        <h6 class="text-primary">Easy Bluetooth</h6>
        <p>Connect your smartphones with One-touch NFC and get 
          the beats going in an instant</p>
          <a href=""><i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </article>
</section>

<section class="container urban">
  <article class="row">
    <div class="col-md-6">
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/large1-270x270.jpg" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Lorem Khaled Ipsum</h5>
              <p class="card-text">Our urban and streetwear fashion is No old Navy , Banana republic or a Walmart</p>
              <p class="card-text"><i class="far fa-comment">0</i> <a href=""><img src="img/seven-up.jpeg" alt=""> 7uptheme</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-3">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="img/post_1-270x270.jpg" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Lorem Khaled Ipsum</h5>
              <p class="card-text">Our urban and streetwear fashion is No old Navy , Banana republic or a Walmart</p>
              <p class="card-text"><i class="far fa-comment">0</i> <a href=""><img src="img/seven-up.jpeg" alt=""> 7uptheme</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</section>
<?php include 'footer.php'; ?>