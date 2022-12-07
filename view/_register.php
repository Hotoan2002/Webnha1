<?php require_once 'core/boot.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="view/public/images/favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="fonts/icomoon/style.css"/>
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"/>

    <link rel="stylesheet" href="view/public/css/tiny-slider.css"/>
    <link rel="stylesheet" href="view/public/css/aos.css"/>
    <link rel="stylesheet" href="view/public/css/style.css"/>
    <link rel="stylesheet" href="view/public/css/lgrs.css">


    <title>Web House</title>
  </head>
  <body>
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
      style="background-image: url('view/public/images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">Register</h1>

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
                  Register
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
<!-- /.Register star -->

   <!-- form wrapper -->
   <div class="container py-16">
        <div class="max-w-lg mx-auto shadow px-6 py-7 rounded overflow-hidden">
            <h2 class="text-2xl uppercase font-medium mb-1">
                create an acocunt
            </h2>
            <p class="text-gray-600 mb-6 text-sm">
                Register here if you don't have account
            </p>
            <form action="register.php" method="post">
                <div class="space-y-4">
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Full Name <span class="text-primary">*</span>
                        </label>
                        <input name="fullname" type="text" class="input-box" placeholder="Full name">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">
                            Email Address <span class="text-primary">*</span>
                        </label>
                        <input name="email" type="email" class="input-box" placeholder="Enter your email">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Password <span class="text-primary">*</span></label>
                        <input type="password" class="input-box" placeholder="Password">
                    </div>
                    <div>
                        <label class="text-gray-600 mb-2 block">Confirm Password
                            <span class="text-primary">*</span>
                        </label>
                        <input name="password" type="password" class="input-box" placeholder="Confirm your password">
                    </div>
                </div>
                <div class="flex items-center mt-6">
                    <input type="checkbox" id="agreement" class="text-primary focus:ring-0 rounded-sm cursor-pointer">
                    <label for="agreement" class="text-gray-600 ml-3 cursor-pointer">
                        I have read and agree to the
                        <a href="#" class="text-primary">terms & conditions</a>
                    </label>
                </div>
                <div class="mt-4">
                    <button type="submit" class="block w-full py-2 text-center text-white bg-primary border border-primary rounded hover:bg-transparent hover:text-primary transition uppercase font-roboto font-medium">
                        create account
                    </button>
                </div>
            </form>
            <!-- login with social -->
            <div class="mt-6 flex justify-center relative">
                <div class="absolute left-0 top-3 w-full border-b-2 border-gray-200"></div>
                <div class="text-gray-600 uppercase px-3 bg-white relative z-10">
                    OR SINGUP IN WITH
                </div>
            </div>
            <div class="mt-4 flex gap-4">
                <a href="#" class="block w-1/2 py-2 text-center text-white bg-blue-800 rounded uppercase font-roboto font-medium text-sm">
                    Facebook
                </a>
                <a href="#" class="block w-1/2 py-2 text-center text-white bg-yellow-600 rounded uppercase font-roboto font-medium text-sm">
                    Google
                </a>
            </div>
            <!-- login with social end -->
            <p class="mt-4 text-gray-600 text-center">
                Already have an account? <a href="login.php" class="text-primary">Login Now</a>
            </p>
        </div>
    </div>

<!-- /.Register end -->

<?php include 'inc/footer.php'; ?>
  </body>
</html>
