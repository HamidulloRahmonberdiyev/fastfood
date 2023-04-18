<section class="content-header">
    <h1 style="margin: 20px;">
        Habarlar ro'yhati
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-delivery"></i> Habarlar ro'yhati</li>
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
											<th>Rasm</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($deliveries as $delivery): ?>
										<tr>
											<td><?=$delivery['id'];?></td>
											<td><?=$delivery['title'];?></td>
											<td><img src="/img/<?=$delivery['img'];?>" style="width: 150px"></td>
											<td>
												<a href="<?=ADMIN;?>/delivery/edit?id=<?=$delivery['id'];?> "><i class="fa fa-pencil"></i></a>
												<a href="<?=ADMIN;?>/delivery/delete?id=<?=$delivery['id'];?>" style="margin-left:20px"><i class="fa fa-close text-danger"></i></a>
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











































