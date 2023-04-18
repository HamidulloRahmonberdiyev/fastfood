<section class="content-header">
    <h1 style="margin: 20px;">
        Tahrirlash / Foydalanuvchilar
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/user"><i class="fa fa-users"></i> Foydalanuvchilar</a></li>
        <li><i class="fa fa-pencil text-success"></i> Tahrirlash</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
						<form action="<?=ADMIN;?>/user/edit" method="post" data-toggle="validator">
                            <div class="panel-body no-padding">
                                <div class="form-group has-feedback">
                                    <label for="login">Login</label>
                                    <input type="text" name="login" class="form-control" placeholder="Login" id="login" value="<?= h($user->login);?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="password">Parol</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Agar parolni o'zgartirmoqchi bo'lsangiz uni kiriting" >
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="name">Ism</label>
                                    <input type="text" name="name" class="form-control" placeholder="Ism" id="name" value="<?= h($user->name);?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" id="email" value="<?= h($user->email);?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="phone">Telefon</label>
                                    <input type="phone" name="phone" class="form-control" placeholder="+998" id="phone" value="<?= h($user->phone);?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="address">Manzil:</label>
                                    <input type="text" name="address" class="form-control" placeholder="Yashash manzil" id="address" value="<?= h($user->address);?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <label>Daraja</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="user"<?php if ($user->role == 'user') echo ' selected';?>>Foydalanuvchi</option>
                                        <option value="admin"<?php if ($user->role == 'admin') echo ' selected';?>>Adminstrator</option>
                                    </select>
                                </div>
                                <div class="box-footer">
                                    <input type="hidden" name="id" value="<?=$user->id;?>">
                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                </div>    
							</div>
                        </form>
					</div>
                <div class="panel panel-warning">
                    <div class="panel-body no-padding">
                            <h3>Foydalanuvchining buyurtmasi</h3>
                                <?php if ($orders): ?>
                                <table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Status</th>
											<th>Summa</th>
											<th>Kiritilgan vaqt</th>
											<th>Yangilangan vaqt</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($orders as $order): ?>
											<?php $class = $order['status'] ? 'success' : ''; ?>
										<tr class="<?=$class;?>">
											<td><?=$order['id'];?></td>
											<td><?=$order['status'] ? 'Yakunlandi' : 'Yangi';?></td>
											<td><?=$order['sum'];?> <?=$order['currency'];?></td>
											<td><?=$order['date'];?></td>
											<td><?=$order['update_at'];?></td>
											<td>
												<a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>"><i class="fa fa-eye"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
                            <?php else: ?>
                                <p class="text-danger">Foydalanuvchida buyurtma mavjud emas...</p>
                            <?php endif; ?>
				        </div>
			        </div>
		        </div>
	      











































