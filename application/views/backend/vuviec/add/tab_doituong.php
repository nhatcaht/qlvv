				<div class="tab-content" id="tab2">
					<?php
						$n = $_SESSION['sodt'];
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