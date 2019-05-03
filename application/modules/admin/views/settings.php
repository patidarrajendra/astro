<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Add Setting</h1>
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
                        if(!empty($settings[0])){
                            $url = base_url('index.php/admin/settings/'.$settings[0]->id);
                        }else{
                            $url = base_url('index.php/admin/settings/');
                        }
                    ?>
                        <div class="col-lg-12 col-md-12">
                            <form role="form" method="post" action="<?php echo $url; ?>" class="registration_form1" enctype="multipart/form-data">
                                <div class="form-group"> <label class="col-md-2">Site Mail *</label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" placeholder="Site Mail" name="site_mail" autocomplete="off" id="site_mail" required="required" value="<?php if(!empty($settings[0]->site_mail)){ echo $settings[0]->site_mail;}else{ echo set_value('site_mail');} ?>"> <span class="red" id="old"><?php echo form_error('site_mail'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Site Phone * </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="site_phone" id="site_phone" placeholder="Site Phone" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->site_phone)){ echo $settings[0]->site_phone;}else{ echo set_value('site_phone');} ?>"> 
                                    <span class="red"><?php echo form_error('site_phone'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Site Alternative Phone * </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="a_site_phone" id="a_site_phone" placeholder="Site Alternative Phone" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->site_alternative_phone)){ echo $settings[0]->site_alternative_phone;}else{ echo set_value('site_alternative_phone');} ?>"> 
                                    <span class="red"><?php echo form_error('a_site_phone'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Logo </label>
                                    <div class="col-lg-6"> <input type="file" name="site_logo[]" id="site_logo" class="form-control">
                                    <span class="red" id="new"><?php echo form_error('site_logo'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Facebook Page Url </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="facebook_page_url" id="facebook_page_url" placeholder="Facebook Page Url" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->facebook_url)){ echo $settings[0]->facebook_url;}else{ echo set_value('facebook_url');} ?>">
                                    <span class="red" id="new"><?php echo form_error('facebook_page_url'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Linked Page Url </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="linked_page_url" id="linked_page_url" placeholder="Linked Page Url" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->linkedin_url)){ echo $settings[0]->linkedin_url;}else{ echo set_value('linkedin_url');} ?>">
                                    <span class="red" id="new"><?php echo form_error('linked_page_url'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Google+ Page Url </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="google_page_url" id="google_page_url" placeholder="Google+ Page Url" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->google_url)){ echo $settings[0]->google_url;}else{ echo set_value('google_url');} ?>">
                                    <span class="red" id="new"><?php echo form_error('google_page_url'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Pinterest Page Url </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="pinterest_page_url" id="pinterest_page_url" placeholder="Pinterest Page Url" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->pinterest_url)){ echo $settings[0]->pinterest_url;}else{ echo set_value('pinterest_url');} ?>">
                                    <span class="red" id="new"><?php echo form_error('pinterest_page_url'); ?></span> </div>
                                </div>
                                <div class="form-group"> <label class="col-md-2">Twitter Page Url </label>
                                    <div class="col-lg-6"> <input class="form-control" type="text" name="twitter_page_url" id="twitter_page_url" placeholder="Twitter Page Url" autocomplete="off" required="required" value="<?php if(!empty($settings[0]->twitter_url)){ echo $settings[0]->twitter_url;}else{ echo set_value('twitter_url');} ?>">
                                    <span class="red" id="new"><?php echo form_error('twitter_page_url'); ?></span> </div>
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