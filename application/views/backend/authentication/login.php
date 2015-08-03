<div id="login-content">
    <form action="" method="post">
        <?php echo validation_errors(); ?>
        <p>
            <label>Email</label>
            <input class="text-input" type="text" name="email" value="<?php echo set_value('email'); ?>" />
        </p>
        <div class="clear"></div>
        <p>
            <label>Mật khẩu</label>
            <input class="text-input" type="password" name="password" value="<?php echo set_value('password'); ?>" />
        </p>
        <div class="clear"></div>
        <p id="remember-password">
            <input type="checkbox" name="remember" value="1" />Ghi nhớ cho lần sau
        </p>
        <div class="clear"></div>
        <p>
            <input class="button" name="submit" type="submit" value="Đăng nhập" />
        </p>
    </form>
</div> <!-- End #login-content -->