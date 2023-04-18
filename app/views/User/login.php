<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2></h2><br><br>
          <p><span>Kirish</span></p>
        	</div>
        </div>

	<div class="col-md-10">
	<form method="post" action="user/login" id="login" role="form" data-toggle="validator">
		<div class="form-group has-feedback">
			<label for="login">Login</label>
			<input type="text" name="login" class="form-control" id="login" placeholder="Login" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
			<div class="help-block with-errors"></div>
		</div><br>
		<div class="form-group has-feedback">
			<label for="password">Parol</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Parol" data-error="Parol kamida 6 ta belgidan iborat bo'lishi kerak" data-minlength="6" value="<?=isset($_SESSION['form_data']['password']) ? h($_SESSION['form_data']['password']) : '' ?>" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
		</div><br>
			<button type="submit" class="btn btn-success">Yuborish</button>
		</div>
	</form><br> 
    </div>
</div>
</section>
