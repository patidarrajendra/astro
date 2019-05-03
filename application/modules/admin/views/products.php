<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Product</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <?php if ($info_message = $this->session->flashdata('success_msg')): ?>
            <div id="form-messages" class="alert alert-success" role="alert">
                <?php echo $info_message; ?>
            </div>
            <?php endif ?>
            <?php if ($error_message = $this->session->flashdata('error')): ?>
            <div id="form-messages" class="alert alert-danger" role="alert">
                <?php echo $error_message; ?>
            </div>
            <?php endif ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <?php 
                        if(!empty($products[0])){
                            $url = base_url('admin/products/'.$products[0]->id);
                        }else{
                            $url = base_url('admin/products/');
                        }
                    ?>
                        <div class="col-lg-12 col-md-12">
                            <form role="form" method="post" action="<?php echo $url; ?>" class="registration_form1" enctype="multipart/form-data">
                                <div class="form-group"> <label class="col-md-2">Product Name *</label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" placeholder="Product name" name="product_name" autocomplete="off" id="product_name" required="required" value="<?php if(!empty($products[0]->name)){ echo $products[0]->name;}else{ echo set_value('product_name');} ?>"> <span class="red" id="old"><?php echo form_error('product_name'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Price * </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="price" id="price" placeholder="Price" autocomplete="off" required="required" value="<?php if(!empty($products[0]->price)){ echo $products[0]->price;}else{ echo set_value('price');} ?>"> <span class="red"><?php echo form_error('price'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Categories * </label>
                                    <div class="col-lg-6"> <select name="category_id" class="form-control">
                                            <option value="">--SELECT CATEGORY--</option>
                                            <?php foreach($categories as $category){?>
                                            <option value="<?php echo $category->id;?>" <?php if(!empty($products[0]->category_id) && $products[0]->category_id==$category->id){echo 'selected';}?>>
                                                <?php echo $category->name;?>
                                            </option>
                                            <?php }?>
                                        </select>
                                        <span class="red"><?php echo form_error('category_id'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Short Description </label>
                                    <div class="col-lg-6"> <textarea name="description" id="description" class="form-control" placeholder="Product Short Description"><?php if(!empty($products[0]->description)){ echo $products[0]->description;}else{ echo set_value('description');} ?></textarea><span class="red" id="new">
                                            <?php echo form_error('description'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Brief Description </label>
                                    <div class="col-lg-6"> <textarea name="brief_description" id="brief_description" class="form-control" placeholder="Product Brief Description"><?php if(!empty($products[0]->brief_description)){ echo $products[0]->brief_description;}else{ echo set_value('brief_description');} ?></textarea><span class="red" id="new"><?php echo form_error('brief_description'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Ref Number *</label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" placeholder="Ref Number" name="ref_no" autocomplete="off" id="ref_no" required="required" value="<?php if(!empty($products[0]->ref_no)){ echo $products[0]->ref_no;}else{ echo set_value('ref_no');} ?>"> <span class="red" id="old"><?php echo form_error('ref_no'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Quantity *</label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" placeholder="Quantity" name="quantity" autocomplete="off" id="quantity" required="required" value="<?php if(!empty($products[0]->quantity)){ echo $products[0]->quantity;}else{ echo set_value('quantity');} ?>"> <span class="red" id="old"><?php echo form_error('quantity'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Images </label>
                                    <div class="col-lg-6"> <input name="images[]" class="form-control" type="file" multiple="multiple">
                                        <?php   
                                        if(!empty($products[0]->images)){
                                            $images = explode(',',$products[0]->images); 
                                            for($i=0;$i<count($images);$i++){?>
                                        <img src="<?php echo base_url('asset/uploads/'.trim($images[$i]));?>" width="100px" height="100px">
                                        <?php }}?>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-md-12" align="center">
                                    <input type="submit" id="submit" name="submit" class="btn btn-success" value="Save">&nbsp; <button type="reset" class="btn btn-default">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- row -->
</div>
</div>
<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('brief_description');
</script>