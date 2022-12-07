<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="view/public/css/lgrs.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="view/public/css/tiny-slider.css" />
    <link rel="stylesheet" href="view/public/css/aos.css" />
    <link rel="stylesheet" href="view/public/css/style.css" />
    
    <title> Web House </title>
  </head>
  <body> 
    <?php include 'inc/navbar.php'; ?>
    <?php include 'inc/banner.php'; ?>

        <!-- categories -->
    <div class="container py-16">
        <h2 class="text-3xl font-medium text-gray-800 uppercase mb-6">house by type</h2>
        <div class="grid grid-cols-3 gap-3">
            <?php $category_list = get_all_categories() ?>
            <?php foreach ($category_list as $category) { ?>
                <!-- single category -->
                <div class="relative rounded-sm overflow-hidden group">
                    <img src="<?php echo $category['img']; ?>" class="w-full" alt="">
                    <a href="category.php?category_id=<?php echo $category['id']; ?>" class="absolute inset-0  bg-opacity-40 flex items-center justify-center text-xl text-white font-roboto font-medium group-hover:bg-opacity-50 transition"><?php echo $category['name']; ?></a>
                </div>
                <!-- single category end -->
            <?php } ?>
        </div>
    </div>

    <!-- product wrapper -->          
    <div class="container pb-16">
        <h2 class="text-2xl font-medium text-gray-800 uppercase mb-6">top new arrival</h2>
        <!-- product grid -->
        <div class="grid grid-cols-4 gap-6">
            <?php $product_list = get_all_products() ?>
            <?php foreach ($product_list as $product) { ?>
                <!-- single product -->
                <div class="bg-white shadow rounded overflow-hidden group">
                    <!-- product image -->
                    <div class="relative">
                        <img src="<?php echo $product['img']; ?>" class="w-full" alt="">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transsition">
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                                <i class="fas fa-search"></i>
                            </a>
                            <a href="#" class="text-white text-lg w-9 h-8 rounded-full bg-primary flex items-center justify-center hover:bg-gray-800 transition ">
                                <i class="far fa-heart"></i>
                            </a>
                        </div>
                    </div>
                    <!-- product image end-->

                    <!-- product-content -->
                    <div class="pt-4 pb-3 px-4">
                        <a href="product-detail.php?id=<?php echo $product['id']; ?>">
                            <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition"><?php echo $product['name']; ?></h4>
                        </a>
                        <div class="flex items-baseline mb-1 space-x-2 font-roboto">
                            <p class="text-xl text-primary font-semibold">$<?php echo $product['price']; ?></p>
                            <p class="text-sm text-gray-400 line-through">$1200</p>
                        </div>
                        <div class="flex items-center">
                            <div class="flex gap-1 text-sm text-yellow-400">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                    <form action="cart.php" method="post">
                        <input type="hidden" name="action" value="create">
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="productId" value="<?php echo $product['id']; ?>">
                        <button type="submit" class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b hover:bg-transparent hover:text-primary transition">Add to cart</button>
                    </form>
                    <!-- product-content end-->
                </div>
                <!-- single product end-->
            <?php } ?>
        </div>
    
    <!-- section-->
    </section>
    <div class="section sec-testimonials">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-6">
            <h2 class="font-weight-bold heading text-primary mb-4 mb-md-0"> Customer Says </h2>
          </div>
          <div class="col-md-6 text-md-end">
            <div id="testimonial-nav">
              <span class="prev" data-controls="prev">Prev</span>
              <span class="next" data-controls="next">Next</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4"></div>
        </div>
        <div class="testimonial-slider-wrap">
          <div class="testimonial-slider">
            <div class="item">
              <div class="testimonial">
                <img src="view/public/images/person_1-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <h3 class="h5 text-primary mb-4">James Smith</h3>
                <blockquote>
                  <p> &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo; </p>
                </blockquote>
                <p class="text-black-50">Designer, Co-founder</p>
              </div>
            </div>
            <div class="item">
              <div class="testimonial">
                <img src="view/public/images/person_2-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <h3 class="h5 text-primary mb-4">Mike Houston</h3>
                <blockquote>
                  <p> &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo; </p>
                </blockquote>
                <p class="text-black-50">Designer, Co-founder</p>
              </div>
            </div>
            <div class="item">
              <div class="testimonial">
                <img src="view/public/images/person_3-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <h3 class="h5 text-primary mb-4">Cameron Webster</h3>
                <blockquote>
                  <p> &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo; </p>
                </blockquote>
                <p class="text-black-50">Designer, Co-founder</p>
              </div>
            </div>
            <div class="item">
              <div class="testimonial">
                <img src="view/public/images/person_4-min.jpg" alt="Image" class="img-fluid rounded-circle w-25 mb-4" />
                <div class="rate">
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                  <span class="icon-star text-warning"></span>
                </div>
                <h3 class="h5 text-primary mb-4">Dave Smith</h3>
                <blockquote>
                  <p> &ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo; </p>
                </blockquote>
                <p class="text-black-50">Designer, Co-founder</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-4 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-5">
            <h2 class="font-weight-bold heading text-primary mb-4"> Let's find home that's perfect for you </h2>
            <p class="text-black-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit. </p>
          </div>
        </div>
        <div class="row justify-content-between mb-5">
          <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
            <div class="img-about dots">
              <img src="view/public/images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
            </div>
          </div>
          <div class="col-lg-4">
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-home2"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">2M Properties</h3>
                <p class="text-black-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste. </p>
              </div>
            </div>
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-person"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Top Rated Agents</h3>
                <p class="text-black-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste. </p>
              </div>
            </div>
            <div class="d-flex feature-h">
              <span class="wrap-icon me-3">
                <span class="icon-security"></span>
              </span>
              <div class="feature-text">
                <h3 class="heading">Legit Properties</h3>
                <p class="text-black-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum iste. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row section-counter mt-5">
          <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number">
                <span class="countup text-primary">3298</span>
              </span>
              <span class="caption text-black-50"># of Buy Properties</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number">
                <span class="countup text-primary">2181</span>
              </span>
              <span class="caption text-black-50"># of Sell Properties</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number">
                <span class="countup text-primary">9316</span>
              </span>
              <span class="caption text-black-50"># of All Properties</span>
            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <div class="counter-wrap mb-5 mb-lg-0">
              <span class="number">
                <span class="countup text-primary">7191</span>
              </span>
              <span class="caption text-black-50"># of Agents</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="row justify-content-center footer-cta" data-aos="fade-up">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Be a part of our growing real state agents</h2>
          <p>
            <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Apply for Real Estate agent</a>
          </p>
        </div>
        <!-- /.col-lg-7 -->
      </div>
      <!-- /.row -->
    </div>
    <div class="section section-5 bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-6 mb-5">
            <h2 class="font-weight-bold heading text-primary mb-4"> Our Agents </h2>
            <p class="text-black-50"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam enim pariatur similique debitis vel nisi qui reprehenderit totam? Quod maiores. </p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img src="view/public/images/person_1-min.jpg" alt="Image" class="img-fluid" />
              <div class="person-contents">
                <h2 class="mb-0">
                  <a href="#">James Doe</a>
                </h2>
                <span class="meta d-block mb-3">Real Estate Agent</span>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias? </p>
                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-twitter"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-facebook"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-linkedin"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img src="view/public/images/person_2-min.jpg" alt="Image" class="img-fluid" />
              <div class="person-contents">
                <h2 class="mb-0">
                  <a href="#">Jean Smith</a>
                </h2>
                <span class="meta d-block mb-3">Real Estate Agent</span>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias? </p>
                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-twitter"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-facebook"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-linkedin"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="h-100 person">
              <img src="view/public/images/person_3-min.jpg" alt="Image" class="img-fluid" />
              <div class="person-contents">
                <h2 class="mb-0">
                  <a href="#">Alicia Huston</a>
                </h2>
                <span class="meta d-block mb-3">Real Estate Agent</span>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere officiis inventore cumque tenetur laboriosam, minus culpa doloremque odio, neque molestias? </p>
                <ul class="social list-unstyled list-inline dark-hover">
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-twitter"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-facebook"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-linkedin"></span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="#">
                      <span class="icon-instagram"></span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <?php include 'inc/footer.php'; ?>
  </body>
</html>