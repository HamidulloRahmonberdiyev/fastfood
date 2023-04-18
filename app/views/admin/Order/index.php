<section class="content-header">
    <h1 style="margin: 20px;">
        Buyurtmalar ro'yhati
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-truck text-success"></i> Buyurtmalar ro'yhati</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Xaridor</th>
											<th>Buyurtma</th>
											<th>Summa</th>
											<th>Telefon</th>
											<th>Status</th>
											<th>Kiritilgan vaqt</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($orders as $order): ?>
											<?php $class = $order['status'] ? 'success' : ''; ?>
										<tr class="<?=$class;?>">
											<td><h4><?=$order['id'];?></h4></td>
											<td><h4><?=$order['name'];?></h4></td>
											<td><h4><?=$order['title'];?></h4></td>
											<td><h4><?=$order['sum'];?> <?=$order['currency'];?></h4></td>
											<td><h4><?=$order['phone'];?></h4></td>
											<td><h4><?=$order['status'] ? 'Yakunlandi' : 'Yangi';?></h4></td>
											<td><h4><?=$order['date'];?></h4></td>
											<td>
												<h4>
												<a href="<?=ADMIN;?>/order/view?id=<?=$order['id'];?>"><i class="fa fa-eye"></i></a>
												<a href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>" style="margin-left:25px"><i class="fa fa-close text-danger"></i></a>
												<h4>	
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











































