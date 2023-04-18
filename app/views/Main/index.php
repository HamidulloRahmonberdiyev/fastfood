<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Mahsulotga<br> online buyurtma bering</h2>
          <p data-aos="fade-up" data-aos-delay="100">Yetkazib berish xizmati mutlaqo bepul.</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="cart/show" class="btn-book-a-table">Buyurtmangizni ko'rish</a>
            <a href="https://youtu.be/JEDPoVOMipY" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Tomosha qilish</span></a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="img/banner.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>

  <main id="main">

  
   
   <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">
      <?php $cats = \myshop\App::$app->getProperty('cats'); ?>
        <div class="section-header">
          <p>Taomnomalar ro'yxati</p>
        </div>
        
        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>Menyu</h3>
            </div>
              <?php if($cats): ?>
            <div class="row gy-5">
            
            <?php foreach($cats as $category): ?>	
              <div class="col-lg-4 menu-item">
                <a href="category/<?=$category['alias'];?>"><img src="img/<?=$category['img'];?>" class="menu-img img-fluid" alt="learn more">
                <h4><?=$category['title'];?></h4>
                <p class="ingredients">
                <?=$category['description'];?>
                </p>
                <p class="price">
                <?=$category['keywords'];?>
                </p></a>
              </div>
              <?php endforeach; ?>


            </div>
            <?php endif; ?>
          </div>
        </div>

      </div>
    </section>

	<!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2>
          <p><span>Mahsulotlar</span></p>
        </div>
        <?php $curr = \myshop\App::$app->getProperty('currency'); ?>
        <div class="gallery-slider swiper">
        <?php if($hits): ?>
          <div class="swiper-wrapper align-items-center">
          <?php foreach($hits as $hit): ?>
            <div class="swiper-slide"><a class="glightbox" data-gallery="images-gallery" href="img/<?=$hit->img;?>"><img src="img/<?=$hit->img;?>" class="img-fluid" alt=""></a></div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

	 <!-- ======= Stats Counter Section ======= -->
	 <section id="stats-counter" class="stats-counter">
      <div class="container" data-aos="zoom-out">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
              <p>Ish vaqti</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p>Ishchilar</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="7453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Mijozlar</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="11" data-purecounter-duration="1" class="purecounter"></span>
              <p>Turdagi mahsulot</p>
            </div>
          </div>

        </div>

      </div>
    </section>


  </main><!-- End #main -->