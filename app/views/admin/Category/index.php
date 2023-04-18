<section class="content-header">
    <h1 style="margin: 20px;">
        Kategoriyalar
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><i class="fa fa-truck text-success"></i> Kategoriyalar</li>
    </ol>
</section>
            <section class="content">
                <div class="xs tabls">
					<div class="panel panel-warning">
							<div class="panel-body no-padding">
                                <?php new \app\widgets\menu\Menu([
                                    'tpl' => WWW . '/menu/category_admin.php',
                                    'container' => 'div',
                                    'cache' => 0,
                                    'cacheKey' => 'admin_cat',
                                    'class' => 'list-group list-group-root well',
                                ]); ?>
							</div>
						</div>
					</div>
            </section>	      











































