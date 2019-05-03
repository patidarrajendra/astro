<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Page</h1>
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
                        if(!empty($page[0])){
                            $url = base_url('admin/pages/'.$page[0]->id);
                        }else{
                            $url = base_url('admin/pages/');
                        }
                    ?>

                        <div class="col-lg-12 col-md-12">
                            <form role="form" method="post" action="<?php echo $url; ?>" class="registration_form1" enctype="multipart/form-data">
                                <div class="form-group"> <label class="col-md-2">Page Name *</label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" placeholder="Page name" name="page_name" autocomplete="off" id="page_name" required="required" value="<?php if(!empty($page[0]->page_name)){ echo $page[0]->page_name;}else{ echo set_value('page_name');} ?>"> <span class="red" id="old">
                                            <?php echo form_error('page_name'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Page Title  </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="page_title" id="page_title" placeholder="Page Title" autocomplete="off" required="required" value="<?php if(!empty($page[0]->page_title)){ echo $page[0]->page_title;}else{ echo set_value('page_title');} ?>"> <span class="red">
                                            <?php echo form_error('page_title'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Short Description  </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="short_description" id="short_description" placeholder="Short Description" autocomplete="off" required="required" value="<?php if(!empty($page[0]->short_description)){ echo $page[0]->short_description;}else{ echo set_value('short_description');} ?>"> <span class="red">
                                            <?php echo form_error('short_description'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Breif Description  </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="Brief Bescription" id="brief_description" placeholder="brief_descriptione" autocomplete="off" required="required" value="<?php if(!empty($page[0]->brief_description)){ echo $page[0]->brief_description;}else{ echo set_value('brief_description');} ?>"> <span class="red">
                                            <?php echo form_error('brief_description'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Meta Title  </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="meta_title" id="meta_title" placeholder="Meta Title" autocomplete="off" required="required" value="<?php if(!empty($page[0]->meta_title)){ echo $page[0]->meta_title;}else{ echo set_value('meta_title');} ?>"> <span class="red"><?php echo form_error('meta_title'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Meta Keywords </label>
                                    <div class="col-lg-6"> <textarea name="meta_keywords" id="meta_keywords" class="form-control" placeholder="Meta Keywords"><?php if(!empty($page[0]->meta_keywords)){ echo $page[0]->meta_keywords;}else{ echo set_value('meta_keywords');} ?></textarea><span class="red" id="new">
                                            <?php echo form_error('meta_keywords'); ?></span> </div>
                                </div>
                                <div class="clearfix"></div>
                                 <div class="form-group"> <label class="col-md-2">Meta Description </label>
                                    <div class="col-lg-6"> <textarea name="meta_description" id="meta_description" class="form-control" placeholder="Meta Description"><?php if(!empty($page[0]->meta_description)){ echo $page[0]->meta_description;}else{ echo set_value('meta_description');} ?></textarea><span class="red" id="new">
                                            <?php echo form_error('meta_description'); ?></span> </div>
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
  CKEDITOR.replace('meta_keywords');
  CKEDITOR.replace('meta_description');
</script>