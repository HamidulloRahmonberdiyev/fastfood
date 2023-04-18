<section class="content-header">
    <h1 style="margin: 20px;">
        Valyutalar 
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-home"></i> Bosh menyu</a></li>
        <li><a href="<?=ADMIN;?>/currency"><i class="fa fa-usd text-success"></i> Valyutalar</a></li>
        <li> Valyuta qo'shish</li>
    </ol>
</section>
            <section class="content">
                <div class="xs tabls">
					<div class="panel panel-warning">
							<div class="panel-body no-padding">
                                <form action="<?=ADMIN;?>/currency/add" method="post" data-toggle="validator">
                                
                                <div class="form-group has-feedback">
                                    <label for="currency">Valyuta nomi</label>
                                    <input type="text" name="title" class="form-control" placeholder="Valyuta nomi" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="code">Kod</label>
                                    <input type="text" name="code" class="form-control" placeholder="Kod" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="symbol_left">Valyuta belgisi</label>
                                    <input type="text" name="symbol_left" class="form-control" placeholder="Belgi faqat chap tarafda">
                                </div>
                               
                                <div class="form-group">
                                    <label for="symbol_right">Valyuta belgisi</label>
                                    <input type="text" name="symbol_right" class="form-control" placeholder="Belgi faqat o'ng tarafda">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="value">Valyuta qiymati</label>
                                    <input type="text" name="value" class="form-control" placeholder="Valyuta qiymati" required data-error="Faqat raqamlar va nuqtadan foydalishga ruxsat etiladi" pattern="^[0-9.]{1,}$">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="base">
                                    <input type="checkbox" name="base" checked>
                                    Asosiy valyuta</label>
                                </div>

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-success">Saqlash</button>
                                </div>
                                </form>
							</div>
						</div>
					</div>
            </section>	      











































