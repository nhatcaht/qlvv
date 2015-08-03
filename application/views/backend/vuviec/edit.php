<!-- Page Head -->
<h2>Chỉnh sửa Danh mục</h2>
<p id="page-intro">Quản lý</p>

<div class="clear"></div> <!-- End .clear -->

<div class="content-box"><!-- Start Content Box -->
    <div class="content-box-header">
        <h3>Thông tin</h3>
        <div class="clear"></div>
    </div> <!-- End .content-box-header -->
    <div class="content-box-content">
        <div class="tab-content default-tab">
            <?php //echo validation_errors(); ?>
            <form action="" method="post">
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Tên danh mục</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input" name="title" value="<?php echo $articles_category['title']; ?>" />
                        <?php echo form_error('title','<span class="input-notification error png_bg">','</span>'); ?>
                    </p>
                    <p>
                        <label>Mô tả</label>
                        <textarea class="text-input textarea" name="description" cols="79" rows="15"> <?php echo $articles_category['description']; ?></textarea>
                        <?php echo form_error('description','<span class="input-notification error png_bg">','</span>'); ?>
                    </p>

                    <p>
                        <input class="button" type="submit" name="submit" value="Lưu lại" />
                    </p>

                </fieldset>

                <div class="clear"></div><!-- End .clear -->

            </form>

        </div> <!-- End #tab2 -->        

    </div> <!-- End .content-box-content -->
	
</div> <!-- End .content-box -->
