<section class="content-header">
    <h1 style="margin: 20px;">
        Yangi / Foydalanuvchi
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/user"><i class="fa fa-users"></i> Foydalanuvchilar</a></li>
        <li><i class="fa fa-user text-success"></i> Yangi foydalanuvchi</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
						<form action="/user/signup" method="post" data-toggle="validator">
                            <div class="panel-body no-padding">
                                <div class="form-group has-feedback">
                                    <label for="login">Login</label>
                                    <input type="text" name="login" class="form-control" placeholder="Login" id="login" value="<?= isset($_SESSION['form_data']['login']) ? $_SESSION['form_data']['login'] : ''?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password">Parol</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Parol">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="name">Ism</label>
                                    <input type="text" name="name" class="form-control" placeholder="Ism" id="name" value="<?= isset($_SESSION['form_data']['name']) ? $_SESSION['form_data']['name'] : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" value="<?= isset($_SESSION['form_data']['email']) ? $_SESSION['form_data']['email'] : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="phone">Telefon</label>
                                    <input type="phone" name="phone" class="form-control" placeholder="+998" id="phone" value="<?= isset($_SESSION['form_data']['phone']) ? $_SESSION['form_data']['phone'] : '';?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="address">Manzil:</label>
                                    <input type="text" name="address" class="form-control" placeholder="Yashash manzil" id="address" value="<?= isset($_SESSION['form_data']['address']) ? $_SESSION['form_data']['address'] : '';?>">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Daraja</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="user">Foydalanuvchi</option>
                                        <option value="admin">Adminstrator</option>
                                    </select>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success">Qo'shish</button>
                                </div>    
							</div>
                        </form>
                        <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
					</div>
				</div>
	      











































