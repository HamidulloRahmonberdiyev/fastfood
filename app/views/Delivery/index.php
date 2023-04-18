
    <section id="chefs" class="chefs section-bg">
      <div class="container" data-aos="fade-up"><br><br>

        <div class="section-header">
          <h2></h2>
          <p><span>Yetkazib berish xizmati</span></p><br>
        </div>
		<?php if ($delivery): ?>
        <div class="row gy-4">
		<?php foreach ($delivery as $item): ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="chef-member">
              <div class="member-img">
                <img src="img/<?=$item->img;?>" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-telegram"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-youtube"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?=$item->title;?></h4>
                <p><a href="delivery/view/<?=$item->alias;?>" class="btn btn-success" type="button">Habarni Ko'rish <i class="bi bi-arrow-right"></i></a></p>
              </div>
            </div>
          </div>
		  <?php endforeach; ?>
        </div>
		<?php endif; ?>
      
	</div>
    </section>
