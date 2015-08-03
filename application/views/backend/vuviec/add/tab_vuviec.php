				<fieldset> <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
					<p>
						<label>Tên vụ việc</label>
						<input class="text-input medium-input datepicker" type="text" id="medium-input" name="tenvuviec" value="<?php echo set_value('tenvuviec'); ?>" />
						<?php echo form_error('tenvuviec','<span class="input-notification error png_bg">','</span>'); ?>
				 	</p>

				 	<p>
						<select name="dropdown" class="text-input small-input">
							<option value="0">Chọn tội danh</option>
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
					<?php $js = 'onChange="xa(this.value);"'; ?>
					<?php $selectedHuyen = ($this->input->post('idHuyenXayRa')) ? $this->input->post('idHuyenXayRa') : '0'; echo form_dropdown('idHuyenXayRa', $listHuyen, $selectedHuyen, $js); ?>
                    <?php echo form_error('idHuyenXayRa','<span class="input-notification error png_bg">','</span>'); ?>
					
					<p id="xa"></p><!--Hiển thị xã-->
						<select name="dropdown" class="text-input small-input">
							<option value="option1">Địa bàn xảy ra</option>
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
                        <textarea class="text-input textarea" name="noidung" cols="79" rows="15"> <?php echo set_value('noidung'); ?></textarea>
                        <?php echo form_error('noidung','<span class="input-notification error png_bg">','</span>'); ?>
					</p>
					
				</fieldset>