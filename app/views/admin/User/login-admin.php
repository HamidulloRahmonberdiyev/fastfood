<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<p><span>Boshqaruv</span> <a href="index.html">Panel</a></p>
						</div>
						<div class="signin">
                            <?php if(isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="lnr lnr-cross-circle"></i></button>
                                    <h4><i class="lnr lnr-ban"></i>Xatolik!</h4>
                                    <?=$_SESSION['error']; unset($_SESSION['error'])?>
                                </div>
                            <?php endif; ?>
							<form action="<?=ADMIN;?>/user/login-admin" method="post">
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name="login" value="Login" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" class="lock" name="password"  value="Parol" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Login">
						</form>	 
						</div>
					</div>
				</div>
			</div>
	