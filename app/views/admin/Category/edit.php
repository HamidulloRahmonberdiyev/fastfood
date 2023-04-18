<section class="content-header">
    <h1 style="margin: 20px;">
        Tahrirlash / <?=$category->title;?>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/category"><i class="fa fa-th-large text-success"></i> Kategoriyalar</a></li>
        <li><i class="fa fa-pencil text-success"></i> <?=$category->title;?></li>
    </ol>
</section>
            <section class="content">
                <div class="xs tabls">
					<div class="panel panel-warning">
							<div class="panel-body no-padding">
                                <form action="<?=ADMIN;?>/category/edit" method="post" data-toggle="validator">
                                <div class="form-group has-feedback">
                                    <label for="title">Kategoriya nomi</label>
                                    <input type="text" name="title" class="form-control" placeholder="Kategoriya nomi" value="<?=h($category->title);?>" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Tegishli kategoriya</label>
                                    <?php new \app\widgets\menu\Menu([
                                    'tpl' => WWW . '/menu/select.php',
                                    'container' => 'select',
                                    'cache' => 0,
                                    'cacheKey' => 'admin_select',
                                    'class' => 'form-control',
                                    'attrs' => [
                                        'name' => 'parent_id',
                                        'id' => 'parent_id',
                                    ],
                                    'prepend' => '<option value="0">Alohida kategoriya</option>',
                                    ]); ?>
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="keywords">Menyudagi narx</label>
                                    <input type="text" name="keywords" class="form-control" placeholder="Narx kiritish" value="<?=h($category->keywords);?>">
                                </div>
                                <div class="form-group has-feedback">
                                    <label for="description">Tavsifi</label>
                                    <input type="text" name="description" class="form-control" placeholder="Tavsifi" value="<?=h($category->description);?>">
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div class="box box-danger box-solid file-upload">
                                            <div class="box-header">
                                                <h3 class="box-title"> Rasm</h3>
                                            </div>
                                        <div class="box-body"><br>
                                            <div id="photo" class="btn btn-success" data-url="delivery/add-image" data-name="photo">Rasmni tanlash</div>
                                                <p><small>Tavsiya etiladigan o'lcham: <b>600х600</b>    </small></p><br>
                                            <div class="photo">
                                            <img src="/img/<?=$category->img;?>" alt="" style="max-height: 170px; margin-left: 5px;">
                                            </div><br>
                                        </div>
                                            <div class="overlay">
                                                <i class="fa fa-refresh fa-spin"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="box-footer">
                                    <input type="hidden" name="id" value="<?=$category->id;?>">
                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                </div>
                                </form>
							</div>
						</div>
					</div>
            </section>	      











































