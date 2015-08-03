<!-- Page Head -->
<h2>Thêm Bài viết</h2>
<p id="page-intro">Quản lý</p>
<div class="clear"></div> <!-- End .clear -->
<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Thông tin</h3>
        <div class="clear"></div>
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab">
            <?php echo validation_errors(); ?>
            <form action="" method="post">
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Tên Bài viết</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input" name="title" value="<?php echo set_value('title'); ?>" />
                        <?php echo form_error('title','<span class="input-notification error png_bg">','</span>'); ?>
                    </p>

                    <p>
                        <label>Mô tả</label>
                        <textarea class="text-input textarea" name="description" cols="79" rows="5"> <?php echo set_value('description'); ?></textarea>
                        <?php echo form_error('description','<span class="input-notification error png_bg">','</span>'); ?>
                    </p>
                    
                    <p>
                        <label>Nội dung</label>
                        <textarea class="text-input textarea" name="content" cols="79" rows="15"> <?php echo set_value('content'); ?></textarea>
                        <?php echo form_error('content','<span class="input-notification error png_bg">','</span>'); ?>
                    </p>
                    <p>
                        <label>Chuyên mục</label>
                        <?php echo form_dropdown('cat_id', $articles_item_list, '1'); ?>
                        <?php echo form_error('cat_id','<span class="input-notification error png_bg">','</span>'); ?>
                    </p>

                    <p>
                            <input class="button" type="submit" name="submit" value="Thêm mới" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div> <!-- End #tab2 -->        

    </div> <!-- End .content-box-content -->
	
</div> <!-- End .content-box -->
