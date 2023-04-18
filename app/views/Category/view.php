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
              <h1><?=$breadcrumbs;?></h1>
            </div>
			<?php if($products): ?>
            <div class="row gy-5" id="products">
			<?php foreach($products as $product): ?>
            <div class="col-lg-4 menu-item">
                <a href="img/<?=$product->img;?>" class="glightbox"><img src="img/<?=$product->img;?>" class="menu-img img-fluid" alt=""></a>
                <h1><?=$product->title;?></h1>
                <p class="price">
                <span id="base-price" data-base="<?=$product->price * $curr['value'];?>"> <?=$curr['symbol_left'];?><?=$product->price * $curr['value'];?> <?=$curr['symbol_right'];?></span>
                </p>
                <p class="ingredients">
                <a href="cart/add?id=<?=$product->id;?>" data-id="<?=$product->id;?>" class="add-to-cart-link btn btn-success" id="productAdd">Buyurtma berish</a>
                </p>
			      </div>
			<?php endforeach; ?>
            </div>
			<?php if($pagination->countPages > 1): ?>
			<?=$pagination; ?>
			<?php endif; ?>
			<?php else: ?>
                <h3 class="text text-center">Bu kategoriyada mahsulot mavjud emas...</h3><br>
			<?php endif; ?>
          </div>
        </div>
      </div>
    </section>
</main>

