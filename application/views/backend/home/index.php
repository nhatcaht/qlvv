<div class="content-box-header"> 
	<h3>Cấu hình bài viết</h3>
</div> <!-- End .content-box-header -->
<div class="content-box-content">
	<div class="tab-content default-tab">
        <?php
            $message_flashdata = $this->session->flashdata('message_flashdata');
            if(isset($message_flashdata) && count($message_flashdata))
                {
                    if($message_flashdata['type'] == 'successful')
                {
         ?>
    <div class="notification success png_bg">
        <a class="close" href="#"><img alt="close" title="Close this notification" src="template/backend/simpla-admin/resources/images/icons/cross_grey_small.png"></a>
        <div>
            <?php
                echo $message_flashdata['message'];
            ?>   
        </div>
    </div>
        <?php
        }
            elseif($message_flashdata['type'] == 'error')
        {
        ?>

        <div class="notification error png_bg">
            <a class="close" href="#"><img alt="close" title="Close this notification" src="template/backend/simpla-admin/resources/images/icons/cross_grey_small.png"></a>
            <div>
                <?php
                    echo $message_flashdata['message'];
                ?>   
            </div>
        </div>
        
        <?php
        }
        }
        ?>
	</div> <!-- End #tab3 -->        
</div> <!-- End .content-box-content -->
				
			