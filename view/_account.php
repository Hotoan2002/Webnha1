<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <link rel="shortcut icon" href="view/public/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">


    <link rel="stylesheet" href="view/public/css/tiny-slider.css"/>
    <link rel="stylesheet" href="view/public/css/aos.css"/>
    <link rel="stylesheet" href="view/public/css/style.css"/>
    <link rel="stylesheet" href="view/public/css/lgrs.css">

    <title>Web House</title>
  </head>
  <?php include 'inc/navbar.php'; ?> 
  
              <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse"data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div
      class="hero page-inner overlay"
      style="background-image: url('view/public/images/hero_bg_1.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Account </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page"
                >
                Account
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <!-- account wrapper -->
    <div class="container lg:grid grid-cols-12 items-start gap-6 pt-4 pb-16">
        <!-- sidebar -->
        <div class="col-span-3">
            <!-- account profile -->
            <div class="px-4 py-3 shadow flex items-center gap-4">
                <div class="flex-shrink-0">
                    <img src="view/public/images/charlieputh.jpg"
                        class="rounded-full w-14 h-14 p-1 border border-gray-200 object-cover">
                </div>
                <div>
                    <p class="text-gray-600">Hello,</p>
                    <h4 class="text-gray-800 capitalize font-medium">Charlie Puth</h4>
                </div>
            </div>
            <!-- account profile end -->

            <!-- profile links -->
            <div class="mt-6 bg-white shadow rounded p-4 divide-y divide-gray-200 space-y-4 text-gray-600">
                <!-- single link -->
                <div class="space-y-1 pl-8">
                    <a href="account.html" 
                        class="relative text-base font-medium capitalize hover:text-primary transition block text-primary">
                        Manage account
                        <span class="absolute -left-8 top-0 text-base">
                            <i class="far fa-address-card"></i>
                        </span>
                    </a>
                    <a href="profile-info.html" class="hover:text-primary transition capitalize block">Profile information</a>
                    <a href="manage-address.html" class="hover:text-primary transition capitalize block">Manage address</a>
                    <a href="change-password.html" class="hover:text-primary transition capitalize block">change password</a>
                </div>
                <!-- single link end -->
                <!-- single link -->
                <div class="space-y-1 pl-8 pt-4">
                    <a href="#"
                        class="relative medium capitalize text-gray-800 font-medium hover:text-primary transition block">
                        My order history
                        <span class="absolute -left-8 top-0 text-base">
                            <i class="fas fa-gift"></i>
                        </span>
                    </a>
                    <a href="#" class="hover:text-primary transition block capitalize">my returns</a>
                    <a href="#" class="hover:text-primary transition block capitalize">my cancellations</a>
                    <a href="#" class="hover:text-primary transition block capitalize">my reviews</a>
                </div>
                <!-- single link end -->
                <!-- single link -->
                <div class="space-y-1 pl-8 pt-4">
                    <a href="#"
                        class="relative medium capitalize text-gray-800 font-medium hover:text-primary transition block">
                        Payment methods
                        <span class="absolute -left-8 top-0 text-base">
                            <i class="far fa-credit-card"></i>
                        </span>
                    </a>
                    <a href="#" class="hover:text-primary transition block capitalize">Voucher</a>
                </div>
                <!-- single link end -->
                <!-- single link -->
                
                <!-- single link end -->
                <!-- single link -->
                <div class="pl-8 pt-4">
                    <a href="#"
                        class="relative medium capitalize text-gray-800 font-medium hover:text-primary transition block">
                        logout
                        <span class="absolute -left-8 top-0 text-base">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                    </a>
                </div>
                <!-- single link end -->
            </div>
            <!-- profile links end -->
        </div>
        <!-- sidebar end -->

        <!-- account content -->
        <div class="col-span-9 grid md:grid-cols-3 gap-4 mt-6 lg:mt-0">
            <!-- single card -->
            <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                <div class="flex justify-between items center mb-4">
                    <h3 class="font-medium capitalize text-gray-800 text-lg">personal profile</h3>
                    <a href="#" class="text-primary">Edit</a>
                </div>
                <div class="space-y-1">
                    <h4 class="text-gray-700 font-medium">Charlie Puth</h4>
                    <p class="text-gray-800">example@mail.com</p>
                    <p class="text-gray-800">(123) 456-789</p>
                </div>
            </div>
            <!-- single card end -->
            <!-- single card -->
            <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                <div class="flex justify-between items center mb-4">
                    <h3 class="font-medium capitalize text-gray-800 text-lg">Shipping Address</h3>
                    <a href="#" class="text-primary">Edit</a>
                </div>
                <div class="space-y-1">
                    <h4 class="text-gray-700 font-medium">Charlie Puth</h4>
                    <p class="text-gray-800">3891 Ranchview Dr.</p>
                    <p class="text-gray-800">Richardson, Califora</p>
                    <p class="text-gray-800">(123) 456-789</p>
                </div>
            </div>
            <!-- single card end -->
            <!-- single card -->
            <div class="shadow rounded bg-white px-4 pt-6 pb-8">
                <div class="flex justify-between items center mb-4">
                    <h3 class="font-medium capitalize text-gray-800 text-lg">Billing Address</h3>
                    <a href="#" class="text-primary">Edit</a>
                </div>
                <div class="space-y-1">
                    <h4 class="text-gray-700 font-medium">Charlie Puth</h4>
                    <p class="text-gray-800">3891 Ranchview Dr.</p>
                    <p class="text-gray-800">Richardson, Califora</p>
                    <p class="text-gray-800">(123) 456-789</p>
                </div>
            </div>
            <!-- single card end -->
        </div>
        <!-- account content end -->
    </div>
    <!-- account wrapper end -->

    
   
    <?php include 'inc/footer.php'; ?>
</html>
