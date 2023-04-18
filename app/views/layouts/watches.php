<!DOCTYPE html>
<html lang="en">
<head>
<base href="/">
<?=$this->getMeta();?>
  <!-- <link href="img/favicon.png" rel="icon"> -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> -->
  <!-- Vendor CSS Files -->
  <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="css/main.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="<?=PATH?>" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="text-success">FastFood<span>.UZ</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?=PATH?>">Bosh sahifa</a></li>
		  <li class="dropdown"><a href="#"><span>Menyu</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
      <?php $cats = \myshop\App::$app->getProperty('cats'); ?>
      <?php if($cats): ?>	 
          <ul>
            <?php foreach($cats as $category): ?>	
				    	<li><a href="category/<?=$category['alias'];?>"><?=$category['title'];?></a></li>
					   <?php endforeach; ?>
          </ul>
      <?php endif; ?>
          </li>
          <li><a href="delivery/index">Yetkazib berish</a></li>
          <li><a href="contact/index">Aloqa</a></li>
          <li class="dropdown"><a href="#"><span>Ro'yxatdan o'tish</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>        
            <ul>
                <li><a href="user/signup">Ro'yxatdan o'tish</a></li>
                <li><a href="user/login">Kirish</a></li>
            </ul>
          </li>

          <li></li>
        </ul>
      </nav>
      <div class="col-xl-4 form-group">
	  	<form action="search" method="get" autocomplete="off">
			<input type="text" class="typeahead form-control" id="typeahead" name="s" placeholder="Qidiruv">
	  	</form>
	  </div>

      <a class="btn-book-a-table" href="cart/show" onclick="getCart(); return false;"><i class="bi bi-cart" style="font-size:18px;"></i></a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>


    </div>
  </header>

  <div class="content" style="margin-top:10%;">
  <div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if(isset($_SESSION['error'])): ?>
							<div class="alert alert-danger">
								<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
							</div>
						<?php endif; ?>
						<?php if(isset($_SESSION['success'])): ?>
							<div class="alert alert-success">
								<?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?=$content;?>
  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Manzil:</h4>
            <p>
              Xatirchi tuman <br>
              Yangirabot shahri<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Bog'lanish</h4>
            <p>
              <strong>Telefon:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Ish vaqti</h4>
            <p>
              <strong>24/7</strong> - 24 soat<br>
              Har doim: Ochiq
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Ijtimoiy tarmoqlar</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-youtube"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-telegram"></i></a>
          </div>
        </div>

      </div>
    </div>

   <!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cart</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Continue Shopping</button>
                <a href="cart/view" type="button" class="btn btn-info">Checkout</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Empty trash</button>
            </div>
        </div>
    </div>
</div> 


    <div class="container">
      <div class="copyright">
      <p><a href="https://t.me/hamidullo_rahmonberdiyev" style="color:#0d86be;">Sayt asoschisi Hamidullo Rahmonberdiyev</a></p>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <?php $curr = \myshop\App::$app->getProperty('currency'); ?>
<script>
	var path = '<?=PATH;?>';
		course = '<?=$curr['value'];?>';
		symboleLeft = '<?=$curr['symbol_left'];?>';
		symboleRight = '<?=$curr['symbol_right'];?>';
</script>
  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/validator.js"></script>
  <script type="text/javascript" src="js/typeahead.bundle.js"></script>  
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>
  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="js/my.js"></script>
  
</body>
</html>