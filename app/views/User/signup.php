<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2><br><br>
          <p><span>Ro'yxatdan o'tish</span></p>
        	</div>
        </div>

	<div class="col-md-10">
	<form method="post" action="user/signup" id="signup" role="form" data-toggle="validator">
		<div class="form-group has-feedback">
			<label for="login">Login</label>
			<input type="text" name="login" class="form-control" id="login" placeholder="Login" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '' ?>" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div><br>
		<div class="form-group has-feedback">
			<label for="password">Parol</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="******" data-error="Parol kamida 6 ta belgidan iborat bo'lishi kerak" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '' ?>" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div><br>
		<div class="form-group has-feedback">
			<label for="name">Ism</label>
			<input type="text" name="name" class="form-control" id="name" placeholder="Ism kiritish" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '' ?>" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div><br>
		<div class="form-group has-feedback">
			<label for="phone">Telefon raqam</label>
			<input type="number" name="phone" class="form-control" id="phone" placeholder="+998" value="<?=isset($_SESSION['form_data']['phone']) ? h($_SESSION['form_data']['phone']) : '' ?>" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div><br>
		<div class="form-group has-feedback">
			<label for="email">Email</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="Email kiritish" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '' ?>" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div><br>
			<button type="submit" class="btn btn-success">Yuborish</button>
				</div>
	</form><br>
		<?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?> 
    </div>
</div>
</section>