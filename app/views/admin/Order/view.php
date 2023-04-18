<section class="content-header">
    <h1 style="margin: 20px;">
        Buyurtma №<?=$order['id'];?>
        <?php if(!$order['status']): ?>
            <a href="<?=ADMIN;?>/order/change?id=<?=$order['id'];?>&status=1" class="btn btn-primary">Yangilash</a>
        <?php else: ?>
            <a href="<?=ADMIN;?>/order/change?id=<?=$order['id'];?>&status=0" class="btn btn-default">Qayta ko'rib chiqish</a>
        <?php endif; ?>
            <a href="<?=ADMIN;?>/order/delete?id=<?=$order['id'];?>" class="btn btn-danger  delete">O'chirish</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-truck text-success"><a href="<?=ADMIN;?>/order"></i> Buyurtmalar ro'yhati</a></li>
        <li class="active">Buyurtma №<?=$order['id'];?></i></li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Buyrtma raqami</td>
											<td><?=$order['id'];?></td>
										</tr>
                                        <tr>
											<td>Vaqti</td>
											<td><?=$order['date'];?></td>
										</tr>
                                        <tr>
											<td>Yangilangan vaqti</td>
											<td><?=$order['update_at'];?></td>
										</tr>
                                        <tr>
											<td>Soni</td>
											<td><?=count($order_products);?></td>
										</tr>
                                        <tr>
											<td>Summa</td>
											<td><?=$order['sum'];?> <?=$order['currency'];?></td>
										</tr>
                                        <tr>
											<td>Ism</td>
											<td><?=$order['name'];?></td>
										</tr>
                                        <tr>
											<td>Telefon</td>
											<td><?=$order['phone'];?></td>
										</tr>
                                        <tr>
											<td>Status</td>
											<td><?=$order['status'] ? 'Yakunlandi' : 'Yangi';?></td>
										</tr>
									</tbody>
								</table>
							</div>
                            <h2 style="margin: 20px;">Buyurtma tafsilotlari</h2>
                        <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
						<div class="panel-body no-padding">
							<table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nomi</th>
                                        <th>Soni</th>
                                        <th>Narx</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $qty = 0; foreach($order_products as $product): ?>
                                    <tr>
                                        <td><?=$product->id;?></td>
                                        <td><?=$product->title;?></td>
                                        <td><?=$product->qty; $qty += $product->qty;?></td>
                                        <td><?=$product->price;?></td>
                                    </tr>
                                    <?php endforeach; ?>
                                    <tr class="active">
                                        <td colspan="2">
                                            <b>Jami:</b>
                                        </td>
                                        <td><b><?=$qty;?></b></td>
                                        <td><b><?=$order['sum'];?> <?=$order['currency'];?></b></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
				</div>
			</div>
				</div>
			</div>
		</div>
	</div>	      











































