<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <base href="http://localhost/nhattv/qlvv/" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo isset($meta_title) ? $meta_title : NULL ?></title>
    <link rel="stylesheet" href="template/backend/simpla-admin/resources/css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="template/backend/simpla-admin/resources/css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="template/backend/simpla-admin/resources/css/invalid.css" type="text/css" media="screen" />	
    <script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/simpla.jquery.configuration.js"></script>
    <script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/facebox.js"></script>
    <script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/jquery.wysiwyg.js"></script>
    <!--[if IE 6]>
            <script type="text/javascript" src="template/backend/simpla-admin/resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
            <script type="text/javascript">
                    DD_belatedPNG.fix('.png_bg, img, li');
            </script>
    <![endif]-->
		
</head>
    <body id="login">
        <div id="login-wrapper" class="png_bg">
            <div id="login-top">
                <h1>Đăng nhập</h1>
                <!-- Logo (221px width) -->
                <img id="logo" src="template/backend/simpla-admin/resources/images/logo.png" alt="Simpla Admin logo" />
            </div> <!-- End #logn-top -->
            <?php if(isset($template) && !empty($template)) {$this->load->view($template, isset($data) ? $data  : NULL); }?>
        </div> <!-- End #login-wrapper -->
  </body>
  </html>
