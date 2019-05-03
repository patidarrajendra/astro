<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Horoscope</h1>
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
                        if(!empty($horoscopes[0])){
                            $url = base_url('admin/horoscopes/'.$horoscopes[0]->id);
                        }else{
                            $url = base_url('admin/horoscopes/');
                        }
                    ?>

                        <div class="col-lg-12 col-md-12">
                            <form role="form" method="post" action="<?php echo $url; ?>" class="registration_form1" enctype="multipart/form-data">
                                <div class="form-group"> <label class="col-md-2">Horoscope Name *</label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" placeholder="Horoscope name" name="horoscope_name" autocomplete="off" id="horoscope_name" required="required" value="<?php if(!empty($horoscopes[0]->horoscope_name)){ echo $horoscopes[0]->horoscope_name;}else{ echo set_value('horoscope_name');} ?>"> <span class="red" id="old">
                                            <?php echo form_error('horoscope_name'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Short Description </label>
                                    <div class="col-lg-6"> <textarea name="short_desc" id="short_desc" class="form-control" placeholder="Short Description"><?php if(!empty($horoscopes[0]->short_desc)){ echo $horoscopes[0]->short_desc;}else{ echo set_value('short_desc');} ?></textarea><span class="red" id="new">
                                            <?php echo form_error('short_desc'); ?></span> </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group"> <label class="col-md-2">Full Description </label>
                                    <div class="col-lg-6"> <textarea name="full_desc" id="full_desc" class="form-control" placeholder="Full Description"><?php if(!empty($horoscopes[0]->brief_desc)){ echo $horoscopes[0]->brief_desc;}else{ echo set_value('full_desc');} ?></textarea><span class="red" id="new">
                                            <?php echo form_error('full_desc'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Horoscope Image </label>
                                    <div class="col-lg-6"> <input class="form-control" type="file" name="horoscope_img[]" id="horoscope_img">
                                        <span class="red">
                                            <?php echo form_error('horoscope_img'); ?></span> </div>
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
    CKEDITOR.replace('short_desc');
    CKEDITOR.replace('full_desc');
</script>