
<section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <?php if($delivery):?>
        <div class="section-header">
          <h2></h2>
          <p><span>Yetkazib berish xizmati</span></p><br>
        </div>
      <?php foreach($delivery as $item): ?>
        <div class="row gy-4">
          <div class="col-lg-6 position-relative about-img" style="background-image: url(img/<?=$item->img;?>) ;" data-aos="fade-up" data-aos-delay="150">
          </div>
          <div class="col-lg-6 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
            <div class="content ps-0 ps-lg-5">
              <h3 class="fst-italic">
                <?= $item->title;?>
              </h3>
              <h2><hr>
              <?= $item->description;?><hr>
            </h2>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
        <?php endif ?>

      </div>
    </section><!-- End About Section -->