<!--Breadcrumb start-->
<div class="ast_pagetitle">
<div class="ast_img_overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="page_title">
					<h2>cart</h2>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12">
				<ul class="breadcrumb">
					<li><a href="index.html">home</a></li>
					<li>//</li>
					<li><a href="about.html">cart</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!--Breadcrumb end--> 


<!-- Cart section Start -->
<div class="ast_cart_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-xs-12">
				<div class="table-responsive cart_table">
					<table class="table">
						<tr>
							<th>Products</th>
							<th>Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Action</th>
						</tr>
						<?php 
						//echo '<pre>'; print_r($this->cart->contents()); 
						$total = 0;
						$i=0;
						 foreach($this->cart->contents() as $val){?>
						<tr>
							<td>
								<span class="prod_thumb">
									<img src="<?php echo base_url('asset/uploads/'.$val['image'])?>" alt="" class="img-responsive" />
								</span>
								<div class="product_details">
									<h4><a href="#"><?php echo $val['name']?></a></h4>
								</div>
							</td>
							<td><?php echo $val['price']?></td>
							<td><input type="number" name="pro_quantity" id="pro_quantity_<?php echo $val['rowid']?>" class="pro_quantity" value="<?php echo $val['qty']?>" min="0"></td>
							<td><?php echo $product_total = $val['qty']*$val['price'];?></td>
							<td>
								<a href="javascript:void(0);" id="<?php echo $val['rowid']?>" class="ast_cart_remove ast_remove_item"><i class="fa fa-trash"></i></a> | <a href="javascript:void(0);" id="<?php echo $val['rowid']?>" class="update_cart_item"><i class="fa fa-refresh" aria-hidden="true"></i></a>

							</td>
						</tr>
						<?php 
								$total+=$product_total;
							$i++;
						}
						?>
						<tr>
							<td>&nbsp;<td>
							<td>&nbsp;</td>
							<td>Total</td>
							<td><?php echo $total;?></td>
							<!-- <td>&nbsp;</td> -->
						</tr>
					</table>
					<a href="<?php echo base_url('front/buy')?>" class="proceed_btn ast_btn" value="Apply Cupon Code">checkout</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- cart section end --> 

<!-- Download wrapper start-->
<div class="ast_download_wrapper ast_toppadder70 ast_bottompadder70">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-10 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-1 col-xs-offset-0">
				<div class="ast_heading">
					<h1>Download our <span>Mobile App</span></h1>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected hummer.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-lg-offset-3 col-md-offset-3">
				<div class="ast_download_box">
					<ul>
						<li><a href="#"><img src="images/content/download1.png" alt="Download" title="Download"></a></li>
						<li><a href="#"><img src="images/content/download2.png" alt="Download" title="Download"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Download wrapper End-->