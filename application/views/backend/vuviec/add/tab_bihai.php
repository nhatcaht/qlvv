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