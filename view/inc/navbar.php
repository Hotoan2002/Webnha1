 <!-- header -->
 <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.php" class="logo m-0 float-start">Property</a>           
            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              <li class="has-children"> 
              </li>
              <li><a href="index.php">Home</a></li>
              <li><a href="cart.php">Cart</a></li>
              
              <?php if (isset($_SESSION['user'])) { ?>
                <li><a href="logout.php" class="">Logout</a></li>
                <?php } else { ?>
                  <li><a href="login.php" class="">Login</a></li>
                    <span class="text-white">/</span>
                    <li><a href="register.php" class="">Register</a></li>
                <?php } ?>              
            </ul>  
 <!-- header end -->