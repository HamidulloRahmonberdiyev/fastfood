<section class="content-header">
    <h1 style="margin: 20px;">
        Foydalanuvchilar ro'yhati
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-users text-success"></i> Foydalanuvchilar ro'yhati</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Login</th>
											<th>Ism</th>
											<th>Email</th>
											<th>Telefon</th>
											<th>Manzil</th>
											<th>Daraja</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($users as $user): ?>
										<tr>
											<td><?=$user->id;?></td>
											<td><?=$user->login;?></td>
											<td><?=$user->name;?></td>
											<td><?=$user->email;?></td>
											<td><?=$user->phone;?></td>
											<td><?=$user->address;?></td>
											<td><?=$user->role;?></td>
											<td>
												<a href="<?=ADMIN;?>/user/edit?id=<?=$user->id;?>"><i class="fa fa-pencil"></i></a>
												<a href="<?=ADMIN;?>/user/delete?id=<?=$user->id;?>"><i class="fa fa-close text-danger" style="margin-left:35px"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
							<div class="text-center">
								<?php if($pagination->countPages > 1): ?>
									<?=$pagination;?>
								<?php endif; ?>
							</div>
						</div>
						</div>
					</div>	      











































