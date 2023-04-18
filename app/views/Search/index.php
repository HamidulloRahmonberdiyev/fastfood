<?php $curr = \myshop\App::$app->getProperty('currency'); ?>
<main id="main">
<section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <p></p>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h1 class="text-danger">Qidiruv bo'yicha...</h1>
            </div>
			<?php if($products): ?>
            <div class="row gy-5">
			<?php foreach($products as $product): ?>
              <div class="col-lg-4 menu-item">
                <a href="img/<?=$product->img;?>" class="glightbox"><img src="img/<?=$product->img;?>" class="menu-img img-fluid" alt=""></a>
                <h1><?=$product->title;?></h1>
				<p class="price">
                <span id="base-price" data-base="<?=$product->price * $curr['value'];?>"> <?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?> <?=$curr['symbol_right'];?></span>
                </p>
                <p class="ingredients">
                <a class="add-to-cart-link" id="productAdd" data-id="<?=$product->id;?>" href="cart/add?id=<?=$product->id;?>">
                <button class="btn btn-success">Buyurma berish</button></a>
                </p>
               
			</div>
			<?php endforeach; ?>
            </div>
			<?php else: ?>
                <br><h3 class="text-center">Bu qidiruv bo'yicha hech narsa topilmadi...</h3><br>
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
          <p><span>Menyular</span></p>
        </div>
		<?php $cats = \myshop\App::$app->getProperty('cats'); ?>
        <div class="gallery-slider swiper">
		<?php if($cats): ?>
          <div class="swiper-wrapper align-items-center">
		  <?php foreach($cats as $category): ?>
            <div class="swiper-slide"><a href="category/<?=$category['alias'];?>"><img src="img/<?=$category['img'];?>" class="img-fluid" alt=""></a></div>
          <?php endforeach; ?>
		  </div>
		  <?php endif; ?>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
	
</main>
