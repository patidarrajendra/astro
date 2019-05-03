<!--Breadcrumb start-->
<div class="ast_pagetitle">
    <div class="ast_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="page_title">
                    <h2>Success</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <ul class="breadcrumb">
                    <li><a href="<?php echo base_url()?>">home</a></li>
                    <li>//</li>
                    <li><a href="">Success</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--Breadcrumb end-->
<div class="ast_cart_wrapper ast_toppadder70 ast_bottompadder70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="success_page_msg">
                    <!-- <h2 style="font-size:18px; color:#313131; padding-bottom:8px;">Dear Member</h2> -->
                    <div class="alert alert-success">
                        <span style="color: #646464; font-size:18px;"><strong>Dear Member !!! </strong>Your payment was successful, thank you!</span><br />
                    </div>
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <table class="table table-responsive table-bordered">

                            <tr>
                            <th>Item Number</th>
                            <th>Item quantity</th>
                            <th>Item Total</th>
                            </tr>

                                <?php if(!empty($item)){
                                        for($i=1;$i<=count($item);$i++){?>
                                <tr>
                                    
                                    <td><?php echo $item[$i]['name']; ?></td>
                                    <td><?php if(!empty($item[$i]['quantity'])) { echo $item[$i]['quantity'];} ?></td>
                                    <td><?php if(!empty($item[$i]['mc_gross'])){ echo $item[$i]['mc_gross'];} ?></td>
                                </tr>
                                <?php }}?>

                                
                                
                            </table>

                            <table class="table table-responsive table-bordered">
                                <tr>
                                    <th>Transaction ID</th>
                                    <td><?php if(!empty($txn_id)){ echo $txn_id; }?></td>
                                </tr>

                                <tr>
                                    <th>Amount Paid </th>
                                    <td><?php echo $payment_amt.' '.$currency_code; ?></td>
                                </tr>

                                <tr>
                                    <th>Payment Status</th>
                                    <td><?php if(!empty($status)){ echo $status; }?></td>
                                </tr>
                            </table>


                            <a href="<?php echo base_url('front/shop/'); ?>" class="btn ast_btn">Continue Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
