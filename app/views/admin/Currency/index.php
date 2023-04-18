<section class="content-header">
    <h1 style="margin: 20px;">
        Valyutalar
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-usd text-success"></i> Valyutalar</li>
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
											<th>Kod</th>
											<th>Qiymati</th>
											<th>Kuzatish</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($currencies as $currency): ?>
										<tr>
											<td><?=$currency->id;?></td>
											<td><?=$currency->title;?></td>
											<td><?=$currency->code;?></td>
											<td><?=$currency->value;?></td>
											<td>
												<a href="<?=ADMIN;?>/currency/edit?id=<?=$currency->id;?>"><i class="fa fa-pencil"></i></a>
												<a href="<?=ADMIN;?>/currency/delete?id=<?=$currency->id;?>" style="margin-left:10px"><i class="fa fa-close text-danger"></i></a>
											</td>
										</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>	      











































