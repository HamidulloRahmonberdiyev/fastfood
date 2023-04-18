
<div class="main">

<p class="text-cart"><span>Buyurtma berish</span></p>
<?php if(!empty($_SESSION['cart'])): ?>
    <div class="content">
    	<div class="section group">
<div class="content">
    <div class="content-top">
    <div class="col-md-10 table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th><h5><b>Rasm</b></h5></th>
                    <th><h5><b>Nomi<b></h5></th>
                    <th><h5><b>Narx<b></h5></th>
                    <th><h5><b>Bekor qilish</b><h5></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($_SESSION['cart'] as $id => $item): ?>
                <tr>
                    <td><a href="product/<?=$item['alias'];?>"><img src="/img/<?=$item['img'];?>" class="img-cart" alt=""></a></td>
                    <td><a><h4><?=$item['title'];?></h4><a></td>
                    <td><h4><?=$_SESSION['cart.currency']['symbol_left'];?> <?=$item['price'];?> <?=$_SESSION['cart.currency']['symbol_right'];?></h4></td>
                    <td><h2><a href="/cart/delete/?id=<?=$id;?>"><span data-id="<?=$id;?>" class="glyphicon del-item" aria-hidden="true"><i class="fa fa-times" style="color:red"></i></span></a></h2></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                </tr>
            </tbody>
        </table>
    </div>
</div><br>
        
		<div class="col-md-10">
            <form method="post" action="cart/create" role="form" data-toggle="validator">
                    <div class="form-group has-feedback">
						<label for="name">Ism</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Ism kiritish" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div><br>
					<div class="form-group has-feedback">
						<label for="phone">Telefon raqam</label>
						<input type="number" name="phone" class="form-control" id="phone" placeholder="+998" value="<?=isset($_SESSION['form_data']['phone']) ? h($_SESSION['form_data']['phone']) : '' ?>" required>
						<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
					</div><br>
					<button type="submit" class="btn btn-success">Yuborish</button>
			</form><br><br>
                <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
        </div>    
	  </div>
    </div>
  </div>
</div>
    <?php else: ?>
        <h3 class="text-cart-o">Sizda buyurtmalar yo'q...</h3>
    <?php endif; ?>

			
	