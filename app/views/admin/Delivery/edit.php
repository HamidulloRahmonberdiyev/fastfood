<section class="content-header">
    <h1 style="margin: 20px;">
        Tahrirlash / Habar
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/delivery"><i class="fa fa-list text-success"></i> Habarlar</a></li>
        <li> Tahrirlash</li>
    </ol>
</section>
            <section class="content">
                <div class="xs tabls">
					<div class="panel panel-warning">
						<div class="panel-body no-padding">
                            <form action="<?=ADMIN;?>/delivery/edit" method="post" data-toggle="validator">

                                <div class="form-group has-feedback">
                                    <label for="title">Sarlavha</label>
                                    <input type="text" name="title" class="form-control" placeholder="Sarlavha matni" value="<?=h($delivery->title); ?>" id="title" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="description">Habar matni</label>
                                    <textarea name="description" id="editor1" cols="80" rows="10" required><?= $delivery->description; ?></textarea>
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
                                            <img src="/img/<?=$delivery->img;?>" alt="" style="max-height: 170px; margin-left: 5px;">
                                            </div><br>
                                        </div>
                                            <div class="overlay">
                                                <i class="fa fa-refresh fa-spin"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?=$delivery->id;?>">
                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                </div>
                            </form>
						</div>
					</div>
				</div>
        </section>	      











































