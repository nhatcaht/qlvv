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
						<?php //echo validation_errors(); ?>
				<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
					<p>
						<label>Tên vụ việc</label>
						<input class="text-input medium-input datepicker" type="text" id="medium-input" name="tenvuviec" value="<?php echo set_value('tenvuviec'); ?>" />
						<?php echo form_error('tenvuviec','<span class="input-notification error png_bg">','</span>'); ?>
				 	</p>
					<div>
						
					</div>
						<select name="dropdown" class="text-input small-input">
							<option value="option1">Chọn tội danh</option>
							<option value="option2">Tội 1</option>
							<option value="option3">Tội 1</option>
							<option value="option2">Tội 1</option>
							<option value="option3">Tội 1</option>
							<option value="option2">Tội 1</option>
							<option value="option3">Tội 1</option>
							<option value="option2">Tội 1</option>
							<option value="option3">Tội 1</option>
							<option value="option2">Tội 1</option>
							<option value="option3">Tội 1</option>	
						</select>
					</p>
					<p>
					<select name="dropdown" class="text-input small-input">
						<option value="option1">Tính chất vụ việc</option>
						<option value="option2">Ít nghiêm trọng</option>
						<option value="option3">Nghiêm trọng</option>
						<option value="option2">Rất nghiêm trọng</option>
						<option value="option3">Đặc biệt nghiêm trọng</option>
					</select>
					

					<select name="dropdown" class="text-input small-input">
						<option value="option1">Nguồn phát hiện</option>
						<option value="option2">Nguồn 1</option>
						<option value="option3">Nguồn 2</option>
						<option value="option2">Nguồn 3</option>
						<option value="option3">Nguồn 4</option>
						<option value="option2">Nguồn 5</option>
						<option value="option3">Nguồn 6</option>
						<option value="option2">Nguồn 7</option>
						<option value="option3">Nguồn 8</option>
						<option value="option2">Nguồn 9</option>
						<option value="option3">Nguồn 10</option>
					</select>

					<select name="dropdown" class="text-input small-input">
						<option value="option1">Chuyên đề</option>
						<option value="option2">Hình sự</option>
						<option value="option3">Kinh tế</option>
						<option value="option2">Môi trường</option>
						<option value="option3">Tai nạn Giao thông</option>
						<option value="option2">Ma túy</option>
						<option value="option3">Cháy nổ</option>
					</select>
					</p>
					<p>
						<select name="dropdown" class="text-input small-input">
						<option value="option1">Địa bàn xảy ra</option>
						<option value="option2">Tuyến Giao thông</option>
						<option value="option3">Cơ quan, xí nghiệp</option>
						<option value="option2">Nhà hàng, khác sạn, bar, vũ trường</option>
						<option value="option3">Xuyên quốc gia</option>
						<option value="option2">Vùng đồi núi</option>
						<option value="option3">Khu dân cư</option>
						<option value="option3">Bến xe, nhà ga</option>
					</select>

					
						
						<select name="dropdown" class="text-input small-input">
							<option value="option1">Chọn Huyện, Thị xã</option>
							<option value="option2">Huyện A</option>
							<option value="option3">Huyện B</option>
							<option value="option2">Huyện C</option>
							<option value="option3">Huyện D</option>
							
						</select>

						<select name="dropdown" class="text-input small-input">
							<option value="option1">Chọn xã, Phường</option>
							<option value="option2">xã A</option>
							<option value="option3">xã B</option>
							<option value="option2">xã C</option>
							<option value="option3">xã D</option>
						</select>
					</p>

					<br />
						<select name="dropdown" class="text-input small-input">
							<option value="option1">Nguyên nhân</option>
							<option value="option2">Nguyên nhân</option>
							<option value="option3">Nguyên nhân</option>
							<option value="option2">Nguyên nhân</option>
							<option value="option3">Nguyên nhân</option>
						</select>
					
						<select name="dropdown" class="text-input small-input">
							<option value="option1">Phương thức thủ đoạn</option>
							<option value="option2">Phương thức thủ đoạn</option>
							<option value="option3">Phương thức thủ đoạn</option>
							<option value="option2">Phương thức thủ đoạn</option>
							<option value="option3">Phương thức thủ đoạn</option>
						</select>

						<select name="dropdown" class="text-input small-input">
							<option value="option1">Phương tiện gây án</option>
							<option value="option2">Phương tiện giao thông</option>
							<option value="option3">Dao kiếm</option>
							<option value="option2">Phương tiện thông tin, khoa học kỹ thuật</option>
							<option value="option3">Phương thức thủ đoạn</option>
						</select>
					
					<br />
					<p>
						<label>Tình trạng vụ việc</label>
						<input type="radio" name="tinhtrang" value="0"> Đang xác minh &nbsp; &nbsp; &nbsp; 
						<input type="radio" name="tinhtrang" value="1" checked = "checked"> Đang điều tra &nbsp; &nbsp; &nbsp; 
						<input type="radio" name="tinhtrang" value="2"> Đã hoàn thành
					</p>

					<p>
						<label>Nội dung vụ việc</label>
                        <textarea class="text-input textarea" name="description" cols="79" rows="15"> <?php echo set_value('description'); ?></textarea>
                        <?php echo form_error('description','<span class="input-notification error png_bg">','</span>'); ?>
					</p>
					
				</fieldset>
					</div> <!-- End #tab1 -->
					
					<div class="tab-content" id="tab2">
					<?php
						$n = 3;
						for ($i=0; $i < $n; $i++) { 
					
					?>

						<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							<h4>Đối tượng: <?php echo $i+1; ?></h4>
							<p>
		                        <input class="text-input small-input" type="text" id="medium-input" name="hoten[$i][]" placeholder="Họ tên" value="<?php echo set_value('hoten[$i][]'); ?>" />
		                        <?php echo form_error('hoten[$i][]','<span class="input-notification error png_bg">','</span>'); ?>

		                        <input class="text-input small-input datepicker" type="text" id="medium-input" name="cmnd[$i][]" placeholder="Số CMND/Hộ chiếu" value="<?php echo set_value('cmnd[$i][]'); ?>" />
		                        <?php echo form_error('cmnd[$i][]','<span class="input-notification error png_bg">','</span>'); ?>

								<input class="text-input small-input datevuviec" type="text" name="ngaysinh[$i][]" placeholder="Ngày sinh" />
							</p>
							<p>
								<label>Giới tính</label>
								<input type="radio" name="gioitinh[$i][]" value="1"> Nam &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="gioitinh[$i][]" value="2"> Nữ 
							</p>
						<p>
						<select name="chinhtri[$i][]" class="text-input small-input">
							<option value="">Tình trạng chính trị</option>
							<option value="">Đảng viên</option>
							<option value="">Đoàn viên</option>
							<option value="">Khác</option>
						</select>

						<select name="quoctich[$i][]" class="text-input small-input">
							<option value="">Quốc tịch</option>
							<option value="">Việt Nam</option>
							<option value="">Lào</option>
							<option value="">Campuchia</option>
							<option value="">Đài Loan</option>
							<option value="">Trung Quốc</option>
						</select>

						<select name="hocvan[$i][]" class="text-input small-input">
							<option value="">Trình độ học vấn</option>
							<option value="">Tiến sỹ</option>
							<option value="">Thạc sỹ</option>
							<option value="">Cử nhân</option>
							<option value="">PTTH</option>
							<option value="">THCS</option>
							<option value="">TH</option>
						</select>

						<select name="nghenghiep[$i][]" class="text-input small-input">
							<option value="">Nghề nghiệp</option>
							<option value="">Học sinh</option>
							<option value="">Sinh viên</option>
							<option value="">Công an</option>
							<option value="">Bộ đội</option>
							<option value="">Cán bộ, công nhân viên chức</option>
							<option value="">Làm nông, lâm nghiệp</option>
							<option value="">Lao động từ do</option>
							<option value="">Hợp đồng sỹ quan, đơn vị</option>
						</select>
						
						<select name="tongiao[$i][]" class="text-input small-input">
							<option value="">Tôn giáo</option>
							<option value="">Phật giáo</option>
							<option value="">Thiên Chúa giáo</option>
							<option value="">Đạo Cao đài</option>
						</select>

						<select name="truonghopbat[$i][]" class="text-input small-input">
							<option value="">Trường hợp bắt</option>
							<option value="">Bắt khẩn cấp</option>
							<option value="">Bắt bị can tạm giam</option>
							<option value="">Bắt truy nã</option>
						</select>
					</p>
							<p>
								<label>Nơi đăng ký hộ khẩu</label>
								<select name="hokhauhuyen[$i][]" class="text-input small-input">
									<option value="0">Chọn Huyện, Thị xã</option>
									<option value="">Huyện A</option>
									<option value="">Huyện B</option>
									<option value="">Huyện C</option>
									<option value="">Huyện D</option>
									
								</select>

								<select name="hokhauxa[$i][]" class="text-input small-input">
									<option value="0">Chọn xã, Phường</option>
									<option value="">xã A</option>
									<option value="">xã B</option>
									<option value="">xã C</option>
									<option value="">xã D</option>
									
								</select>
							</p>

							<p>
								<label>Chổ ở hiện nay</label>
								<select name="choohuyen[$i][]" class="text-input small-input">
									<option value="0">Chọn Huyện, Thị xã</option>
									<option value="">Huyện A</option>
									<option value="">Huyện B</option>
									<option value="">Huyện C</option>
									<option value="">Huyện D</option>
									
								</select>

								<select name="chooxa[$i][]" class="text-input small-input">
									<option value="0">Chọn xã, Phường</option>
									<option value="">xã A</option>
									<option value="">xã B</option>
									<option value="">xã C</option>
									<option value="">xã D</option>
									
								</select>
							</p>
							<p>
								<select name="nghenghiepBH" class="text-input small-input">
									<option value="">Trường hợp bắt</option>
									<option value="">Bắt bị can, bị cáo tạm giam</option>
									<option value="">Bắt khẩn cấp</option>
									<option value="">Bắt quả tang, bắt truy nã</option>
									<option value="">Bắt trường hợp đặc biệt</option>
								</select>
							</p>
							<p>
								<label>Tiền án</label>
								<input type="radio" name="tienan[$i][]" value="1"> Có &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="tienan[$i][]" value="0"> Không 
							</p>

							<p>
								<label>Tiền sự</label>
								<input type="radio" name="tiensu[$i][]" value="1"> Có &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="tiensu[$i][]" value="0"> Không 
							</p>

							<p>
								<label>Nghiện ma túy</label>
								<input type="radio" name="nghienmatuy[$i][]" value="1"> Có &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="nghienmatuy[$i][]" value="0"> Không 
							</p>

							<p>
								<label>Thể trạng</label>
								<input type="radio" name="thetrang[$i][]" value="0"> Chết &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="thetrang[$i][]" value="1"> Bị thương &nbsp; &nbsp; &nbsp;
								<input type="radio" name="thetrang[$i][]" value="2"> Bình thường
							</p>

							<p>
								<label>Biện pháp ngăn chặn</label>
								<div id="bpnganchan">
									<p><input name ="" value="" type="checkbox" /> Biện pháp 1<input class="text-input small-input datevuviec ngaybienphap" type="text" name="ngayvuviec" placeholder="Ngày của biện pháp" /></p>
									<p><input name ="" value="" type="checkbox" /> Biện pháp 2<input class="text-input small-input datevuviec ngaybienphap" type="text" name="ngayvuviec" placeholder="Ngày của biện pháp" /></p>
									<p><input name ="" value="" type="checkbox" /> Biện pháp 3<input class="text-input small-input datevuviec ngaybienphap" type="text" name="ngayvuviec" placeholder="Ngày của biện pháp" /></p>
									<p><input name ="" value="" type="checkbox" /> Biện pháp 4<input class="text-input small-input datevuviec ngaybienphap" type="text" name="ngayvuviec" placeholder="Ngày của biện pháp" /></p>
								</div>
							</p>
							<div class="clear"></div>
							<br />

							<p>
								<label>Xử lý</label>
								<input type="radio" name="xuly" value="1"> Phạt hành chính  <input class="text-input small-input datevuviec" type="text" name="ngayvuviec" placeholder="Ngày Phạt hành chính" /> &nbsp; &nbsp; &nbsp;
								<input type="radio" name="xuly" value="2"> Khởi tố <input class="text-input small-input datevuviec" type="text" name="ngayvuviec" placeholder="Ngày khởi tố" />
							</p>

							<p>
								<input class="text-input large-input" type="text" id="large-input" name="ghichu[$i][]" placeholder="Ghi chú" value="<?php echo set_value('nameBH'); ?>" />
							</p>
							<hr>
							<br />
							
						</fieldset>

					<?php
						}
					?>
					</div> <!-- End #tab2 --> 
					
					<!--Begin #tab3 --> 
					<div class="tab-content" id="tab3">
						<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
						<p>
	                        <input class="text-input small-input" type="text" id="medium-input" name="nameBH" placeholder="Họ tên bị hại/Đại diện" value="<?php echo set_value('nameBH'); ?>" />
	                        <?php echo form_error('nameBH','<span class="input-notification error png_bg">','</span>'); ?>
							<input class="text-input small-input datevuviec" type="text" id="medium-input" name="ngaysinhBH" placeholder="Ngày sinh" value="<?php echo set_value('ngaysinhBH'); ?>" />
	                        <?php echo form_error('ngaysinhBH','<span class="input-notification error png_bg">','</span>'); ?>
						</p>

						<p>
							<label>Loại nạn nhân</label>
							<input type="radio" name="loaiBH" value="" checked="checked"> Cá nhân &nbsp; &nbsp; &nbsp; 
							<input type="radio" name="loaiBH" value=""> Tổ chức &nbsp; &nbsp; &nbsp; 
						</p>

							<p>
								<label>Giới tính</label>
								<input type="radio" name="gioitinhBH" value="1"> Nam &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="gioitinhBH" value="0"> Nữ &nbsp; &nbsp; &nbsp;
							</p>

							<p>
								<label>Thể trạng</label>
								<input type="radio" name="thetrangBH" value="0"> Chết &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="thetrangBH" value="1"> Bị thương &nbsp; &nbsp; &nbsp;
								<input type="radio" name="thetrangBH" value="2"> Bình thường
							</p>


							<p>
								<label>Trạng thái chính trị</label>
								<input type="radio" name="gioitinhBH" value="1"> Đảng viên &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="gioitinhBH" value="2"> Đoàn viên &nbsp; &nbsp; &nbsp; 
								<input type="radio" name="gioitinhBH" value="0"> Khác
							</p>


							<p>
								<select name="hocvanBH" class="text-input small-input">
									<option value="">Trình độ học vấn</option>
									<option value="">Tiến sỹ</option>
									<option value="">Thạc sỹ</option>
									<option value="">Cử nhân</option>
									<option value="">PTTH</option>
									<option value="">THCS</option>
									<option value="">TH</option>
								</select>

								<select name="nghenghiepBH" class="text-input small-input">
									<option value="">Nghề nghiệp</option>
									<option value="">Học sinh</option>
									<option value="">Sinh viên</option>
									<option value="">Công an</option>
									<option value="">Bộ đội</option>
									<option value="">Cán bộ, công nhân viên chức</option>
									<option value="">Làm nông, lâm nghiệp</option>
									<option value="">Lao động từ do</option>
									<option value="">Hợp đồng sỹ quan, đơn vị</option>
								</select>
							</p>

							<p>
								<label>Nơi đăng ký hộ khẩu</label>
								<select name="hokhauhuyenBH" class="text-input small-input">
									<option value="">Chọn Huyện, Thị xã</option>
									<option value="">Huyện A</option>
									<option value="">Huyện B</option>
									<option value="">Huyện C</option>
									<option value="">Huyện D</option>
									
								</select>

								<select name="hokhauxaBH" class="text-input small-input">
									<option value="">Chọn xã, Phường</option>
									<option value="">xã A</option>
									<option value="">xã B</option>
									<option value="">xã C</option>
									<option value="">xã D</option>
								</select>
							</p>

							<p>	
								<select name="quoctichBH" class="text-input small-input">
									<option value="">Quốc tịch</option>
									<option value="">Việt Nam</option>
									<option value="">Lào</option>
									<option value="">Cămpuchia</option>
									<option value="">Thái Lan</option>
									
								</select>

								<select name="dantocBH" class="text-input small-input">
									<option value="">Dân tộc</option>
									<option value="">Kinh</option>
									<option value="">Tày</option>
									<option value="">Nùng</option>
									<option value="">Giao</option>
								</select>
							</p>

							<p>
								<label>Địa chỉ thường trú</label>
								<select name="thuongtruhuyenBH" class="text-input small-input">
									<option value="">Chọn Huyện, Thị xã</option>
									<option value="">Huyện A</option>
									<option value="">Huyện B</option>
									<option value="">Huyện C</option>
									<option value="">Huyện D</option>
									
								</select>

								<select name="thuongtruxaBH" class="text-input small-input">
									<option value="">Chọn xã, Phường</option>
									<option value="">xã A</option>
									<option value="">xã B</option>
									<option value="">xã C</option>
									<option value="">xã D</option>
								</select>
							</p>
				</fieldset>
					</div> <!-- End #tab3 -->

					<div class="tab-content" id="tab4">
						<?php //echo validation_errors(); ?>
				
						<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
							<p>
								<label>Thiệt hại về người</label>
								<div class="thiethai">
									<p><input name ="" value="" type="checkbox" /> Người chết<input class="text-input small-input thiethaiRecord" type="text" name="nguoichet" placeholder="Số người chết" /></p>
									<p><input name ="" value="" type="checkbox" /> Bị thương<input class="text-input small-input thiethaiRecord" type="text" name="bithuong" placeholder="Số người bị thương" /></p>
								</div>
							</p>

							<p>
								<label>Thiệt hại tài sản</label>
								<div class="thiethai">
									<p><input name ="tienmat" type="checkbox" /> Tiền<input class="text-input small-input thiethaiRecord" type="text" name="ngayvuviec" placeholder="Số tiền" /></p>
									<p><input name ="checkoto" type="checkbox" /> Ô tô<input class="text-input small-input soluong" type="text" name="sooto" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tienoto" placeholder="Thành tiền" /></p>
									<p><input name ="checkxemay" type="checkbox" /> Xe máy<input class="text-input small-input soluong" type="text" name="soxemay" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tienxemay" placeholder="Thành tiền" /></p>
									<p><input name ="checkDTD" type="checkbox" /> Điện thoại<input class="text-input small-input soluong" type="text" name="sodt" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tiendt" placeholder="Thành tiền" /></p>
									<p><input name ="checkmaytinh" type="checkbox" /> Máy tính<input class="text-input small-input soluong" type="text" name="somaytinh" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tienmaytinh" placeholder="Thành tiền" /></p>
									<p><input name ="checktivi" type="checkbox" /> Tivi<input class="text-input small-input soluong" type="text" name="sotivi" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tientivi" placeholder="Thành tiền" /></p>
									<p><input name ="checkgiasuc" type="checkbox" /> Gia súc<input class="text-input small-input soluong" type="text" name="sogiasuc" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tiengiasuc" placeholder="Thành tiền" /></p>
									<p><input name ="checkgiacam" type="checkbox" /> Gia cầm<input class="text-input small-input soluong" type="text" name="sogiacam" placeholder="Số lượng" />  <input class="text-input small-input thiethaiRecord" type="text" name="tiengiacam" placeholder="Thành tiền" /></p>
									<p><input name ="checksat" type="checkbox" /> Kim loại Sắt<input class="text-input small-input soluong" type="text" name="sosat" placeholder="Số lượng (Kg)" />  <input class="text-input small-input thiethaiRecord" type="text" name="tiensat" placeholder="Thành tiền" /></p>
									<p><input name ="checkdong" type="checkbox" /> Kim loại Đồng<input class="text-input small-input soluong" type="text" name="sodong" placeholder="Số lượng (Kg)" />  <input class="text-input small-input thiethaiRecord" type="text" name="tiendong" placeholder="Thành tiền" /></p>
									<p><input name ="checkkhac" type="checkbox" /> Tài sản khác<input class="text-input small-input soluong" type="text" name="tentaisankhac" placeholder="Tên tài sản khác" />  <input class="text-input small-input thiethaiRecord" type="text" name="tiendong" placeholder="Thành tiền" /></p>
								</div>
							</p>
						</fieldset>
					</div> <!-- End #tab4 -->

					<div class="tab-content" id="tab5">
						<table>
							
							<thead>
								<tr>
								   <th><input class="" type="checkbox" /></th>
								   <th>Trường</th>
								   <th>Giá trị</th>
								</tr>
								
							</thead>
						 
							<tbody>
								<tr>
									<td><input type="checkbox" /></td>
									<td>Họ tên</td>
									<td><p>
		                        <input class="text-input small-input datepicker" type="text" id="medium-input" name="title" placeholder="Họ tên" value="<?php echo set_value('title'); ?>" />
		                        <?php echo form_error('title','<span class="input-notification error png_bg">','</span>'); ?>
							</p></td>
								</tr>
								
								
							</tbody>
							
						</table>
					</div> <!-- End #tab5 -->

					<div class="tab-content" id="tab6">
						
					</div> <!-- End #tab6 -->  
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->
</form>