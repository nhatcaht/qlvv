<?php
    // Hàm lấy url hiện tại ở trang web đang hiển thị
    function fullUrl()
    {
        $pageURL = 'http';
        if (@$_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
         $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
         $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        return $pageURL;
    }
?>

<h2>Hiển thị Danh mục</h2>
<p id="page-intro">Quản lý</p>

<ul class="shortcut-buttons-set">

    <li><a class="shortcut-button" href="#"><span>
            <img src="template/backend/simpla-admin/resources/images/icons/pencil_48.png" alt="icon" /><br />
            Viết bài mới
    </span></a></li>

    <li><a class="shortcut-button" href="#"><span>
            <img src="template/backend/simpla-admin/resources/images/icons/paper_content_pencil_48.png" alt="icon" /><br />
            Tạo mới trang
    </span></a></li>

    <li><a class="shortcut-button" href="#"><span>
            <img src="template/backend/simpla-admin/resources/images/icons/image_add_48.png" alt="icon" /><br />
            Upload an Image
    </span></a></li>

    <li><a class="shortcut-button" href="#"><span>
            <img src="template/backend/simpla-admin/resources/images/icons/clock_48.png" alt="icon" /><br />
            Thêm sự kiện
    </span></a></li>

    <li><a class="shortcut-button" href="#messages" rel="modal"><span>
            <img src="template/backend/simpla-admin/resources/images/icons/comment_48.png" alt="icon" /><br />
            Open Modal
    </span></a></li>

</ul><!-- End .shortcut-buttons-set -->

<div class="clear"></div> <!-- End .clear -->

<div class="content-box"><!-- Start Content Box -->

    <div class="content-box-header">

        <h3>Content box</h3>
        <div class="clear"></div>

    </div> <!-- End .content-box-header -->

    <div class="content-box-content">

         <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
<?php
echo form_error('checkbox[]','<div class="notification error png_bg">
        <a href="#" class="close"><img src="template/backend/simpla-admin/resources/images/icons/cross_grey_small.png" title="Close this notification" alt="close"></a><div>','</div></div> '); 
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

                    <form action="" method="POST">
                        <table>

                                <thead>
                                        <tr>
                                           <th><input class="check-all" type="checkbox" /></th>
                                           <th>ID</th>
                                           <th>Tiêu đề</th>
                                           <th>Mô tả</th>
                                           <th>Ngày đăng</th>
                                           <th>Trạng thái</th>
                                           <th>Thao tác</th>
                                           
                                        </tr>							
                                </thead>
                                <tfoot>
                                        <tr>
                                            <td colspan="7">
                                                    <div class="bulk-actions align-left">

                                                        <select name="action" id="select-action">
                                                            <option value="">Chọn thao tác</option>
                                                            <option value="delete">Xóa danh mục</option>
                                                            <option value="hide">Ẩn danh mục</option>
                                                            <option value="show">Hiển thị danh mục</option>
                                                        </select>
                                                        <a class="button" href="#" id="link-submit">Aply to select</a>
                                                        <div style="display: none;"><input id="btn-submit" class="button" type="submit" name="submit" value="Thực thi" /></div>
                                                    </div>
                                                    <?php echo isset($list_pagination) ? $list_pagination : ''  ?>
                                                    <div class="clear"></div>
                                            </td>
                                        </tr>
                                </tfoot>
                                <?php
                                    if(isset($list_articles_category) && count($list_articles_category))
                                    {
                                        foreach($list_articles_category as $key => $val)
                                        {
                                            ?>
                                        <tr>
                                            <td><input type="checkbox" name="checkbox[]" value="<?php echo $val['id_cat']; ?>" /></td>
                                            <td><?php echo $val['id_cat']; ?></td>
                                            <td><?php echo htmlspecialchars(cutnchar($val['title'], 10)); ?></td>
                                            <td><?php echo $val['description']; ?></td>
                                            <td><a href="#" title="title"><?php echo date('H:i:s d/m/Y',strtotime($val['created'])); ?></a></td>
                                            <td><img src="template/backend/simpla-admin/resources/images/icons/<?php echo ($val['public'] == '1') ? 'tick_circle' : 'cross_circle' ?>.png" /></td>
                                            <td>
                                                <!-- Icons -->
                                                <a href="index.php/articles_category/edit/<?php echo $val['id_cat']; ?>?redirect=<?php echo base64_encode(fullUrl()); ?>" title="Edit"><img src="template/backend/simpla-admin/resources/images/icons/pencil.png" alt="Edit" /></a>
                                                <a href="index.php/articles_category/del/<?php echo $val['id_cat']; ?>?redirect=<?php echo base64_encode(fullUrl()); ?>" title="Delete"><img src="template/backend/simpla-admin/resources/images/icons/cross.png" alt="Delete" /></a> 
                                            </td>
                                            
                                        </tr>  
                                            <?php
                                        }
                                    }else
                                        {
                                            echo '<tr><td colspan="6">Không có dữ liệu</td></tr>';
                                        }
                                ?>
                                <tbody>								
                                </tbody>							
                        </table>                                            
                </form>
                </div> <!-- End #tab1 -->					
        </div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->
<script type="text/javascript">
    $(document).ready(function(){
       $('#link-submit').click(function(){
          if($('#select-action').val() == 'delete')
          {
              var cf = confirm('Xóa sẽ làm mất dữ liệu không thể phục hồi. Bạn có chắc chắn xóa?');
              if(cf == true)
              {
                  $("#btn-submit").click();
              }
          }else
          {
              $("#btn-submit").click();
          }
          
        return false;
       });
    });
</script>