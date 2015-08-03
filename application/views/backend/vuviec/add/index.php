<!-- Page Head -->
<head>

<script src="<?php echo base_url();?>js/jquery-1.6.2.min.js"></script>
<script src="<?php echo base_url();?>js/jquery-ui-1.8.15.custom.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>js/jqueryCalendar.css" />
<script>
	jQuery(function() {
	jQuery( ".datevuviec" ).datepicker();
	});
</script>

<script language="javascript">
	function createObject() {
	var request_type;
	var browser = navigator.appName;
	if(browser == "Microsoft Internet Explorer"){
	request_type = new ActiveXObject("Microsoft.XMLHTTP");
	}else{
	request_type = new XMLHttpRequest();
	}
	return request_type;
	}
	var http = createObject();
	function xa(id)
	{
		http.open('get','<?=$base?>index.php/vuviec/loadXa/'+id);
		http.onreadystatechange = process;
		http.send(null);
	}

	function process()
	{
		if(http.readyState == 4 && http.status == 200)
		{
			result= http.responseText;
			document.getElementById('xa').innerHTML= result;
		}
	}
</script>


</head>
<form action="" method="post">
	<div class="content-box"><!-- Start Content Box -->
		
		<div class="content-box-header">
			<h3>Thông tin vụ việc</h3>
			<ul class="content-box-tabs">
				<li><a href="#tab1" class="default-tab">Vụ việc</a></li> <!-- href must be unique and match the id of target div -->
				<li><a href="#tab2">Đối tượng</a></li>
				<li><a href="#tab3">Bị hại</a></li>
				<li><a href="#tab4">Thiệt hại</a></li>
				<li><a href="#tab5">Bảng</a></li>
			</ul>
			<div class="clear"></div>
		</div> <!-- End .content-box-header -->
		<div class="content-box-content">
			<div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->
				<?php if(isset($tab_vuviec) && !empty($tab_vuviec)){ $this->load->view($tab_vuviec, isset($data) ? $data : NULL);} ?>	
			</div> <!-- End #tab1 -->
				<?php if(isset($tab_doituong) && !empty($tab_doituong)){ $this->load->view($tab_doituong, isset($data) ? $data : NULL);} ?>	
			<!--Begin #tab3 --> 
			<div class="tab-content" id="tab3">
				<?php if(isset($tab_bihai) && !empty($tab_bihai)){ $this->load->view($tab_bihai, isset($data) ? $data : NULL);} ?>	
			</div> <!-- End #tab3 -->

			<div class="tab-content" id="tab4">
		
				<?php if(isset($tab_thiethai) && !empty($tab_thiethai)){ $this->load->view($tab_thiethai, isset($data) ? $data : NULL);} ?>	
			</div> <!-- End #tab4 -->
			<div class="tab-content" id="tab6">
				
			</div> <!-- End #tab6 -->  
			
		</div> <!-- End .content-box-content -->
		
	</div> <!-- End .content-box -->
	<p>
	    <input class="button" type="submit" name="submit" value="Thêm vụ việc" /> 
	    <input class="button" type="submit" name="lamlai" value="Hủy" />
	</p>
</form>