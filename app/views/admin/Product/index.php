<section class="content-header">
    <h1 style="margin: 20px;">
        Mahsulotlar ro'yhati
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-cubes text-success"></i> Mahsulotlar ro'yhati</li>
    </ol>
</section>
                <div class="xs tabls">
					<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
							<div class="panel-body no-padding">
								<table class="table table-striped">
									<thead>
										<tr class="warning">
											<th>ID</th>
											<th>Nomi</th>
											<th>Kategoriya</th>
											<th>Narx</th>
											<th>Status</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($products as $product): ?>
										<tr>
											<td><?=$product['id'];?></td>
											<td><?=$product['title'];?></td>
											<td><?=$product['cat'];?></td>
											<td><?=$product['price'];?></td>
											<td><?=$product['status'] ? 'On' : 'Off';?></td>
											<td>
												<a href="<?=ADMIN;?>/product/edit?id=<?=$product['id'];?> "><i class="fa fa-pencil"></i></a>
												<a href="<?=ADMIN;?>/product/delete?id=<?=$product['id'];?>" data-src="<?=$gallery;?>" style="margin-left:25px"><i class="fa fa-close text-danger"></i></a>
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











































