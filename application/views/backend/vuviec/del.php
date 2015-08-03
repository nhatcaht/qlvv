<!-- Page Head -->
<h2>Xóa danh mục</h2>
<p id="page-intro">Quản lý</p>
<div class="clear"></div> <!-- End .clear -->
<div class="content-box"><!-- Start Content Box -->	
    <div class="content-box-header">		
        <h3>Thông tin</h3>
        <div class="clear"></div>		
    </div> <!-- End .content-box-header -->	
    <div class="content-box-content">
        <div class="tab-content default-tab">
            <form action="" method="post">
                <fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
                    <p>
                        <label>Tên danh mục</label>
                        <input class="text-input medium-input datepicker" type="text" id="medium-input" name="title" value="<?php echo $articles_category['title']; ?>" />
                    </p>
                    <p>
                        <input class="button" type="submit" name="submit" value="Xóa danh mục" />
                    </p>
                </fieldset>
                    <div class="clear"></div><!-- End .clear -->
            </form>
        </div> <!-- End #tab2 -->        
    </div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->
