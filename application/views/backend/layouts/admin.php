<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <base href="http://localhost/nhattv/qlvv/" />
	<title><?php echo isset($meta_title) ? htmlspecialchars($meta_title) : '' ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<link rel="stylesheet" href="template/backend/simpla-admin/resources/css/reset.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="template/backend/simpla-admin/resources/css/style.css" type="text/css" media="screen" />
		
		<link rel="stylesheet" href="template/backend/simpla-admin/resources/css/invalid.css" type="text/css" media="screen" />

		<link rel="stylesheet" href="template/backend/simpla-admin/resources/css/mycss.css" type="text/css" media="screen" />	
		
		<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/jquery-1.3.2.min.js"></script>
		
		<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/simpla.jquery.configuration.js"></script>
		
		<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/facebox.js"></script>
		
		<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/jquery.wysiwyg.js"></script>
		
		<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/jquery.datePicker.js"></script>
		<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/jquery.date.js"></script>
		
		<!--[if IE 6]>
			<script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->
		
	</head>
  
	<body><div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#">Simpla Admin</a></h1>
		  
			<!-- Logo (221px wide) -->
			<a href="#"><img id="logo" src="template/backend/simpla-admin/resources/images/logo.png" alt="Simpla Admin logo" /></a>
		  
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				Hello, <a href="#" title="Edit your profile">John Doe</a>, you have <a href="#messages" rel="modal" title="3 Messages">3 Messages</a><br />
				<br />
				<a href="#" title="View the Site">View the Site</a> | <a href="./index.php/authentication/logout" title="Sign Out">Sign Out</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->
				
                            <li>
                                <a href="." class="nav-top-item no-submenu"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
                                    Quản lý chung
                                </a>       
                            </li>

                            <li> 
                                <a href="index.php/admin" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
                                Bài viết
                                </a>
                                <ul>
                                    <li><a <?php echo (isset($active) && ($active == 'view')) ? 'class="current"' : '' ?> href="index.php/articles_item/view">Quản lý bài viết</a></li> <!-- Add class "current" to sub menu items also -->
                                    <li><a <?php echo (isset($active) && ($active == 'add')) ? 'class="current"' : '' ?> href="index.php/articles_item/add">Viết bài mới</a></li>
                                </ul>
                            </li>


                            <li> 
                                <a href="index.php/articles_category" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
                                Danh mục
                                </a>
                                <ul>
                                    <li><a <?php echo (isset($active) && ($active == 'articles_category-add')) ? 'class="current"' : '' ?> href="index.php/articles_category/add">Thêm danh mục mới</a></li>	
                                    <li><a <?php echo (isset($active) && ($active == 'articles_category-view')) ? 'class="current"' : '' ?> href="index.php/articles_category/view">Quản lý danh mục</a></li> <!-- Add class "current" to sub menu items also -->

                                </ul>
                            </li>
                            <li> 
                                <a href="index.php/articles_category" class="nav-top-item"> <!-- Add the class "current" to current menu item -->
                                Hình ảnh
                                </a>
                                <ul>
                                    <li><a <?php echo (isset($active) && ($active == 'articles_category-add')) ? 'class="current"' : '' ?> href="index.php/articles_category/add">Thêm danh mục mới</a></li>	
                                    <li><a <?php echo (isset($active) && ($active == 'articles_category-view')) ? 'class="current"' : '' ?> href="index.php/articles_category/view">Quản lý danh mục</a></li> <!-- Add class "current" to sub menu items also -->

                                </ul>
                            </li>

                            <li> 
                                <a href="index.php/vuviec" class="nav-top-item current"> <!-- Add the class "current" to current menu item -->
                                Vụ việc
                                </a>
                                <ul>
                                    <li><a <?php echo (isset($active) && ($active == 'vuviec-add')) ? 'class="current"' : '' ?> href="index.php/vuviec/add">Thêm vụ việc mới</a></li>	
                                    <li><a <?php echo (isset($active) && ($active == 'vuviec-view')) ? 'class="current"' : '' ?> href="index.php/vuviec/view">Quản lý vụ việc</a></li> <!-- Add class "current" to sub menu items also -->

                                </ul>
                            </li>
				
			</ul> <!-- End #main-nav -->
			
			<div id="messages" style="display: none"> <!-- Messages are shown when a link with these attributes are clicked: href="#messages" rel="modal"  -->
				
                            <h3>3 Messages</h3>

                            <p>
                                <strong>17th May 2009</strong> by Admin<br />
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                                <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                            </p>

                            <p>
                                    <strong>2nd May 2009</strong> by Jane Doe<br />
                                    Ut a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
                                    <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                            </p>

                            <p>
                                    <strong>25th April 2009</strong> by Admin<br />
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
                                    <small><a href="#" class="remove-link" title="Remove message">Remove</a></small>
                            </p>

                            <form action="#" method="post">

                                    <h4>New Message</h4>

                                    <fieldset>
                                            <textarea class="textarea" name="textfield" cols="79" rows="5"></textarea>
                                    </fieldset>

                                    <fieldset>

                                        <select name="dropdown" class="small-input">
                                            <option value="option1">Send to...</option>
                                            <option value="option2">Everyone</option>
                                            <option value="option3">Admin</option>
                                            <option value="option4">Jane Doe</option>
                                        </select>

                                            <input class="button" type="submit" value="Send" />

                                    </fieldset>

                            </form>
				
			</div> <!-- End #messages -->
			
		</div></div> <!-- End #sidebar -->
		
		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					Download From <a href="http://www.exet.tk">exet.tk</a></div>
				</div>
			</noscript>
			
			<?php if(isset($template) && !empty($template)){ $this->load->view($template, isset($data) ? $data : NULL);} ?>
			<div class="clear"></div>
			
			
			<div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2009 Your Company | Powered by <a href="http://themeforest.net/item/simpla-admin-flexible-user-friendly-admin-skin/46073">Simpla Admin</a> | <a href="#">Top</a>
				</small>
			</div><!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div></body>
  

<!-- Download From www.exet.tk-->
</html>
